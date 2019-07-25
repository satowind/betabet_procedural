<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: index");
}

// get ID sent by GET collection





// connect to database
include('includes/connection.php');
global $conn;
// include functions file
include('includes/functions.php');
$staff_unit='';
// query the database with client ID

// if update button was submitted
if( isset($_POST['assign']) ) {
    
    // set variables
        $funding     = validateFormData( $_POST["funding"] );
        $withdrawal     = validateFormData( $_POST["withdrawal"] );
        $manage_admin    = validateFormData( $_POST["manage_admin"] );
        $how_to     = validateFormData( $_POST["how_to"] );
        $approve_reg     = validateFormData( $_POST["approve_reg"] );
        $customers    = validateFormData( $_POST["customers"] );
        $chat_update    = validateFormData( $_POST["chat_update"] );
        $faq    = validateFormData( $_POST["faq"] );
        $social_icons    = validateFormData( $_POST["social_icons"] );
        $blogs    = validateFormData( $_POST["blogs"] );
        $contact_us    = validateFormData( $_POST["contact_us"] );
        $contact_us_page    = validateFormData( $_POST["contact_us_page"] );
        $company_structure    = validateFormData( $_POST["company_structure"] );


        if( !$_POST["staff_unit"] ) {
        $staffunitError = "Please enter a Staff Unit <br>";
    } else {
        $staff_unitz = validateFormData( $_POST["staff_unit"] );
         $query = "SELECT `staff_unit` FROM `admin_role` WHERE `staff_unit`= '$staff_unitz' LIMIT 1";
       
        $result = mysqli_query($conn,$query);
        
        if( mysqli_num_rows($result) > 0 ) {
             $staffunitError = "Staff Unit Already Exist<br>";
        }else{
            $staff_unit = validateFormData( $_POST["staff_unit"] );
        }
    }

        // if( !$_POST["staff_unit"] ) {
        // $staffunitError = "Please enter a name <br>";
        // } else {
        //     $staff_unit = validateFormData( $_POST["staff_unit"] );
        // }
       
    // new database query & result
    if ($staff_unit) {
        $query = "INSERT INTO `admin_role` (`funding`,`withdrawal`,`manage_admin`,`how_to`,`approve_reg`,`customers`,`chat_update`,`faq`,`social_icons`,`blogs`,`contact_us`,`contact_us_page`,`company_structure`,`staff_unit`)
        VALUES ('$funding',  '$withdrawal','$manage_admin', '$how_to','$approve_reg','$customers',  '$chat_update','$faq', '$social_icons','$blogs','$contact_us', '$contact_us_page','$company_structure','$staff_unit')";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: units?alert=success");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}
    }
   

// if delete button was submitted
if( isset($_POST['add']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to add this Unit with the following privilages!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."' method='post'>


                        ";
                      foreach ($_POST as $key => $value) {
                         $alertMessage .=   "<input type='hidden' name='".$key."' value='".$value."'>";
                        }

 
                  $alertMessage .= "<input type='submit' class='btn btn-danger btn-sm' name='assign' value='Yes, Assign!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
}

if( isset($_POST['delete']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to give or remove this Unit!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$clientID' method='post'>


                        ";
                      foreach ($_POST as $key => $value) {
                         $alertMessage .=   "<input type='hidden' name='".$key."' value='".$value."'>";
                        }

 
                  $alertMessage .= "<input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes, Assign!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete']) ) {
    
    // new database query & result
    $query = "DELETE FROM admin_role WHERE staff_unit='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: units?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>

<h1>Create Staff Unit</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="row">


   <div class="form-group">
        <small class="text-danger">* <?php echo isset($staffunitError) ? $staffunitError : ''; ?></small>
       <label for="client-name"><h3 class="h3 text-danger">Staff Unit</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="staff_unit" value="">
      </div>
        
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Funding</h3></label>
       <select class="form-control input-lg" id="gender" name="funding">
                
                <option  value="1">Yes</option>
                <option value="0">No</option>
            </select>
    </div>


     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Withdrawal </h3></label>
       <select class="form-control input-lg" id="gender" name="withdrawal">
                
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Company Structure</h3></label>
       <select class="form-control input-lg" id="gender" name="company_structure">
                
                <option value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Chat Setting</h3></label>
       <select class="form-control input-lg" id="gender" name="chat_update">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Edit Customers Profile</h3></label>
       <select class="form-control input-lg" id="gender" name="customers">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Approve Customrs Registration</h3></label>
       <select class="form-control input-lg" id="gender" name="approve_reg">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Manage Admin</h3></label>
       <select class="form-control input-lg" id="gender" name="manage_admin">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Contact Us</h3></label>
       <select class="form-control input-lg" id="gender" name="contact_us">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Blog</h3></label>
       <select class="form-control input-lg" id="gender" name="blogs">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Social Icons</h3></label>
       <select class="form-control input-lg" id="gender" name="social_icons">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Frequently Asked Question</h3></label>
       <select class="form-control input-lg" id="gender" name="faq">
                
                <option  value="1">Yes</option>
                <option value="0">No</option>
            </select>
    </div>

     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">How to </h3></label>
       <select class="form-control input-lg" id="gender" name="how_to">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>

    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Contact Us Page Edit</h3></label>
       <select class="form-control input-lg" id="gender" name="contact_us_page">
                
                <option  value="1">Yes</option>
                <option  value="0">No</option>
            </select>
    </div>
   
     
    
    <div class="col-sm-12">
        <hr>
       
        
        <div align="center">

            
            <button type="submit" class="btn btn-lg btn-success" name="add" >Add New</button>
            
        </div>
    </div>

</form>


</div></div></div>
<?php
require 'includes/js.php';
include('includes/footer.php');
?>