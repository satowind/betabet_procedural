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
$query = "SELECT * FROM contact WHERE id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $header     = $row['header'];
        $subHeader    = $row['subHeader'];
        $phone     = $row['phone'];
        $email    = $row['email'];
        $address     = $row['address'];
        // $BE_phone    = $row['BE_phone'];
        // $BE_email     = $row['BE_email'];
        // $BE_address     = $row['BE_address'];
        // $ME_phone    = $row['ME_phone'];
        // $ME_email     = $row['ME_email'];
        // $ME_address    = $row['ME_address'];
        $HO_phone     = $row['HO_phone'];
        $HO_email    = $row['HO_email'];
        $HO_address     = $row['HO_address'];
      
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
        $fname     = validateFormData( $_POST["header"] );
        $pnumber    = validateFormData( $_POST["subHeader"] );
        $email     = validateFormData( $_POST["phone"] );
        $uname    = validateFormData( $_POST["email"] );
        $gender     = validateFormData( $_POST["address"] );
        // $address    = validateFormData( $_POST["BE_phone"] );
        // $street     = validateFormData( $_POST["BE_email"] );
        // $fname1     = validateFormData( $_POST["BE_address"] );
        // $pnumber2    = validateFormData( $_POST["ME_phone"] );
        // $email3     = validateFormData( $_POST["ME_email"] );
        // $uname4    = validateFormData( $_POST["ME_address"] );
        $gender5     = validateFormData( $_POST["HO_phone"] );
        $address6    = validateFormData( $_POST["HO_email"] );
        $street7     = validateFormData( $_POST["HO_address"] );
       
    // new database query & result
    $query = "UPDATE contact
            SET header ='$fname',
            subHeader ='$pnumber',
            phone ='$email',
            email ='$uname',
            address ='$gender',
            
            HO_phone ='$gender5',
            HO_email ='$address6',
            HO_address ='$street7'
            WHERE id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: contact?alert=updatesuccess");
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
    $query = "DELETE FROM contact WHERE id='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: contact?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Contact</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">

   
                
       
    <div class="col-sm-12">
        
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Header</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="header" value="<?php echo $header; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Sub Header</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="subHeader" value="<?php echo $subHeader; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="phone" value="<?php echo $phone; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Address</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="address" value="<?php echo $address; ?>">
    </div>
    <!-- <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">BE_phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="BE_phone" value="<?php //echo $BE_phone; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">BE_email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="BE_email" value="<?php //echo $BE_email; ?>">
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">BE_address</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="BE_address" value="<?php //echo $BE_address; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">ME_phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="ME_phone" value="<?php //echo $ME_phone; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">ME_email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="ME_email" value="<?php //echo $ME_email; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">ME_address</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="ME_address" value="<?php //echo $ME_address; ?>">
    </div> -->
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger ">Head Office Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="HO_phone" value="<?php echo $HO_phone; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Head Office Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="HO_email" value="<?php echo $HO_email; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Head Office Address</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="HO_address" value="<?php echo $HO_address; ?>">
    </div>
    
    
     </div>
    <div class="col-sm-12">
        <hr>
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">

            <a href="FAQ" type="button" class="btn btn-lg btn-primary">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
        </div>
    </div>
</form>
     </div>
        </div>
    </div>
<?php
include('includes/footer.php');
?>