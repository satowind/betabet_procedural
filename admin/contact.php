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
$query = "SELECT * FROM contact";
$result = mysqli_query( $conn, $query );

if( isset( $_GET['alert'] ) ) {
    
    // new client added
    if( $_GET['alert'] == 'success' ) {
        $alertMessage = "<div class='alert alert-success'>New Contact Added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    // client updated
    } elseif( $_GET['alert'] == 'updatesuccess' ) {
        $alertMessage = "<div class='alert alert-success'>Contact Updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    
    // client deleted
    } elseif( $_GET['alert'] == 'deleted' ) {
        $alertMessage = "<div class='alert alert-success'>Contact Deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
      
}


include('includes/header.php');
?>
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Contact</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Contacts</h2>
        
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
                        <th>Header</th>
                        <th>Sub Header</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <!-- <th>BE_phone</th>
                        <th>BE_email</th>
                        <th>BE_address</th>
                        <th>ME_phone</th>
                        <th>ME_email</th>
                        <th>ME_address</th> -->
                        <th>Head Phone</th>
                        <th>Head Email</th>
                        <th>Head Address</th>
                        <th>edit</th>
                    </tr>
    
            </thead>
            <tbody>
                
    <?php
    
    if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $rowss = mysqli_fetch_assoc($result) ) {
            echo "<tr>";

            echo" <td> ".$rowss['header']."</td><td>" . $rowss['subHeader'] . "</td><td>" . $rowss['phone'] . "</td><td> ".$rowss['email']."</td><td>" . $rowss['address'] . "</td><td>" . $rowss['HO_phone'] . "</td><td>" . $rowss['HO_email'] . "</td><td> ".$rowss['HO_address']."</td>";
            
           
            
            echo '<td><a  href="editcontact?id=' . $rowss['id'] . '" type="button" class="btn btn-primary btn-sm done">
                   Edit
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

        
        <br />
       
        
        
      <?php require 'includes/footer1.php'; ?>