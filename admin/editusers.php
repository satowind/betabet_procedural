<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: index");
}

// get ID sent by GET collection
$clientID = $_GET['id'];

// connect to database
include('includes/connection.php');
global $conn;
// include functions file
include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM usertable WHERE b_id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $sname     = $row['surname'];
        $fname     = $row['firstname'];
        $pnumber    = $row['phoneNumber'];
        $email     = $row['email'];
        $uname    = $row['userName'];
        $gender     = $row['gender'];
        $address    = $row['address']; 
        $local    = $row['lga'];
        $state     = $row['state'];
        $branch    = $row['branch'];
         $id     = $row['bet9ja_id'];
        $code    = $row['bet9ja_code'];
       
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
        $fname     = validateFormData( $_POST["fname"] );
        $sname     = validateFormData( $_POST["sname"] );
        $pnumber    = validateFormData( $_POST["pnumber"] );
        $email     = validateFormData( $_POST["email"] );
        $gender     = validateFormData( $_POST["gender"] );
        $address    = validateFormData( $_POST["address"] );
        
        $local    = validateFormData( $_POST["local"] );
        $branch    = validateFormData( $_POST["branch"] );
        $state    = validateFormData( $_POST["state"] );
        $id    = validateFormData( $_POST["id"] );
        $code    = validateFormData( $_POST["code"] );
    
    // new database query & result
    $query = "UPDATE usertable
            SET surname='$sname',
            phoneNumber='$pnumber',
            email='$email',
            gender='$gender',
            address='$address',
            
            lga='$local',
            firstname='$fname',
            bet9ja_id='$id',
            bet9ja_code='$code',
            branch='$branch'
            WHERE b_id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: users?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}

// if delete button was submitted
if( isset($_POST['delete']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Are you sure you want to delete this FAQ? No take backs!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$clientID' method='post'>
                            <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes, delete!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete']) ) {
    
    // new database query & result
    $query = "DELETE FROM usertable WHERE b_id='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: users?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Customers Details</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
    <div class="col-sm-12">
        
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Bet9ja Id</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="id" value="<?php echo $id; ?>">
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Bet9ja Code</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="code" value="<?php echo $code; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Surname name</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="sname" value="<?php echo $sname; ?>">
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">First name</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="fname" value="<?php echo $fname; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Phone Number</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="pnumber" value="<?php echo $pnumber; ?>">
    </div>
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Gender</h3></label>
       <select class="form-control input-lg" id="gender" name="gender">
                
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Address No</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="address" value="<?php echo $address; ?>">
    </div>
    
     <div class="form-group">
        <small class="text-danger">* <?php echo isset($nationalityError) ? $nationalityError : ''; ?></small>
        <label for="register-form-repassword">Country: </label>
            <select class="form-control input-lg" id="national" name="nationality">
                <option value="">-Choose Nationality-</option>
                <option value="Nigerian">Nigeria</option>
                <option value="Others">Others</option>
            </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($stateError) ? $stateError : ''; ?></small>
       <label for="register-form-repassword">State: </label>
        <select class="form-control input-lg" name="state" id="state">
        <option value="">---select state---</option>
    </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($localError) ? $localError : ''; ?></small>
    <label for="register-form-repassword">Local Government Area </label>
        <select class="form-control input-lg" name="local" id="local">
            <option value="">---select L.G---</option>
        </select>

    </div>

    
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Branch</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="branch" value="<?php echo $branch; ?>" >
    </div>
    
     </div>
    <div class="col-sm-12">
        <hr>
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">

            <a href="FAQ" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
        </div>
    </div>
</form>
</div></div></div>
<?php
require 'includes/js.php';
include('includes/footer.php');
?>