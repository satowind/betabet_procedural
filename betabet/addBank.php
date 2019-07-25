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

if( isset( $_GET['alert'] ) ) {
 if( $_GET['alert'] == 'updatesuccess' ) {
        $satoseries = "<div class='alert alert-success'>Bank account details succesfull added<a class='close' data-dismiss='alert'>&times;</a></div>";
      }
 }
?>


<?php 

if( isset( $_POST["ChangeAccount"] ) ) {
        
   require 'includes/connection.php'; 
   require 'includes/functions.php';
   global $conn;
   global $row;
$bankName =$sName= $fName=$accountType=$accountNumber="";


$full= strtoupper($row['surname']);
$fulls= strtoupper($row['firstname']);


if( !$_POST["sname"] ) {
        $sError = "Please enter surname <br>";
    } elseif ($full!== strtoupper($_POST["sname"])) {
    	$sError = "Account name and bank name should be same <br>";
    }else {
        $sName = validateFormData( $_POST["sname"] );
    }


    if( !$_POST["fname"] ) {
        $fError = "Please enter firstname <br>";
    } elseif ($fulls!== strtoupper($_POST["fname"])) {
        $nameError = "Account name and bank name should be same <br>";
    }else {
        $fName = validateFormData( $_POST["fname"] );
    }
	
	
    if( !$_POST["bankName"] ) {
        $bankNameError = "Please select a bank <br>";
    } else {
        $bankName = validateFormData( $_POST["bankName"] );
    }

    if( !$_POST["accountNumber"] ) {
        $accountNumberError = "Please enter your account number <br>";
    } else {
        $accountNumbers = validateFormData( $_POST["accountNumber"] );
        $query = "SELECT `AccountNumber` FROM `bank` WHERE `AccountNumber`= '$accountNumbers' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $accountNumberError = "Account Number Already Exist<br>";
        }elseif ( $_POST["accountNumber"] > 9999999999 ) {
           $accountNumberError = "Account Number cant be more than 10 digits <br>";
        }else{
            $accountNumber = validateFormData( $_POST["accountNumber"] );
        }
    }

    if( !$_POST["accountType"] ) {
        $accountTypeError = "Please choose your account type <br>";
    } else {
        $accountType = validateFormData( $_POST["accountType"] );
    }

    $username = $_SESSION["loggedInUser"];

    if( $sName && $fName && $bankName && $accountType && $accountNumber ) {
     $query = "INSERT INTO `bank` ( `username`, `accountName`, `accountType`,`AccountNumber`,`Bank`)
        VALUES ('$username', '$sName $fName', '$accountType', '$accountNumber','$bankName' )";

        
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: index?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
  }
}
 ?>



<h3>Change Bank Details </h3>
<?php echo isset($satoseries) ? $satoseries: ''; ?>
      <form id="update" name="update" class="nobottommargin" action="#" method="post">
		  
        <div class="form-group">
        <small class="text-danger">* <?php echo isset($sError) ? $sError : ''; ?></small>
		    <label for="email">Surname</label>
		    <input type="text" class="form-control" id="sname" name="sname">
		</div>
            
        <div class="form-group">
        <small class="text-danger">* <?php echo isset($fError) ? $fError : ''; ?></small>
            <label for="email">FirstName</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
		 
		  <div class="form-group">
        <small class="text-danger">* <?php echo isset($bankNameError) ? $bankNameError : ''; ?></small>
		    <label for="pwd">Bank Name:</label>
		    <select class="form-control" name="bankName">
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
		    <select class="form-control" name="accountType">
			  <option>Savings Account</option>
			  <option>Current Account</option>
			  
			</select>
		  </div>

		  <div class="form-group">
        <small class="text-danger" id="demo">* <?php echo isset($accountNumberError) ? $accountNumberError : ''; ?></small>
		    <label for="email">Account Number</label>
		    <input type="number" class="form-control" id="lname" name="accountNumber" onKeyUp="if(this.value>9999999999){ document.getElementById('demo').innerHTML = 'Cant be more than 10 digits<br>'; this.setStyle('background','red');}"  onblur="if(this.value<=9999999999){ document.getElementById('demo').innerHTML = ''; this.setStyle('background','white')}"  onkeydown ="if(this.value<=9999999999){ document.getElementById('demo').innerHTML = '';  this.setStyle('background','white')}">
		  </div>

		
		  <button type="submit" class="btn btn-danger" name="ChangeAccount">Add Account Details</button>

		</form>
		<br><br>
		<br><br>

</div></div></div>

<?php include './includes/footer.php' ?>
