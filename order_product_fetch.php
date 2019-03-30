<?php

//order_fetch.php

include('database_connection.php');

include('function.php');

$query = '';

$product_id = $_POST["product_id"];
$qty = $_POST["qty"];

$query = "
SELECT * FROM product  WHERE product_id = '".$product_id."'";
$statement = $connect->prepare($query);
$statement->execute();
$results = $statement->fetchAll();

$product_data = array();
$data = array();
$total_amount = 0;
foreach($results as $result)// price + tax
{
    $product_data['base_price'] = $result['product_base_price'] * $qty;
    $product_data['tax'] = ($product_data['base_price']/100)*$result['product_tax'];
    $total_amount = $total_amount + ($product_data['base_price'] +  $product_data['tax'] );
    $product_data['total_amount'] = $total_amount;
}
$data[] = $product_data;
//print_r($data);

echo json_encode($data);
?>