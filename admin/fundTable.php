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
$query = "SELECT * FROM transactiontable WHERE Report=1 ORDER BY `id` DESC";
$result = mysqli_query( $conn, $query );

// if( isset( $_GET['alert'] ) ) {
    
//     // new client added
//     if( $_GET['alert'] == 'success' ) {
//         $alertMessage = "<div class='alert alert-success'>New Question added! <a class='close' data-dismiss='alert'>&times;</a></div>";
        
//     // client updated
//     } elseif( $_GET['alert'] == 'updatesuccess' ) {
//         $alertMessage = "<div class='alert alert-success'>FAQ updated! <a class='close' data-dismiss='alert'>&times;</a></div>";
    
//     // client deleted
//     } elseif( $_GET['alert'] == 'deleted' ) {
//         $alertMessage = "<div class='alert alert-success'>FAQ deleted! <a class='close' data-dismiss='alert'>&times;</a></div>";
//     }
      
// }


include('includes/header.php');
?>
        
                    <ol class="breadcrumb bc-3" >
                                <li>
                        <a href="index"><i class="fa-home"></i>Home</a>
                    </li>
                            <li class="active">
        
                                    <strong>Fund List</strong>
                            </li>
                        
                            </ol>
                    
        <h2>Funding</h2>
        
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
        
        <table class="table table-striped table-bordered" id="table-1">
            <thead>
                                
                    <tr>
                       
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Report</th>
                        <th>Bank</th>
                        <th>Date</th>
                        <th>Update</th>
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

            echo" <td>" . $row['username'] . "</td><td>" . $row['amount'] . "</td><td> ".$row['Report']."</td><td>" . $row['bank'] . "</td><td>" . $row['date'] . "</td>";
            
           if ($row['status'] == 1) {
            echo '<td>Already Done</td>';
               
           }else{
             echo '<td><button data-id="'.$row['id'].'" data-user="'. $row['username'] .'" data-amount="' . $row['amount'] . '" name="set" type="submit" class="btn btn-primary btn-sm done pull-right">
                    FUND ACCOUNT
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
                var id = me.data('id');
                var id =me.data('id');
                var user =me.data('user');
                var amount =me.data('amount');
                var parent = $(this).parent();
                //check if the id is defined
                if(id){


                    //send ajax request to the server using the id
                    
                    $.get("setDone.php?id="+id+'&action=funding&user='+user+'&amount='+amount,function(res){
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