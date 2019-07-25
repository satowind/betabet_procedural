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
        $name     = $row['name'];
        $email    = $row['email'];
        $phone    = $row['phone'];
         $address     = $row['address'];
        $nationality    = $row['country'];
        $state    = $row['state'];
         $local     = $row['lga'];
        $city    = $row['city'];
       
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='branch'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
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

      if( !$_POST["under"] ) {
        $underError = "Choose an office <br>";
    } else {
        $under = validateFormData( $_POST["under"] );
    }
    
    // new database query & result
    $query = "UPDATE branch
            SET address='$address',
            phone='$phone',
            email='$email',
             name='$name',
            city='$city',
            country='$nationality',
            lga='$local',
            state='$state',
            under='$under'
            WHERE id='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: hub1_office?alert=updatesuccess");
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
        header("Location: hub1_office?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Edit Hub 1 Office</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
<div class="container ">
    <div class="row well">
        <div class="col-sm-6 col-sm-offset-3 ">
            
     
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row ">

     <div class="form-group">
        <small class="text-danger">* <?php echo isset($underError) ? $underError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Choose Area Offices</h3></label>
            <select class="form-control input-lg" id="under" name="under">
                <option value="" >---Choose Area office---</option>
                 <?php 
        // query & result
        require 'includes/connection.php';
        $query = "SELECT * FROM branch WHERE hierachy = 'area office'";
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
    <div class="form-group ">
       <small class="text-danger">* <?php echo isset($nameError) ? $nameError : ''; ?></small>
        <label for="client-name"><h3 class="h3 text-danger">Name</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="name" value="<?php echo $name; ?>">
      </div>
       <div class="form-group">  
        <small class="text-danger">* <?php echo isset($emailError) ? $emailError : ''; ?></small>
        <label for="client-name"><h3 class="h3 text-danger">Email</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="form-group">
        <small class="text-danger">* <?php echo isset($phoneError) ? $phoneError : ''; ?></small>
       <label for="client-name"><h3 class="h3 text-danger">Phone</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="phone" value="<?php echo $phone; ?>">
      </div>
      <div class="form-group">
        <small class="text-danger">* <?php echo isset($addressError) ? $addressError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Address</h3></label>
        <Textarea class="form-control input-lg" id="client-email" name="address" value=""><?php echo $address; ?>
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
        <input type="text" class="form-control input-lg" id="client-name" name="city" value="<?php echo $city; ?>">
      </div>
    </div>
    <div class="col-sm-12">
        <hr>
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">

            <a href="hub1_office" type="button" class="btn btn-lg btn-primary">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="update">Update</button>
        </div>
    </div>
</form>
   </div>
    </div>
</div>


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
include('includes/footer.php');
?>