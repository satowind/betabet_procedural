<?php
session_start();

//if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: index");
}

// connect to database
include('includes/connection.php');

// query & result
$query = "SELECT * FROM admintable";
$result = mysqli_query( $conn, $query );


if( isset( $_GET['alert'] ) ) {
    
    // new client added
    if( $_GET['alert'] == 'success' ) {
        $alertMessage = "<div class='alert alert-success'>New Staff added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    // client updated
    } elseif( $_GET['alert'] == 'updatesuccess' ) {
        $alertMessage = "<div class='alert alert-success'>Staff Details updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    
    // client deleted
    } elseif( $_GET['alert'] == 'deleted' ) {
        $alertMessage = "<div class='alert alert-success'>Staff deleted Succesfully! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }elseif( $_GET['alert'] == 'update1success' ) {
        $alertMessage = "<div class='alert alert-success'>Role and Branch assigned Succesfully! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
      
      
}


include('includes/header.php');
?>
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Admins Database</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Admins</h2>
        
        <br />
        
        <script type="text/javascript">
        jQuery( document ).ready( function( $ ) {
            var $table1 = jQuery( '#table-1' );
            
            // Initialize DataTable
            $table1.DataTable( {
                "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "bStateSave": true
            });
            
            // Initalize Select Dropdown after DataTables is created
            $table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                minimumResultsForSearch: -1
            });
        } );
        </script>

        <?php echo isset($alertMessage) ? $alertMessage: ''; ?>
        <table class="table table-striped table-bordered" id="table-1">
            <thead>
                                
                    <tr>
                        <th>Staff Id</th>
                        <th>Staff Unit</th>
                        <th>Username</th>
                        <th>Full name</th>
                        <th>Email</th>
                        <th>Branch</th>
                        <th>Phone Number</th>
                        <th>Edit</th>
                        <th>Assign Roles</th>
                    </tr>
    
            </thead>
            <tbody>
                
    <?php
    
    if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $row = mysqli_fetch_assoc($result) ) {

            echo "<tr>";

            echo" <td> ".$row['staff']."</td><td> ".$row['staff_unit']."</td><td> ".$row['username']."</td><td>" . $row['name'] . "</td><td>" . $row['email'] . "</td><td> ".$row['branch']."</td><td>" . $row['phone'] . "</td>";
            
           
            
            echo '<td><a  href="editmadmin?id=' . $row['b_id'] . '" type="button" class="btn btn-primary btn-sm done">
                   Edit
                    </a></td>';
             echo '<td><a  href="assignbandunit?id=' . $row['b_id'] . '" type="button" class="btn btn-success btn-sm done">
                   Assign Branch and Unit
                    </a></td>';
           
            
            echo "</tr>";
        }
    } else { // if no entries
        echo "<div class='alert alert-warning'>You have no clients!</div>";
    }

     {
        
    }

    if( isset( $_POST["register-form-submit"] ) ) {

    }
    mysqli_close($conn);

    ?>
            
   
            </tbody>
            
        </table>
 <div>
             <td colspan="4"><div class="text-center"><a href="register" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add New Admin</a></div></td>
        </div>

        
        <br />
       
        
        
      <?php require 'includes/footer1.php'; ?>