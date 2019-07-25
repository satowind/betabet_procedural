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
// $query = "SELECT * FROM admin_role WHERE staff_unit='$clientID'";
// $result = mysqli_query( $conn, $query );

// if result is returned
// if( mysqli_num_rows($result) > 0 ) {
    
//     // we have data!
//     // set some variables
//     while( $row = mysqli_fetch_assoc($result) ) {
//         $how_to     = $row['how_to'];
//         $funding     = $row['funding'];
//         $withdrawal    = $row['withdrawal'];
//         $faq     = $row['faq'];
//         $contact_us    = $row['contact_us'];
//         $contact_us_page     = $row['contact_us_page'];
//         $chat_update    = $row['chat_update']; 
//         $company_structure    = $row['company_structure'];
//         $manage_admin     = $row['manage_admin'];
//         $customers    = $row['customers'];
//          $approve_reg     = $row['approve_reg'];
//         $blogs    = $row['blogs'];
//         $social_icons    = $row['social_icons'];
//          $contact_us_page    = $row['contact_us_page'];
//          $staff_unit     = $row['staff_unit'];
       
       
       
//     }
// } else { // no results returned
//     $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='FAQ'>Head back</a>.</div>";
// }

// if update button was submitted
if( isset($_POST['assign']) ) {
    
    // set variables
        $branch     = validateFormData( $_POST["branch"] );
        $staff_unit     = validateFormData( $_POST["staff_unit"] );

         $queryz = "SELECT * FROM admin_role WHERE staff_unit= '$staff_unit' LIMIT 1 ";
         $resultz = mysqli_query( $conn, $queryz );
         $rowz = mysqli_fetch_assoc($resultz);

         $staff_unit_id= $rowz['id'];
  
    
    // new database query & result
    $query = "UPDATE `admintable`
            SET `branch`='$branch',
            `staff_unit`='$staff_unit',
            `staff_unit_id`='$staff_unit_id'
            WHERE b_id='$clientID'";

    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: madmin?alert=update1success");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}

// if delete button was submitted
if( isset($_POST['ass']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Please be sure you want to give or edit the staff branch and/or unit!</p><br>
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

<h1>Assign Staff Roles</h1>

<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
 <div class="container">
        <div class="row well">
            <div class="col-sm-6 col-sm-offset-3">
<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="row">



    <div class="form-group">
        <small class="text-danger">* <?php echo isset($underError) ? $underError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Choose Branch</h3></label>
            <select class="form-control input-lg" id="under" name="branch">
                <option value="" >---Choose Branch---</option>
                 <?php 
        // query & result
        require 'includes/connection.php';
        $query = "SELECT * FROM branch ";
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



    <div class="form-group">
        <small class="text-danger">* <?php echo isset($underError) ? $underError : ''; ?></small>
        <label for="client-email"><h3 class="h3 text-danger">Choose Unit</h3></label>
            <select class="form-control input-lg" id="under" name="staff_unit">
                <option value="" >---Choose Unit---</option>
                 <?php 
        // query & result
        require 'includes/connection.php';
        $query = "SELECT * FROM admin_role ";
        $result = mysqli_query( $conn, $query );

                if( mysqli_num_rows($result) > 0 ) {
                // we have data!
                // output the data       
        while( $row = mysqli_fetch_assoc($result) ) {
            echo " 
              <option value='".$row['staff_unit']."'>".strtoupper($row['staff_unit'])."</option>
             ";
        }
    }
            ?>
               
            </select>
        </div>

   
   
   



     
     
    <div class="col-sm-12">
        <hr>
        <div class="pull-right">

            <a href="madmin" type="button" class="btn btn-lg btn-default">Cancel</a>
            <button type="submit" class="btn btn-lg btn-success" name="ass">Assign Rows</button>
        </div>
    </div>
</form>
</div></div></div>
<?php
require 'includes/js.php';
include('includes/footer.php');
?>