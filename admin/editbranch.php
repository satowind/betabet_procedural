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

// include functions file
include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM branch WHERE id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $phone     = $row['phone'];
        $email    = $row['email'];
        $address    = $row['address'];
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='branch'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
    $email     = validateFormData( $_POST["email"] );
    $phone    = validateFormData( $_POST["phone"] );
    $address    = validateFormData( $_POST["address"] );
    
    // new database query & result
    $query = "UPDATE branch
            SET address='$address',
            phone='$phone',
            email='$email'
            WHERE id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: branch?alert=updatesuccess");
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
    $query = "DELETE FROM branch WHERE id='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: Branch?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Branch</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
<div class="container ">
    <div class="row well">
        <div class="col-sm-6 col-sm-offset-3 ">
            
     
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row ">
    
    <div class="form-group ">
        <label for="client-address"><h3 style="outline: blue" class="h3 text-danger">Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-address" name="phone" value="<?php echo $phone; ?>">
    </div>
    <div class="form-group ">
        <label for="client-company"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-company" name="email" value="<?php echo $email; ?>">
    </div>

    <div class="form-group ">
        <label for="client-company"><h3 class="h3 text-danger">Address</h3></label>
        <input type="text" class="form-control input-lg" id="client-company" name="address" value="<?php echo $address; ?>">
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