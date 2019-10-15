<?php 
$orderData = $_POST['orderData'];
//var_dump($orderData) ;
include 'dbconfig.php';
$Status = "True";
foreach ($orderData as &$order)
{
	$Name = $order['name'];
	$Price = $order['price'];
	$Count = $order['count'];
	$Total = $order['total'];
	$sql = "INSERT INTO orders (Name, Price, Count, Total)
	VALUES ('$Name', '$Price', '$Count', '$Total')";
	if ($connect->query($sql) === FALSE) {
    	$Status = "False";
    	break;
    }
}
echo $Status;


 ?>