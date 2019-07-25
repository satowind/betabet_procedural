<?php 

session_start();
//if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: index");
}


// connect to database
include('includes/connection.php');

// include functions file
include('includes/functions.php');

// if add button was submitted
if( isset( $_POST['addFAQ'] ) ) {
    
    // set all variables to empty by default
    $address = $phone = $email =  "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
        $address = validateFormData( $_POST["address"] );
        $phone = validateFormData( $_POST["phone"] );
        $email = validateFormData( $_POST["email"] );
    
   
    // if required fields have data
    if( $address && $phone ) {
        
        // create query
        $query = "INSERT INTO branch (`address`,`phone`, `email`) VALUES ('$address', '$phone','$email')";
        
        $result = mysqli_query( $conn, $query );
        
        // if query was successful
        if( $result ) {
            
            // refresh page with query string
            header( "Location: branch?alert=success" );
        } else {
            
            // something went wrong
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }
        
    }
    
}

// close the mysql connection
mysqli_close($conn);


require 'includes/header.php'; ?>

<h1>Add Branch</h1>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="row">
  <div class="col-sm-12">
    
      <div class="form-group">  
        <label for="client-name"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="email" value="">
      </div>
      <div class="form-group">
       <label for="client-name"><h3 class="h3 text-danger">Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="phone" value="">
      </div>
      <div class="form-group">
        <label for="client-email"><h3 class="h3 text-danger">Address</h3></label>
        <Textarea class="form-control input-lg" id="client-email" name="address" value="">
        </Textarea>
    </div>
</div>
   
    <div class="col-sm-12">
        <br><br>
            <a href="branch" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="addFAQ">Add</button>
    </div>
</form>
</div></div></div>
<?php require 'includes/footer.php'; ?>