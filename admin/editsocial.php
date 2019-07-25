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
$query = "SELECT * FROM social WHERE id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $facebook     = $row['facebook'];
        $twitter    = $row['twitter'];
        $youtube     = $row['youtube'];
        $flicker    = $row['flicker'];
        $pintrest     = $row['pintrest'];
        $instagram    = $row['instagram'];
        $google     = $row['google'];
      
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
        $fname     = validateFormData( $_POST["facebook"] );
        $pnumber    = validateFormData( $_POST["twitter"] );
        $email     = validateFormData( $_POST["google"] );
        $uname    = validateFormData( $_POST["instagram"] );
        $gender     = validateFormData( $_POST["youtube"] );
        $address    = validateFormData( $_POST["flicker"] );
        $street     = validateFormData( $_POST["pintrest"] );
       
    // new database query & result
    $query = "UPDATE social
            SET facebook ='$fname',
            twitter ='$pnumber',
            google ='$email',
            instagram ='$uname',
            youtube ='$gender',
            flicker ='$address',
            pintrest ='$street'
            WHERE id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: social?alert=updatesuccess");
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
    $query = "DELETE FROM social WHERE id='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: social?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Social Icons</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
<div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
    <div class="col-sm-12">
        
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Facebook</h3> </label>
        <input type="text" class="form-control input-lg" id="client-address" name="facebook" value="<?php echo $facebook; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Twiter</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="twitter" value="<?php echo $twitter; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Google +</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="google" value="<?php echo $google; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Pintrest</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="pintrest" value="<?php echo $pintrest; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Flickr</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="flicker" value="<?php echo $flicker; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Instagram</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="instagram" value="<?php echo $instagram; ?>">
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Youtube</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="youtube" value="<?php echo $youtube; ?>">
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
</div></div></div>
<?php
include('includes/footer.php');
?>