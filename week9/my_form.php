<!-- Michael Ofori -->


<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">

    <title>Search Form</title>
</head>

<body>
    <h1>Search Form</h1>

    <?php
    $searchBox1 = (isset($_GET['searchBox1']))            // check if form has been submitted
        ? htmlentities($_GET['searchBox1']) : '';     // maintain user input
        $_SESSION['search']=$searchBox1; // intialize session variable
    ?>

    <form method="GET" action="my_form.php">
        <p>Search Box 1: <input type="text" placeholder="type your word here" name="searchBox1" value="<?= $searchBox1 ?>">
            <input type="submit" value="Submit">
        </p>
    </form>
    <br>

    <h1>Form 2</h2>

        <form method="POST" action="results_page.php">
            <p>Search Box 2: <input type="text" placeholder="type your word here" name="searchBox2">
                <input type="submit" value="Submit">
            </p>
        </form>

        <?php
        $form1output = $_GET['searchBox1'];
        echo "Search Input 1: " . $form1output;
        ?>





</body>

</html>