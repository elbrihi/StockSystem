<?php

//category_fetch.php

include('database_connection.php');

$query = '';

$output = array();

$query .= "SELECT * FROM caisse ";


if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE designation LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR type LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR montant LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR date LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST['order']))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY caisse_id DESC ';
}


if($_POST['length'] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$filtered_rows = $statement->rowCount();

foreach($result as $row)
{
	
	$status = '';
	if($row['caisse_status'] == 'active')
	{
		$status = '<span class="label label-success">Active</span>';
		
	}
	else
	{
		$status = '<span class="label label-danger">Desactive</span>';

	}

	$sub_array = array();
	$sub_array[] = $row['caisse_id'];
	$sub_array[] = $row['designation'];
	$sub_array[] = $row['type'];	
	$sub_array[] = $row['montant'];
	$sub_array[] = $row['date'];
	$sub_array[] = $status;
	$sub_array[] = '<button type="button" name="update" id="'.$row["caisse_id"].'" class="btn btn-warning btn-xs update">Update</button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["caisse_id"].'" class="btn btn-danger btn-xs delete" data-status="'.$row["caisse_status"].'">Delete</button>';

	$data[] = $sub_array;
	
}

$output = array(
	"draw"			    =>	intval($_POST["draw"]),
	"recordsTotal"  	=>  $filtered_rows,
	"recordsFiltered" 	=> 	get_total_all_records($connect),
	"data"				=>	$data
);

function get_total_all_records($connect)
{
	$statement = $connect->prepare("SELECT * FROM caisse");
	$statement->execute();
	return $statement->rowCount();
}

echo json_encode($output);

?>