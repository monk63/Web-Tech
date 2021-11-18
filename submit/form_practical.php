<!DOCTYPE html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <h1>Welcome!</h1>
  <h3>Search For Your Word</h3>


  <!-- ADD FORM -->
  <form method="POST" action="practical_h_add.php">

  <label for="Search_term">Add Word to Database: </label>
  <input type="text" id="Search_term" name="Search_term">
  
  <br><br>
    <br><br>
    <input type="submit" name="submit" value="Submit">

    <br><br>
</form>
 <!-- SEARCH FORM -->
    <form method="POST" action="practical_i_select.php">

    <label for="Search_term">Search for word in Database: </label>
  <input type="text" id="Search_term" name="Search_term">
  
  <br><br>
    <br><br>
    <input type="submit" name="search" value="Search">

    <br><br>
    </form>



</body>

</html>

