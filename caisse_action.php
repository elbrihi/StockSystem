<?php

//category_action.php

include('database_connection.php');

if(isset($_POST['btn_action']))
{
	
	if($_POST['btn_action'] == 'Add')
	{
		
		$query = "
		INSERT INTO caisse (type, designation, montant, user_id, date, caisse_status) 
		VALUES (:type, :designation, :montant, :user_id, :date, :caisse_status)
		";
		
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':type'     	=>	$_POST["type"],
				':designation'	=>	$_POST["designation"],
				':montant'  	=>	$_POST["montant"],
				':user_id'  	=>	$_SESSION["user_id"],
				':date'	        =>	date("Y-m-d"),
				':caisse_status'=> "active",
			)
		);
		
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo $_POST["designation"].' a ete ajoutee';
			
			
			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name'].' a ' .$_POST["type"] . '  '. $_POST["designation"] .' du montant ' .$_POST["montant"].'à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
	}
	
	if($_POST['btn_action'] == 'fetch_single')
	{
		$query = "SELECT * FROM caisse WHERE caisse_id = :caisse_id";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':caisse_id'	=>	$_POST["caisse_id"]
				)
		);
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['designation'] = $row['designation'];
			$output['montant'] = $row['montant'];
		}
		echo json_encode($output);
	}

	if($_POST['btn_action'] == 'Edit')
	{
		$query = "
		UPDATE caisse set
		type = :type,
		designation =:designation,
		montant = :montant		  
		WHERE caisse_id = :caisse_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':type'         	=>	$_POST["type"],
				':designation'	    =>	$_POST["designation"],
				':montant'		=>	$_POST["montant"],
				':caisse_id'		=>	$_POST["caisse_id"],
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'la caisse  a ete modiffie';
			echo $_SESSION['user_name'];
			//echo date();
			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name'].' a modifiee ' .$_POST["type"] . '  '. $_POST["designation"] .' du montant ' .$_POST["montant"].'à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
	}
	if($_POST['btn_action'] == 'delete')
	{
		$status = 'active';
		
		if($_POST['status'] == 'active')
		{
			$status = 'inactive';	
		}
		
		$query = "
		UPDATE caisse 
		SET caisse_status = :caisse_status 
		WHERE caisse_id = :caisse_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':caisse_status'	=>	$status,
				':caisse_id'		=>	$_POST["caisse_id"]
			)
		);
		
		$result = $statement->fetchAll();
		if(isset($result))
		{
			
			
			echo $_SESSION['user_name'];
			//echo date();
			$query = "
			INSERT INTO history (do, date ) 
			VALUES (:do, :date)
			";
			$statement = $connect->prepare($query);
			$statement->execute(
				array(
					':do'	=> $_SESSION['user_name'].' a suprimee   designation de la   numero ' .$_POST["caisse_id"].'à la date ' . date("Y-m-d"),
					':date' => date("Y-m-d"),
				)
			);
		}
	}
}

?>