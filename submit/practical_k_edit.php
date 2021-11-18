<?php

ob_start();
include "dbConn.php"; // Using database connection file here
ob_end_clean();


//Editing data
if (isset($_POST['Update'])) {

  $edit_term = $_POST['edi']; //taking old term  
  $new_term = $_POST['update_term'];  //taking new term

  $edit = mysqli_query($conn, "UPDATE `practical_lab_table` SET `Search_term`='$new_term' where `Search_term`='$edit_term' ");

  if ($edit) {
    mysqli_close($conn);
    header("location:form_practical.php");
    exit;
  } else {
    echo "Error updating record: " . $conn->error;
  }
  // Closing the connection.

}

$conn->close();

?>


<!DOCTYPE html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h3>Update Data</h3>

  <form method="POST">

     <label for ="update">Change record from :</label>
     
     <input type="text" id="update" name="update"value="<?php echo $_POST['edi'];  ?>" disabled >
 
     <label for ="update2">Change record to :</label>
    <input type="text" id="update_term" name="update_term" >
    <br><br>
    <input type="submit" name="Update" value="Update">
  </form>



</body>

</html>