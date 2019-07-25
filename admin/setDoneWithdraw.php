<?php 
session_start();
include('includes/connection.php');
$id=$_GET['id'];
$username = $_SESSION['loggedInAdmin'];

$date=  date("h:i:sa M, d l Y", time());
      
 

        
 if($_GET['action']=='funding'){
$action='Funding';
}else{
	$action='Withdrawal';
}

$user=$_GET['user'];

$amount= $_GET['amount'];

$print =" on ". $date."  ".$username." confirmed " .$action." of ".$user." the sum of ".$amount."\n\r";
// query & result

$querys = "SELECT * FROM usertable WHERE `userName`='$user' LIMIT 1 ";
$results = mysqli_query( $conn, $querys );
$rows = mysqli_fetch_assoc($results);

$amounts = $rows['amount']-$amount ;




$queryz = " UPDATE usertable SET `amount`='$amounts' WHERE userName='$user' ";

if (mysqli_query( $conn, $queryz )) {

	$query = " UPDATE transactiontable SET `status`='1' WHERE id='$id' ";
		header("Content-Type:application/json");
 	if( mysqli_query( $conn, $query ) ) {
            echo json_encode(['success'=>true]);
            
	$repo=fopen("activity_log/fundWith.txt", 'a+');

	fwrite($repo,$print);
	fclose($repo);
	

        } else {
           echo json_encode(['success'=>false]);
        }

}





 ?>