<?php 
session_start();
ob_start();
// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {
    
    // send them to the login page
    header("Location: login");
}

global $row;
include './includes/header.php';
require './includes/sato.php';


if( isset( $_POST["fund"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
    // set all variables to empty by default
    $username = $amount  = $bank = $report = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
     $username = $_SESSION["loggedInUser"];
     $report= 1;
   
     if( !$_POST["amount"] ) {
        $amountError = "Please enter an amount <br>";
    } elseif($_POST["amount"]<100){
        $amountError = "Amount cant be less than ₦100 <br>";
    }else {
        $amount = validateFormData( $_POST["amount"] );
    }

    if( !$_POST["bank"] ) {
        $bankError = "Please Choose a bank <br>";
    } else {
        $bank = validateFormData( $_POST["bank"] );
    }
    
    // check to see if each variable has data
    if( $username && $report && $amount && $bank) {
        $query = "INSERT INTO `transactiontable` ( `username`, `Report`, `amount`,`bank`,`status`)
        VALUES ('$username', '$report', '$amount', '$bank', 2 )";

        if( mysqli_query( $conn, $query ) ) {
           
            header('location:index?alert=sucess');
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    }
    
}

 ?>

<form class="well" id="fund" name="funding" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
  <div class="form-group">

		  <div class="form-group">
		  	<small class="text-danger">* <?php echo isset($amountError) ? $amountError : ''; ?></small>
		    <label for="email">Amount To Fund</label>
		    <input type="Number" class="form-control" id="lname" name="amount">
		  </div>

		  <div class="form-group">
		  	<small class="text-danger">* <?php echo isset($bankError) ? $bankError : ''; ?></small>
		    <label for="pwd">Which Account</label>
		    <select class="form-control" name="bank">
                <?php 

// query & result
$query = "SELECT * FROM bank WHERE username = '{$_SESSION['loggedInUser']}'";
$result = mysqli_query( $conn, $query );
        if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $row = mysqli_fetch_assoc($result) ) {
            echo " 

              <option value='".$row['Bank']."'>".strtoupper($row['Bank'])."</option>


             ";

}
}
        ?>
            </select>


		  </div>

		  <button type="submit" class="btn btn-danger" name="fund">Fund</button>
</form>

 <br><br>
   </div>
          </div>
     
       </section>



<?php include './includes/footer.php' ?>
