<?php

//order_action.php

include('database_connection.php');

include('function.php');

if(isset($_POST['btn_action']))
{
	if($_POST['btn_action'] == 'Add')
	{ 

		print_r($_POST);
		
		
		if($_POST["missing_value"] == '')
		{
			 $missing_value =  0;
		}
		else
		{
			 $missing_value = $_POST["missing_value"];
		}
		
	    $inventory_order_name= '';
		$customer_id = 0;
		if($_POST['customer_check']=='customer_exist')
		{	
			
				$inventory_order_name = fill_customer_list_byId($connect,$_POST['inventory_order_name_id']);
				$customer_id = $_POST['inventory_order_name_id'];
		}
		else
		{
			$inventory_order_name = $_POST['inventory_order_name'];
			$customer_id = 0;
		}
		
		$query = "
		INSERT INTO inventory_order (user_id,customer_id, inventory_order_total, inventory_order_date, inventory_order_name, inventory_order_address, payment_status, inventory_order_status, inventory_order_created_date) 
		VALUES (:user_id,:customer_id, :inventory_order_total, :inventory_order_date, :inventory_order_name, :inventory_order_address, :payment_status, :inventory_order_status, :inventory_order_created_date)
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_id'						=>	$_SESSION["user_id"],
				':inventory_order_total'		=>	0,                            // ?????????
				':inventory_order_date'			=>	$_POST['inventory_order_date'],
				':inventory_order_name'			=>	$inventory_order_name,
				':inventory_order_address'		=>	$_POST['inventory_order_address'],
				':payment_status'				=>	$_POST['payment_status'],
				':inventory_order_status'		=>	'active',
				':customer_id'                  =>   $customer_id,
				':inventory_order_created_date'	=>	date("Y-m-d")
			)
		);
		$result = $statement->fetchAll();
		$statement = $connect->query("SELECT LAST_INSERT_ID()");
		$inventory_order_id = $statement->fetchColumn();//id????
		//$inventory_order_id = 0;
		if(isset($inventory_order_id))
		{
			
			$total_amount = 0;
			
			for($count = 0; $count<count($_POST["product_id"]); $count++)
			{
				$num_base_price = 0;
				$product_details = fetch_product_details($_POST["product_id"][$count], $connect);
				$sub_query = "
				INSERT INTO inventory_order_product (inventory_order_id, product_id, quantity, price, tax, profit) VALUES (:inventory_order_id, :product_id, :quantity, :price, :tax, :profit)
				";
				$statement = $connect->prepare($sub_query);
				$base_profit =($product_details['price']-$product_details['prix_achat']) * $_POST["quantity"][$count];
				//$base_profit =($product_details['price']-$product_details['prix_achat']) * $_POST["quantity"][$count];

				$profit = ($base_profit/100)*$product_details['tax'];
				
				$statement->execute(
			 		array(
						':inventory_order_id'	=>	$inventory_order_id,
						':product_id'			=>	$_POST["product_id"][$count],
						':quantity'				=>	$_POST["quantity"][$count],
						':price'				=>	$product_details['price'],
						':tax'					=>	$product_details['tax'],
						':profit'				=>	$profit
					)
				);
				$num_base_price =$num_base_price + $missing_value/count($_POST["product_id"]) ;
				$base_price = ($product_details['price'] * $_POST["quantity"][$count])-$num_base_price;
				$tax = ($base_price/100)*$product_details['tax'];
				$total_amount = $total_amount + ($base_price + $tax);
				
			}

			$update_query = "
			UPDATE inventory_order 
			SET inventory_order_total = '".$total_amount."' 
			WHERE inventory_order_id = '".$inventory_order_id."'
			";
			$statement = $connect->prepare($update_query);
			$statement->execute();
			$result = $statement->fetchAll();
			if(isset($result))
			{
				/** Begin Caisse */

			    $query = "
				INSERT INTO caisse (type, designation, montant, user_id,inventory_order_id, date, caisse_status, :missing_value) 
				VALUES (:type, :designation, :montant, :user_id, :inventory_order_id, :date, :caisse_status, :missing_value)
				";
				
				$statement = $connect->prepare($query);
				$statement->execute(
					array(
						':type'     	=>	"entree",
						':designation'	=>	'ajoute la commande de numero '.$inventory_order_id,
						':montant'  	=>	$total_amount,
						':user_id'  	=>	$_SESSION["user_id"],
						':inventory_order_id'  	=>	$inventory_order_id,
						':missing_value' => $missing_value,
						':date'	        =>	date("Y-m-d"),
						':caisse_status'=> "active",
					)
				);


			    /** End Caisse  */
				echo 'la commande a été créé...';
				echo '<br />';
				echo $total_amount;
				echo '<br />';
				echo $inventory_order_id;
			
				//echo date();
				$query = "
				INSERT INTO history (do, date ) 
				VALUES (:do, :date)
				";
				$statement = $connect->prepare($query);
				$statement->execute(
					array(
						':do'	=> $_SESSION['user_name'].' a créé une une commande du numéro ' . $inventory_order_id .' de  montant total '.$total_amount.' à la date ' . date("Y-m-d"),
						':date' => date("Y-m-d"),
					)
				);
			}
		}
	}

	if($_POST['btn_action'] == 'fetch_single')
	{
		
		$coun_array = array();
		$query = "
		SELECT * FROM inventory_order WHERE inventory_order_id = :inventory_order_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':inventory_order_id'	=>	$_POST["inventory_order_id"]
			)
		);
		$result = $statement->fetchAll();
		$output = array();
		//print_r($result);
		foreach($result as $row)
		{
			$output['inventory_order_name'] = $row['inventory_order_name'];
			$output['inventory_order_date'] = $row['inventory_order_date'];
			$output['inventory_order_address'] = $row['inventory_order_address'];
			$output['payment_status'] = $row['payment_status'];
			$output['inventory_order_total'] = $row['inventory_order_total'];
			$output['missing_value'] = $row['missing_value'];
			$inventory_order_total = $output['inventory_order_total'];
			$missing_value = (float) $output['missing_value'];
		}

		$sub_query = "
		SELECT * FROM inventory_order_product 
		WHERE inventory_order_id = '".$_POST["inventory_order_id"]."'
		";
		
		$statement = $connect->prepare($sub_query);
		$statement->execute();
		$sub_result = $statement->fetchAll();
		$product_details = '';
		$count = 0;
		$count_array = sizeof($sub_result);
		//$i = 0;
		//$array = array();
		foreach($sub_result as $sub_row)
		{
			//$array = array();
			
			//echo $count;
			//$price[$count] = $sub_row["price"];
			//$arr = $array[$count];
			$data_order_product[] = array(
				    'price' => $sub_row['price'],
					'product_id' => $sub_row['product_id'],
					'tax' => $sub_row['tax'],
					

			) ;
			$product_details .=  '<script src="js/order_action_update.js" type="text/javascript"></script>';
			
			$product_details .=  '<script type="text/javascript"></script>';
			$product_details .= '
			<script>
			$(document).ready(function(){
				$("#product_id'.$count.'").selectpicker("val", '.$sub_row["product_id"].');
				$(".selectpicker").selectpicker();
				
			});
			
			</script>
		
			<span id="row'.$count.'">
				<div class="row">
					<div class="col-md-5">
						<select name="product_id[]" id="product_id'.$count.'" class="form-control class="form-control selectpicker"">
							'.fill_product_list($connect).'
						</select>
						<input type="hidden" name="hidden_product_id[]" id="hidden_product_id'.$count.'" value="'.$sub_row["product_id"].'" />
					</div>
					<div class="col-md-3">
						<input type="text" name="quantity[]" id="'.$count.'" class="form-control input-type quantity'.$count.'" value="'.$sub_row["quantity"].'" required />
					</div>
					<div class="col-md-3">
		
					<input type="text" name="prix" id="'.$count.'" class="form-control prix'.$count.'" value="'.$sub_row['price']*$sub_row["quantity"].'" required />
				    </div>
					<div class="col-md-1">
			';
            
			if( $count == '')
			{
				$product_details .= '<button type="button" name="update_add_more" id="update_add_more" class="btn btn-success test btn-xs">+</button>';
			}
			else
			{
				$product_details .= '<button type="button" name="update_remove" id="'.$count.'" class="btn btn-danger btn-xs update_remove remo'.$count.'">-</button>';
			}
			
			$product_details .= '
						</div>
					</div>
				</div><br />
			</span>
				
		    
			';
			/*** */
			
			
			(int) $count = (int) $count+ 1;
		 
		}
		
		$data_order_product[]= $inventory_order_total;
		$data_order_product[]= (float) $missing_value;
		

	    $qty = "'quantity'";
		

		$product_details .= '<script>

				
				var index ;
				var c =	qunatity('.$count_array.','.json_encode($data_order_product).');
				console.log(c);
				for(count = 0; count < c.length; count++){
					console.log(count);c[count];
				}
				
				
				
				
		</script>';

		$output['product_details'] = $product_details;
		//print_r($product_details);
		$count_array = [] ;
		for($i = 0; $i < $count; $i++)
			{
				$count_array[$i]= $i;
			}
		$output['count_array'] = $count_array;
		//print_r($output);
		echo json_encode($output);
	}

	if($_POST['btn_action'] == 'Edit')
	{
		
	
		
		
		if($_POST["missing_value"] == '')
		{
			 $missing_value =  0;
		}
		else
		{
			 $missing_value = $_POST["missing_value"];
		}
		echo $missing_value;
		
		$delete_query = "
		DELETE FROM inventory_order_product 
		WHERE inventory_order_id = '".$_POST["inventory_order_id"]."'
		";
		$statement = $connect->prepare($delete_query);
		$statement->execute();
		$delete_result = $statement->fetchAll();
		if(isset($delete_result))
		{
			$total_amount = 0;
			for($count = 0; $count < count($_POST["product_id"]); $count++)
			{

				$num_base_price = 0;
				$product_details = fetch_product_details($_POST["product_id"][$count], $connect);
				$base_profit =($product_details['price']-$product_details['prix_achat']) * $_POST["quantity"][$count];
				$sub_query = "
				INSERT INTO inventory_order_product (inventory_order_id, product_id, quantity, price, tax,profit) VALUES (:inventory_order_id, :product_id, :quantity, :price, :tax, :profit)
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute(
					array(
						':inventory_order_id'	=>	$_POST["inventory_order_id"],
						':product_id'			=>	$_POST["product_id"][$count],
						':quantity'				=>	$_POST["quantity"][$count],
						':price'				=>	$product_details['price'],
						':tax'					=>	$product_details['tax'],
						':profit'				=>	$base_profit
					)
				);
				/*$base_price = $product_details['price'] * $_POST["quantity"][$count];
				$tax = ($base_price/100)*$product_details['tax'];
				$total_amount = $total_amount + ($base_price + $tax);*/


				$num_base_price =$num_base_price + $missing_value/count($_POST["product_id"]) ;
				$base_price = ($product_details['price'] * $_POST["quantity"][$count])-$num_base_price;
				$tax = ($base_price/100)*$product_details['tax'];
				$total_amount = $total_amount + ($base_price + $tax);
			}

			
			$inventory_order_name= '';
			$customer_id = 0;
			if($_POST['customer_check']=='customer_exist')
			{	
				$inventory_order_name = fill_customer_list_byId($connect,$_POST['inventory_order_name_id']);
				$customer_id = $_POST['inventory_order_name_id'];
			}
			else
			{
				if(isset($_POST['inventory_order_name']))
				{
					$inventory_order_name = $_POST['inventory_order_name'];
					$customer_id = 0;
				}
				else
				{
					return false ;
				}
					
			}
			
			$update_query = "
			UPDATE inventory_order 
			SET
			inventory_order_name = :inventory_order_name, 
			inventory_order_date = :inventory_order_date, 
			inventory_order_address = :inventory_order_address, 
			inventory_order_total = :inventory_order_total, 
			payment_status = :payment_status,
			inventory_order_id   =  :inventory_order_id,
			missing_value   =  :missing_value,
			customer_id = :customer_id
			WHERE inventory_order_id = :inventory_order_id
			";
			
			echo $update_query;
			$statement = $connect->prepare($update_query);
			$statement->execute(
				array(
					':inventory_order_name'			=>	$inventory_order_name,
					':inventory_order_date'			=>	$_POST["inventory_order_date"],
					':inventory_order_address'		=>	$_POST["inventory_order_address"],
					':inventory_order_total'		=>	$total_amount,
					':payment_status'				=>	$_POST["payment_status"],
					':missing_value'				=>  $missing_value ,
					':customer_id'                  =>  $customer_id,	
					':inventory_order_id'			=>	$_POST["inventory_order_id"],

				)
			);
			
			$result = $statement->fetchAll();

			if(isset($result))
			{
				/** Begin Caisse */
				$query = "
				UPDATE caisse set
				designation = :designation,
				montant = :montant
				WHERE inventory_order_id = :inventory_order_id
				";
				
				$statement = $connect->prepare($query);
				$statement->execute(
					array(
						':designation'			=>	"modife la commande de numero ",
						':montant'  			=>	$total_amount,
						':inventory_order_id'  	=>	$_POST["inventory_order_id"],
					)
				);
				$edit_result = $statement->fetchAll();
				
				/** End Caisse */

				echo 'la commande a été modifié...';
				echo '<br />';
				echo $total_amount;
				
			    
				//echo date();
				$query = "
				INSERT INTO history (do, date ) 
				VALUES (:do, :date)
				";
				$statement = $connect->prepare($query);
				$statement->execute(
					array(
						':do'	=> $_SESSION['user_name'].' a modifié une une commande du numéro ' . $_POST["inventory_order_id"] .' de  montant total '.$total_amount.' à la date ' . date("Y-m-d"),
						':date' => date("Y-m-d"),
					)
				);
			}
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
		UPDATE inventory_order 
		SET inventory_order_status = :inventory_order_status 
		WHERE inventory_order_id = :inventory_order_id
		";
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':inventory_order_status'	=>	$status,
				':inventory_order_id'		=>	$_POST["inventory_order_id"]
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo 'Order status change to ' . $status;
		}
	}
}

?>