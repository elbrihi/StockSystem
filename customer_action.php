<?php

//user_action.php

include('database_connection.php');

if(isset($_POST['btn_action']))
{
	
	if($_POST['btn_action'] == 'Add')
	{
		
		$query = "
		INSERT INTO customer (first_name, last_name, email, telephone, adress, customer_status, customer_existence) 
		VALUES (:first_name, :last_name, :email, :telephone, :adress,:customer_status, :customer_existence)
		";	
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':first_name'		=>	$_POST["customer_first_name"],
				':last_name'	    =>	$_POST["customer_last_name"],
				':email'	    	=>	$_POST["customer_email"],
				':telephone'		=>	$_POST["customer_telephone"],
				':adress'		    =>	$_POST["customer_adress"],
				':customer_status'	=>	"active",
				':customer_existence'		=>	"exist",
				
			)
		);
	
		
		
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'le client '.$_POST["customer_first_name"].' a ete enregistre ';
			//echo date();
			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name']. ' a ajoute un nouvel client Mrs ' . $_POST["customer_first_name"]. '  '. $_POST["customer_first_name"]. ' à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
		
	}
	if($_POST['btn_action'] == 'fetch_single')
	{
		
		$query = "
		SELECT * FROM customer WHERE id = :id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':id'	=>	$_POST["customer_id"]
			)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['customer_first_name'] = $row['first_name'];
			$output['customer_last_name'] = $row['last_name'];
			$output['customer_email'] = $row['email'];
			$output['customer_telephone'] = $row['telephone'];
			$output['customer_adress'] = $row['adress'];
			$output['customer_id'] = $row['id'];
			
		}
		echo json_encode($output);
	}
	if($_POST['btn_action'] == 'Edit')
	{
		
		$query = "
		UPDATE customer set first_name = :first_name, email = :last_name, email = :email, telephone = :telephone, adress = :adress  
		WHERE id = :customer_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':first_name'	=>	$_POST["customer_first_name"],
				':last_name'	=>	$_POST["customer_last_name"],
				':email'	    =>	$_POST["customer_email"],
				':telephone'	=>	$_POST["customer_telephone"],
				':adress'		=>	$_POST["customer_adress"],
				':customer_id'	=>	$_POST["customer_id"],
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'le client '.$_POST["customer_first_name"].' a ete modifiee ';

			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name']. ' a modifiée les cordonnes de Mrs à '  . $_POST["customer_first_name"]. '  '. $_POST["customer_first_name"]. ' à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
	}
	if($_POST['btn_action'] == 'delete')
	{
		$status = 'Active';
		if($_POST['status'] == 'Active')
		{
			$status = 'Inactive';
		}
		$query = "
		UPDATE customer 
		SET customer_status = :customer_status 
		WHERE id = :customer_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':customer_status'	=>	$status,
				':customer_id'		=>	$_POST["customer_id"]
			)
		);	
		$result = $statement->fetchAll();	
		if(isset($result))
		{
			echo 'Client Status a ete change to ' . $status;

			//echo date();
			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name']. ' a suprimer  client de Code ' . $_POST["customer_id"]. ' à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
	}
}

?>