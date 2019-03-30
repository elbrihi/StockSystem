<?php

//category_fetch.php

include('database_connection.php');

$query = '';

$output = array();

$query .= "SELECT * FROM history WHERE   ";


//die;
$query .= " date ";

if($_POST["is_date_search"]=="yes")
{
	$query .= '  BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" ';

}
if($_POST["search"]["value"])
{
 $query .= ' OR id LIKE "%'.$_POST["search"]["value"].'%"
          OR date LIKE "%'.$_POST["search"]["value"].'%"
             ';
}
if(isset($_POST["order"]))
{
 $query .= ' ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= ' ORDER BY id DESC ';
}
if($_POST["length"] != -1)
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
	
	$sub_array = array();
	$sub_array[] = $row['id'];
	$sub_array[] = $row['do'];
	$sub_array[] = $row['date'];
	$data[] = $sub_array;
}

function get_total_all_records($connect)
{
	$statement = $connect->prepare('SELECT * FROM history');
	$statement->execute();
	return $statement->rowCount();
}

$output = array(
	"draw"			    =>	intval($_POST["draw"]),
	"recordsTotal"  	=>  $filtered_rows,
	"recordsFiltered" 	=> 	get_total_all_records($connect),
	"data"				=>	$data
);



echo json_encode($output);

?>