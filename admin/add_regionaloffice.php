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
    $name = $phone = $email =$address = $nationality = $state= $local = $city= $under =  "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
     if( !$_POST["under"] ) {
        $underError = "Choose an office <br>";
    } else {
        $under = validateFormData( $_POST["under"] );
    }

    if( !$_POST["name"] ) {
        $nameError = "Please enter a name <br>";
    } else {
        $name = validateFormData( $_POST["name"] );
    }

    if( !$_POST["phone"] ) {
        $phoneError = "Please enter a phone <br>";
    } else {
        $phone = validateFormData( $_POST["phone"] );
    }

    if( !$_POST["email"] ) {
        $emailError = "Please enter an email <br>";
    } else {
        $email = validateFormData( $_POST["email"] );
    }

    if( !$_POST["address"] ) {
        $addressError = "Please enter an address <br>";
    } else {
        $address = validateFormData( $_POST["address"] );
    }

    if( !$_POST["nationality"] ) {
        $nationalityError = "Please enter a country <br>";
    } else {
        $nationality = validateFormData( $_POST["nationality"] );
    }

    if( !$_POST["state"] ) {
        $stateError = "Please enter a state <br>";
    } else {
        $state = validateFormData( $_POST["state"] );
    }

    if( !$_POST["local"] ) {
        $localError = "Please enter a Local Government <br>";
    } else {
        $local = validateFormData( $_POST["local"] );
    }

    if( !$_POST["city"] ) {
        $cityError = "Please enter a City <br>";
    } else {
        $city = validateFormData( $_POST["city"] );
    }

    
    // if required fields have data
    if( $name && $email && $phone && $address && $nationality && $state && $local && $city && $under) {
        
        // create query
        $query = "INSERT INTO branch (`name`,`phone`, `email`, `address`, `country`,`state`, `lga`, `city`,`hierachy`, `under`,`rank`) VALUES ('$name', '$phone','$email','$address','$nationality','$state','$local','$city','regional office','$under','2')";
        
        $result = mysqli_query( $conn, $query );
        
        // if query was successful
        if( $result ) {
            
            // refresh page with query string
            header( "Location: regional_office?alert=success" );
        } else {
            
            // something went wrong
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }
        
    }
    
}

// close the mysql connection
mysqli_close($conn);


require 'includes/header.php'; ?>

<h1>Add Regional Office</h1>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="row">
  
    
        <div class="form-group">
        <small class="text-danger">* <?php echo isset($underError) ? $underError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Choose Head offices</h3></label>
            <select class="form-control input-lg" id="under" name="under">
                <option value="" >---Choose Head office---</option>
                 <?php 
        // query & result
        require 'includes/connection.php';
        $query = "SELECT * FROM branch WHERE hierachy = 'head office'";
        $result = mysqli_query( $conn, $query );

                if( mysqli_num_rows($result) > 0 ) {
                // we have data!
                // output the data       
        while( $row = mysqli_fetch_assoc($result) ) {
            echo " 
              <option value='".$row['name']."'>".strtoupper($row['name'])."</option>
             ";
        }
    }
            ?>
               
            </select>
        </div>



    <div class="col-sm-12" id="all" style="display:none">
      <div class="form-group">  
        <small class="text-danger">* <?php echo isset($nameError) ? $nameError : ''; ?></small>
        <label for="client-name"><h3 class="h3 text-danger">Name</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="name" value="">
      </div>
       <div class="form-group">  
        <small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small>
        <label for="client-name"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="email" value="">
      </div>
      <div class="form-group">
        <small class="text-danger">* <?php echo isset($phoneError) ? $phoneError : ''; ?></small>
       <label for="client-name"><h3 class="h3 text-danger">Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="phone" value="">
      </div>
      <div class="form-group">
        <small class="text-danger">* <?php echo isset($addressError) ? $addressError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Address</h3></label>
        <Textarea class="form-control input-lg" id="client-email" name="address" value="">
        </Textarea>
    </div>
      <div class="form-group">
        <small class="text-danger">* <?php echo isset($nationalityError) ? $nationalityError : ''; ?></small>
       <label for="client-email"><h3 class="h3 text-danger">Country</h3></label>
            <select class="form-control input-lg" id="national" name="nationality">
                <option value="">-Choose Nationality-</option>
                <option value="Nigerian">Nigeria</option>
                <option value="Others">Others</option>
            </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($stateError) ? $stateError : ''; ?></small>
       <label for="client-email"><h3 class="h3 text-danger">state</h3></label>
        <select class="form-control input-lg" name="state" id="state">
        <option value="">---select state---</option>
    </select>
    </div>
    <div class="form-group">
        <small class="text-danger">* <?php echo isset($localError) ? $localError : ''; ?></small>
   <label for="client-email"><h3 class="h3 text-danger">Local Government</h3></label> 
        <select class="form-control input-lg" name="local" id="local">
            <option value="">---select L.G---</option>
        </select>

    </div>

     <div class="form-group">  
        <small class="text-danger">* <?php echo isset($cityError) ? $cityError : ''; ?></small>
        <label for="client-name"><h3 class="h3 text-danger">City</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="city" value="">
      </div>

</div>
   
    <div class="col-sm-12">
        <br><br>
            <a href="head_office" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success pull-right" name="addFAQ">Add</button>
    </div>
</form>
</div></div></div>




<script>
    $('body').on('change', '#under', function() {
            var under = $("#under");
            var div =$("#all")
//
        if(under.val.length > 0){

            div.css("display", "block");

            }else{
            div.css("display", "none");

            }

})


</script>
<?php 
require_once 'includes/js.php';
require 'includes/footer.php';
 ?>