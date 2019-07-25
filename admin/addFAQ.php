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
    $question = $answer =  "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
        $question = validateFormData( $_POST["Question"] );

   
        $answer = validateFormData( $_POST["Answer"] );
    
   
    // if required fields have data
    if( $question && $answer ) {
        
        // create query
        $query = "INSERT INTO faq (Question, Reply) VALUES ('$question', '$answer')";
        
        $result = mysqli_query( $conn, $query );
        
        // if query was successful
        if( $result ) {
            
            // refresh page with query string
            header( "Location: FAQ?alert=success" );
        } else {
            
            // something went wrong
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }
        
    }
    
}

// close the mysql connection
mysqli_close($conn);


require 'includes/header.php'; ?>

<h1>Add FAQ</h1>
<div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="row">
  <div class="col-sm-12">
  	
  <div class="form-group">
      

        <label for="client-name"><h3 class="h3 text-danger">Question</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="Question" value="">
      </div>
      <div class="form-group">
        <label for="client-email"><h3 class="h3 text-danger">Answer</h3></label>
        <Textarea class="form-control input-lg" id="client-email" name="Answer" value="">
        </Textarea>
    </div>
    </div>
   
    <div class="col-sm-12">
    	<br><br>
            <a href="FAQ" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="addFAQ">Add</button>
    </div>
</form>
</div></div></div>
<?php require 'includes/footer.php'; ?>