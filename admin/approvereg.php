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
$query = "SELECT * FROM usertable";
$result = mysqli_query( $conn, $query );

if( isset( $_GET['alert'] ) ) {
    
    // new client added
    if( $_GET['alert'] == 'success' ) {
        $alertMessage = "<div class='alert alert-success'>New Question added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        
    // client updated
    } elseif( $_GET['alert'] == 'updatesuccess' ) {
        $alertMessage = "<div class='alert alert-success'>User updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    
    // client deleted
    } elseif( $_GET['alert'] == 'deleted' ) {
        $alertMessage = "<div class='alert alert-success'>User deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }
      
}


include('includes/header.php');
?>
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Customers Database</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Customers</h2>
        
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
                        <th>Bet9ja Id</th>
                        <th>bet9ja Code</th>
                        <th>Surname</th>
                        <th>First Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Branch</th>
                        <th>Approve</th>
                        <th>Status</th>
                    </tr>
    
            </thead>
            <tbody>
                
    <?php
    
    if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $row = mysqli_fetch_assoc($result) ) {
            echo "<tr>";

            echo" <td> ".$row['bet9ja_id']."</td><td> ".$row['bet9ja_code']."</td><td>" . $row['surname'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['email'] . "</td><td> ".$row['userName']."</td><td>" . $row['phoneNumber'] . "</td><td>" . $row['gender'] . "</td><td> ".$row['address']."  ".$row['lga']."  ".$row['state']."</td><td>" . $row['branch'] . "</td>";
            
           if($row['status'] == 1){
                echo"<td>Already Approved</td>";
           } else {
            echo '<td><button data-id="'.$row['b_id'].'" data-user="'. $row['userName'] .'" data-amount="' . $row['amount'] . '" name="set" type="button" class="btn btn-primary btn-sm pull-right done">
            Approve Account
             </button></td>';
           }
            
         
           
             if ($row['status'] == 1) {
                echo '<td><h5 style="color:blue">DONE</h5></td>' ;
                
            }else{
                 echo ' <td><h5 style="color:red">UNDONE</h5></td> ';
            };
            
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
       
        <script >
            //get the elements
            $('.done').click(function(e){
                var me = $(this);
                //get user id
                var id =me.data('id');
                var user =me.data('user');
                var amount =me.data('amount');
                var parent = $(this).parent();

                //check if the id is defined
                if(id){


                    //send ajax request to the server using the id
                    
                    $.get("setapprove.php?id="+id+"&action=withdraw&user="+user+"&amount="+amount,function(res){
                        console.log(res);
                        if(res.success){
                            parent.html("Completed");
                            parent.next().html("DONE");
                        }
                    });

                    /*
                    $id = $_GET['id'];
                    //success reply
                    echo json_encode(['success'=>true]);
                    //failure reply
                     echo json_encode(['success'=>false]);
                     */
                }


            });
        </script>
        
      <?php require 'includes/footer1.php'; ?>