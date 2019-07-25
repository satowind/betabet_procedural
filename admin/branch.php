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
$query = "SELECT * FROM branch";
$result = mysqli_query( $conn, $query );

if( isset( $_GET['alert'] ) ) {
    
    // new client added
    if( $_GET['alert'] == 'success' ) {
        $alertMessage = "<div class='alert alert-success'>New branch added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    // client updated
    } elseif( $_GET['alert'] == 'updatesuccess' ) {
        $alertMessage = "<div class='alert alert-success'>Branch updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    
    // client deleted
    } elseif( $_GET['alert'] == 'deleted' ) {
        $alertMessage = "<div class='alert alert-success'>Branch deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
      
}


include('includes/header.php');
?>
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Branch</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Branch</h2>
        
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
                        <th>Branch Id</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Edit</th>
                    </tr>
    
            </thead>
            <tbody>
                
    <?php
    
    if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $row = mysqli_fetch_assoc($result) ) {
            echo "<tr>";

            echo" <td> ".$row['id']."</td><td>" . $row['address'] . "</td><td>" . $row['phone'] . "</td><td>" . $row['email'] . "</td>";
            
           
            
            echo '<td><a  href="editbranch?id=' . $row['id'] . '" type="button" class="btn btn-primary btn-sm pull-right">Update
                    <span class="glyphicon glyphicon-edit"></span>
                    </a></td>';
            
            echo "</tr>";
        }
    } else { // if no entries
        echo "<div class='alert alert-warning'>You have no clients!</div>";
    }

    mysqli_close($conn);

    ?>
            
   
            </tbody>
            
        </table>

        <div>
             <td colspan="4"><div class="text-center"><a href="addbranch" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Post</a></div></td>
        </div>
        
        <br />
        
        
      <?php require 'includes/footer1.php'; ?>