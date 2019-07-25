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

$print =" on ". $date."  ".$username." Approved ".$user." Registration\n\r";
// query & result
$query = " UPDATE usertable SET `status`='1' WHERE b_id='$id' ";
header("Content-Type:application/json");

 if( mysqli_query( $conn, $query ) ) {
            echo json_encode(['success'=>true]);
            
	$repo=fopen("activity_log/update.txt", 'a+');

	fwrite($repo,$print);
	fclose($repo);
	

        } else {
           echo json_encode(['success'=>false]);
        }

 ?>