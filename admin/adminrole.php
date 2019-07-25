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
$query = "SELECT * FROM admin_role WHERE staff_unit='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $how_to     = $row['how_to'];
        $funding     = $row['funding'];
        $withdrawal    = $row['withdrawal'];
        $faq     = $row['faq'];
        $contact_us    = $row['contact_us'];
        $contact_us_page     = $row['contact_us_page'];
        $chat_update    = $row['chat_update']; 
        $company_structure    = $row['company_structure'];
        $manage_admin     = $row['manage_admin'];
        $customers    = $row['customers'];
         $approve_reg     = $row['approve_reg'];
        $blogs    = $row['blogs'];
        $social_icons    = $row['social_icons'];
         $contact_us_page    = $row['contact_us_page'];
         $staff_unit     = $row['staff_unit'];
       
       
       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
}

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
        //$staff_unit    = validateFormData( $_POST["staff_unit"] );
    
    // new database query & result
    $query = "UPDATE `admin_role`
            SET `company_structure`='$company_structure',
            `blogs`='$blogs',
           
            `chat_update`='$chat_update',
            `contact_us_page`='$contact_us_page',
            `contact_us`='$contact_us',
            `manage_admin`='$manage_admin',
            `funding`='$funding',
            `withdrawal`='$withdrawal',  
            `social_icons`='$social_icons',
            `faq`='$faq',
            `approve_reg`='$approve_reg',
            `customers`='$customers',
            `how_to`='$how_to'
            WHERE staff_unit='$clientID'";
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: units?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}

// if delete button was submitted
if( isset($_POST['ass']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to give or remove the various privilages from this Unit!</p><br>
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

if( isset($_POST['delete']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to remove this Unit!</p><br>
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

<h1>Assign Staff Roles</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">
   <div class="form-group">
        <small class="text-danger">* <?php echo isset($phoneError) ? $phoneError : ''; ?></small>
       <label for="client-name"><h3 class="h3 text-danger">Staff Unit</h3></label>
        <input type="text" class="form-control input-lg" id="client-name" name="staff_unit" value="<?php echo $staff_unit; ?>" disabled>
      </div>
        
    
   
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Funding</h3></label>
       <select class="form-control input-lg" id="gender" name="funding">
                
                <option <?php echo ($funding==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($funding==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Withdrawal </h3></label>
       <select class="form-control input-lg" id="gender" name="withdrawal">
                
                <option <?php echo ($withdrawal==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($withdrawal==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Company Structure</h3></label>
       <select class="form-control input-lg" id="gender" name="company_structure">
                
                <option <?php echo ($company_structure==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($company_structure==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Chat Setting</h3></label>
       <select class="form-control input-lg" id="gender" name="chat_update">
                
                <option <?php echo ($chat_update==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($chat_update==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Edit Customers Profile</h3></label>
       <select class="form-control input-lg" id="gender" name="customers">
                
                <option <?php echo ($customers==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($customers==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Approve Customrs Registration</h3></label>
       <select class="form-control input-lg" id="gender" name="approve_reg">
                
                <option <?php echo ($approve_reg==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($approve_reg==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Manage Admin</h3></label>
       <select class="form-control input-lg" id="gender" name="manage_admin">
                
                <option <?php echo ($manage_admin==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($manage_admin==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Contact Us</h3></label>
       <select class="form-control input-lg" id="gender" name="contact_us">
                
                <option <?php echo ($contact_us==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($contact_us==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Blog</h3></label>
       <select class="form-control input-lg" id="gender" name="blogs">
                
                <option <?php echo ($blogs==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($blogs==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Social Icons</h3></label>
       <select class="form-control input-lg" id="gender" name="social_icons">
                
                <option <?php echo ($social_icons==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($social_icons==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Frequently Asked Question</h3></label>
       <select class="form-control input-lg" id="gender" name="faq">
                
                <option <?php echo ($faq==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($faq==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
     <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">How to </h3></label>
       <select class="form-control input-lg" id="gender" name="how_to">
                
                <option <?php echo ($how_to==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($how_to==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>

    <div class="form-group ">
        <label for="client-address"><h3 class="h3 text-danger">Contact Us Page Edit</h3></label>
       <select class="form-control input-lg" id="gender" name="contact_us_page">
                
                <option <?php echo ($contact_us_page==1 ) ? 'Selected' : ''; ?> value="1">Yes</option>
                <option <?php echo ($contact_us_page==0 ) ? 'Selected' : ''; ?> value="0">No</option>
            </select>
    </div>
   
     
     </div>
    <div class="col-sm-12">
        <hr>
       
        <button type="submit" class="btn btn-lg btn-danger pull-left" name="delete">Delete</button>
        <div class="pull-right">

            <a href="units" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="ass">Assign Rows</button>
        </div>
    </div>
</form>
</div></div></div>
<?php
require 'includes/js.php';
include('includes/footer.php');
?>