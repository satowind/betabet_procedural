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
$query = "SELECT * FROM admintable WHERE b_id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
      
        $fname     = $row['name'];
        $pnumber    = $row['phone'];
        $email     = $row['email'];
        $unit    = $row['staff_unit'];
        $username    = $row['username'];
        
        $branch    = $row['branch'];
         $id     = $row['staff'];
       
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['assign']) ) {
    
    // set variables
        $fname     = validateFormData( $_POST["fname"] );
       
        $pnumber    = validateFormData( $_POST["pnumber"] );
        $email     = validateFormData( $_POST["email"] );
       
        $branch    = validateFormData( $_POST["branch"] );
        
        $id    = validateFormData( $_POST["id"] );
       
    
    // new database query & result
    $query = "UPDATE admintable
            SET 
            phone='$pnumber',
            email='$email',
            name='$fname',
            username='$username'
            
         
            WHERE b_id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: madmin?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}

if( isset($_POST['ass']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to Edit Staff Profile!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$clientID' method='post'>
                        ";

                      foreach ($_POST as $key => $value) {
                         $alertMessage .=   "<input type='hidden' name='".$key."' value='".$value."'>";
                        }

 
                  $alertMessage .= "<input type='submit' class='btn btn-danger btn-sm' name='assign' value='Yes, Assign!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
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
    $query = "DELETE FROM admintable WHERE b_id='$clientID'";
 
    $queryz = "DELETE FROM admin_role WHERE admin_id='$clientID'";
    
    
    if(mysqli_query( $conn, $query ) && mysqli_query( $conn, $queryz ) ) {
        
        // redirect to client page with query string
        header("Location: madmin?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Staff</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
    <div class="col-sm-12">
        
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Staff Id</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="id" value="<?php echo $id; ?>" disabled>
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Username</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="fname" value="<?php echo $username; ?>" disabled>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Full Name</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="fname" value="<?php echo $fname; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Phone Number</h3></label>
        <input type="tel" class="form-control input-lg" id="client-address" name="pnumber" value="<?php echo $pnumber; ?>">
    </div>
    
    <!-- <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Branch</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="branch" value="<?php //echo $branch; ?>" >
    </div> -->
    
     </div>
    <div class="col-sm-12">
        <hr>
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">

            <a href="FAQ" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="ass">Update</button>
        </div>
    </div>
</form>
</div></div></div>
<?php
require 'includes/js.php';
include('includes/footer.php');
?>