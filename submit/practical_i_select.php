<!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!--Display all records from Database and function buttons  -->
<h2>Table Details</h2>

<table border="2">
  <tr>
    <td>Search Term</td>
      
    <td>Edit</td>
    <td>Delete</td>
  </tr>

  <?php

ob_start();
include "dbConn.php"; // Using database connection file here
ob_end_clean();

if(isset($_POST['search'])){ 

  $find_term = $_POST['Search_term']; //input   

//Display all records from Database and Fetching Data from database
$records = "SELECT * FROM practical_lab_table where Search_term='$find_term' " ;// fetch data from database
$results = $conn->query($records);  

if ($results -> num_rows > 0){

while ($data = mysqli_fetch_array($results)){
?>
  <tr>
    <td> <?php echo $data['Search_term']; ?></td>
           <!-- Edit button -->
    <td><form method="POST" action="practical_k_edit.php">
    <input type="hidden" name="edi" value="<?php  $_POST['Search_term'];  ?>">
  <input type="submit" name="edit" value="Edit">
</form></td>
   
       <!-- Delete button -->
    <td><form method="POST" action="practical_j_delete.php">
    <input type="hidden" name="del" value="<?php  $_POST['Search_term'];  ?>">
  <input type="submit" name="delete" value="Delete">
</form></td>

  </tr>	  
<?php
}


} 
}
?>


    
</body>
 
</html>


