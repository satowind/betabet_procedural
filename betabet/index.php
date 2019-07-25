 <?php 

session_start();
// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {
    
    // send them to the login page
    header("Location: login");
}

global $row;
global $history;
global $pending;
global $banking;
if( isset( $_GET['alert'] ) ) {
 if( $_GET['alert'] == 'sucess' ) {
        $satoseries = "<div class='alert alert-success'>Transaction received please wait for response<a class='close' data-dismiss='alert'>&times;</a></div>";
      }elseif ($_GET['alert'] == 'updatesuccess') {
         $satoseries = "<div class='alert alert-success'>Bank account details succesfull added<a class='close' data-dismiss='alert'>&times;</a></div>";
      }elseif ($_GET['alert'] == 'updatesuccesss') {
         $satoseries = "<div class='alert alert-success'>Bank account details updated succesfully<a class='close' data-dismiss='alert'>&times;</a></div>";
      }elseif ($_GET['alert'] == 'deleted') {
         $satoseries = "<div class='alert alert-success'>Bank account details deleted succesfully<a class='close' data-dismiss='alert'>&times;</a></div>";
      }
 }

include './includes/header.php';
require './includes/sato.php';

 ?>
   

	
  <?php echo isset($satoseries) ? $satoseries: ''; ?>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home"><span class="glyphicon glyphicon-user"></span> Profile </a></li>
    <li><a data-toggle="tab" href="#menu1"><span class="glyphicon glyphicon-euro"></span> View Account History </a></li>
    <li><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-usd"></span> View Bank Details </a></li>
    <li><a data-toggle="tab" href="#menu3"><span class="glyphicon glyphicon-sort"></span> View Pending Transaction </a></li>
  </ul>








  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<br>
      <h3>My Account</h3>       
  <table class="table table-hover table-bordered">
    
    <tbody>
      <?php 
      
     

          echo '
      <tr>
        <td> <h5>Customer id</h5></td>
        <td><h5>' . $row["b_id"] . '</h5></td>
    
      </tr>
       <tr>
        <td> <h5>Name </h5></td>
        <td><h5>' . strtoupper($row["surname"] ) .' ' . strtoupper($row["firstname"] ) .'</h5></td>
    
      </tr>
      <tr>
        <td> <h5>Email Address </h5></td>
        <td><h5>' . $row["email"] .'</h5></td>
    
      </tr>
      <tr>
        <td> <h5>Phone Number </h5></td>
        <td><h5>' . $row["phoneNumber"] .'</h5></td>
    
      </tr>



      <tr>
        <td> <h5>Branch</h5></td>
        <td><h5>' . $row["branch"] .'</h5></td>
    
      </tr>
       <tr>
        <td> <h5>Address</h5></td>
        <td><h5>'. $row["address"] .' '. $row["street"]. '</h5></td>
    
      </tr>
      <tr>
        <td> <h5>state LGA</h5></td>
        <td><h5>'.$row["state"].' '.$row["lga"].'</h5></td>
    
      </tr>
      ';
        
$amount=$row['amount'];
         $_SESSION['amount'] = $amount;
        ?>
     
    </tbody>
  </table>

    </div>













    <div id="menu1" class="tab-pane fade"><br>
      <h3>Account History</h3>
    <div style="border: 2px solid rgba(0,0,0,0.1); padding: 30px; border-radius: 5px">
    
 
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
    
    <table class="table table-striped table-bordered datatable" id="table-1">
    <thead >
      <tr>
        <th style="border-bottom: none"><h5>Date</h5></th>
         <th style="border-bottom: none"><h5>Amount</h5></th>
        <th style="border-bottom: none"> <h5>Type Of Activity</h5></th>
        <th style="border-bottom: none"><h5>Report</h5></th>
      </tr>
    </thead>
    <tbody>
<?php 
  if( mysqli_num_rows($history) > 0 ) {
        
        // we have data!
        // output the data
        
    while( $row = mysqli_fetch_assoc($history) ) {
     echo' <tr>
        <td><h5>' . $row["date"] . '</h5></td>
       <td><h5>' . $row["amount"] . '</h5></td>';
     
      if ($row['Report'] == 1) {
                echo '<td><h5>Funding</h5></td>' ;
                
            }else{
                 echo ' <td><h5>Withdrawal</h5></td> ';
            };
            
         

      if ($row['status'] == 1) {
                echo '<td><h5>Done</h5></td>' ;
                
            }else{
                 echo ' <td><h5>Pending</h5></td> ';
            };
            
      echo '</tr>';

      }
    }
?>


    </tbody>
  </table>
    </div></div>

<?php 


 ?>














    <div id="menu2" class="tab-pane fade"><br>
     <h3>Account Details</h3>
    <div style="border: 2px solid rgba(0,0,0,0.1); padding: 30px; border-radius: 5px">
    
 
  <script type="text/javascript">
    jQuery( document ).ready( function( $ ) {
      var $table1 = jQuery( '#table-2' );
      
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
    
    <table class="table table-striped table-bordered datatable" id="table-2">
    <thead >
      <tr>
        <th style="border-bottom: none"><h5>Account Name</h5></th>
         <th style="border-bottom: none"><h5>Bank</h5></th>
        <th style="border-bottom: none"> <h5>Account Number</h5></th>
        <th style="border-bottom: none"><h5>Account Type</h5></th>
        <th style="border-bottom: none"><h5>Edit</h5></th>
      </tr>
    </thead>
    <tbody>
<?php 
  if( mysqli_num_rows($banking) > 0 ) {
        
        // we have data!
        // output the data
        
    while( $rowss = mysqli_fetch_assoc($banking) ) {
     echo' <tr>
        <td><h5>' . strtoupper($rowss["accountName"]) . '</h5></td>
       <td><h5>' . strtoupper($rowss["Bank"]) . '</h5></td>
       <td><h5>' . $rowss["accountNumber"] . '</h5></td>
        <td><h5>' . $rowss["AccountType"] . '</h5></td> ';
      echo '<td><h5><a  href="editBank?accountnumber=' . $rowss['accountNumber'] . '" type="button" class="btn btn-primary btn-sm done">
                   Edit
                    </a></h5></td>';
      
      echo '</tr>';

      }
    }
?>


    </tbody>
  </table>
   <div>
             <td colspan="4"><div class="text-center"><a href="addBank" type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Bank Account</a></div></td>
        </div>
</div>
    </div>














<script type="text/javascript">
    jQuery( document ).ready( function( $ ) {
      var $table1 = jQuery( '#table-3' );
      
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

    <div id="menu3" class="tab-pane fade"><br>
      <h3>Pending Transactions</h3>
      <div style="border: 2px solid rgba(0,0,0,0.1); padding: 30px; border-radius: 5px">
      <table class="table table-striped table-bordered datatable" id="table-3">
    <thead>
      <tr>
        <th style="border-bottom: none"><h5>Date</h5></th>
         <th style="border-bottom: none"><h5>Amount</h5></th>
        <th style="border-bottom: none"> <h5>Type Of Activity</h5></th>
       
      </tr>
    </thead>
    <tbody>
     <?php 
     
  if( mysqli_num_rows($pending) > 0 ) {
        
        // we have data!
        // output the data
        
    while( $row = mysqli_fetch_assoc($pending) ) {
     echo' <tr>
        <td><h5>' . $row["date"] . '</h5></td>
       <td><h5>' . $row["amount"] . '</h5></td>';
     
      if ($row['Report'] == 1) {
                echo '<td><h5>Funding</h5></td>' ;
                
            }else{
                 echo ' <td><h5>Withdrawal</h5></td> ';
            };
            
            
      echo '</tr>';

      }
    }
?>

    
    </tbody>
  </table>
    </div></div>
  </div>
</div>


			</div>
       		</div>
     
       </section>
<br> <br>


<?php require './includes/footer.php' ?>