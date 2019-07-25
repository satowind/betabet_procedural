<?php
session_start();
ob_start();
// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {
    
    // send them to the login page
    header("Location: login");
}

// get ID sent by GET collection
$accountNumbers = $_GET['accountnumber'];

// connect to database
include('includes/connection.php');

// include functions file
include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM bank WHERE AccountNumber='$accountNumbers'";

$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $accountNumber     = $row['accountNumber'];
        $accountName    = $row['accountName'];
        $accountType     = $row['AccountType'];
        $bank    = $row['Bank'];
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables

    if( $_POST["accountNumber"] > 9999999999 ) {
        $accountNumberError = "Account Number cant be more than 10 digits <br>";
    } else {
       $accountNumber = mysqli_real_escape_string($conn,$_POST["accountNumber"]) ;
    }
    
     
      if( !$_POST["accountType"] ) {
        $accountTypeError = "Please choose your account type <br>";
    } else {
        $accountType = validateFormData( $_POST["accountType"] );
    }
    if( !$_POST["bankName"] ) {
        $bankNameError = "Please select a bank <br>";
    } else {
        $bankName = validateFormData( $_POST["bankName"] );
    }
    
    // new database query & result

    if ($accountNumber && $bankName) {
    	 $query = "UPDATE bank
            SET Bank='$bankName',
            AccountType='$accountType',
            accountNumber='$accountNumber'
            WHERE accountNumber='$accountNumbers'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: index?alert=updatesuccesss");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
    }
   
}

// if delete button was submitted
if( isset($_POST['delete']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Are you sure you want to delete this FAQ? No take backs!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?accountnumber=$accountNumbers' method='post'>
                            <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes, delete!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete']) ) {
    
    // new database query & result
    $query = "DELETE FROM bank WHERE accountNumber='$accountNumbers'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: index?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}
// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
require './includes/sato.php';
?>


<h3>Change Bank Details </h3>
<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
<?php echo isset($satoseries) ? $satoseries: ''; ?>
      <form id="update" name="update" class="nobottommargin" action="#" method="post">
		  <div class="form-group">
        <small class="text-danger">* <?php echo isset($nameError) ? $nameError : ''; ?></small>
		    <label for="email">Full Name</label>
		    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $accountName; ?>" disabled>
		  </div>

		 
		  <div class="form-group">
        <small class="text-danger">* <?php echo isset($bankNameError) ? $bankNameError : ''; ?></small>
		    <label for="pwd">Bank Name:</label>
		    <select class="form-control" name="bankName" selected="<?php echo $bank; ?>">
			   <option value="">Select Bank Bank</option>
		        <option value="Access Bank">Access Bank</option>
		        <option value="Fidelity Bank">Fidelity Bank</option>
		        <option value="StanbicIBTC">StanbicIBTC</option>
		        <option value="Afribank">Afribank</option>
		        <option value="Finbank">Finbank</option>
		        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
		        <option value="Citibank">Citibank</option>
		        <option value="Guarnatee Trust Bank">Guarnatee Trust Bank</option>
		        <option value="Sterling Bank">Sterling Bank</option>
		        <option value="Diamond Bank">Diamond Bank</option>
		        <option value="UBA">UBA</option>
		        <option value="Ecobank Bank">Ecobank Bank</option>
		        <option value="Union Bank">Union Bank</option>
		        <option value="Keystone Bank">Keystone Bank</option>
		        <option value="Wema Bank">Wema Bank</option>
		        <option value="First Bank">First Bank</option>
		        <option value="Skye Bank">Skye Bank</option>
		        <option value="Zenith Bank">Zenith Bank</option>
		        <option value="FCMB">FCMB</option>
		        <option value="SpringBank">SpringBank</option>
		        <option value="Unity Bank">Unity Bank</option>
		      </select>
		  </div>

		   <div class="form-group">
        <small class="text-danger">* <?php echo isset($accountTypeError) ? $accountTypeError : ''; ?></small>
		    <label for="pwd">Account Type</label>
		    <select class="form-control" name="accountType" selected="<?php echo $accountType; ?>">
			  <option>Savings Account</option>
			  <option>Current Account</option>
			  
			</select>
		  </div>

		  <div class="form-group">
        <small class="text-danger" id="demo">* <?php echo isset($accountNumberError) ? $accountNumberError : ''; ?></small>
		    <label for="email">Account Number</label>
		    <input type="number" class="form-control" id="lname" name="accountNumber" value="<?php echo $accountNumber; ?>" onKeyUp="if(this.value>9999999999){ document.getElementById('demo').innerHTML = 'Cant be more than 10 digits<br>';}" onblur="if(this.value<=9999999999){ document.getElementById('demo').innerHTML = ''; this.setStyle('background','white')}"  onkeydown ="if(this.value<=9999999999){ document.getElementById('demo').innerHTML = '';  this.setStyle('background','white')}">
		  </div>

		
		  <button type="submit" class="btn btn-primary" name="update">Update Account Details</button>
		<button type="submit" class="btn btn-danger pull-right" name="delete">Delete Account Details</button>
		</form>
		<br><br>
		<br><br>

</div></div></div>
		<?php include './includes/footer.php' ?>
