<?php 

session_start();
global $row;
include './includes/header.php';
require './includes/sato.php';



// if user is not logged in
// if( !$_SESSION['loggedInUser'] ) {
    
//     // send them to the login page
//     header("Location: index.php");
// }

// connect to database
include('includes/connection.php');

// query & result
$query = "SELECT * FROM faq";
$result = mysqli_query( $conn, $query );

 ?>




  <h2>Frequently Asked Questions</h2>
  <p>Here are tips to help u manage ur account</p>
<?php

 if( mysqli_num_rows($result) > 0 ) {
        
        // we have data!
        // output the data
        
        while( $row = mysqli_fetch_assoc($result) ) {
           
            echo " <a type='button'  data-toggle='collapse' data-target='#demo" . $row['id'] . "'><h4><strong>" . $row['Question'] . "</strong></h4></a>" ;

        echo"<div id='demo" . $row['id'] . "' class='collapse'>" . $row['Reply'] . "</div><hr>";

            
        }
    } else { // if no entries
        echo "<div class='alert alert-warning'>You have no clients!</div>";
    }

    mysqli_close($conn);

    ?>



   <br><br>
   </div>
          </div>
     
       </section>



<?php include './includes/footer.php' ?>