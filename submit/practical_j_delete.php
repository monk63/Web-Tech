
<?php
ob_start();
include "dbConn.php"; // Using database connection file here
ob_end_clean();


if(isset($_POST['delete'])){ 

  $delete_term = $_POST['del']; //input  

  //Delete query
//$delete_query = mysqli_query($conn,"delete from practical_lab_table where Search_term = '$delete_term'");
$delete_query =  mysqli_query($conn,"DELETE from `practical_lab_table` where `Search_term` = '$delete_term'");

if ($delete_query){
  mysqli_close($conn);
  header("location:form_practical.php");
  exit;
} else {
  echo "Error deleting record: " . $conn->error;
}
// Closing the connection.

}

$conn->close();
 
?>