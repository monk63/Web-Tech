<?php
ob_start();
include "dbConn.php"; // Using database connection file here
ob_end_clean();


#Validation with regex
$Search_term = $_POST["Search_term"];
if (!preg_match("/^[a-zA-Z-' ]*$/",$Search_term))  
{ die ("Invalid Word");}


//Adding to database
if(isset($_POST['submit'])){
   
       $add= $_POST['Search_term'];
         
        $run=mysqli_query($conn,"INSERT INTO `practical_lab_table`(`Search_term`) VALUES ('$add')");
        
        if(!$run){
          echo mysqli_error($conn);
       }
       else{  
           
          echo "New record has been added successfully !";
 
       }
 
    } 

// Closing the connection.


include "practical_i_select.php";

$conn->close();
 
?>

