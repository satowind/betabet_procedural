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
        $how     = $row['aboutUs'];
       
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='howto'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
        $how     = validateFormData( $_POST["how"] );
        
       
    // new database query & result
    $query = "UPDATE social
            SET aboutUs ='$how'
            WHERE id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: howto?alert=updatesuccess");
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
        header("Location: howto?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit How to Text</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
<div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
    <div class="col-sm-12">
        
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">How to Text</h3> </label>
        <textarea rows="30" class="form-control input-lg" id="client-address" name="how" value=""><?php echo $how; ?></textarea>
    
    
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