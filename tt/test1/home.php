<?php
    // Start the session
    session_start();
    include 'car.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //Object
        $car1 = new Car("Benz", "Redblack", "automatic");
       //  echo $car1->car_name; wont work cause variable is set to private

        echo $car1->getCar_name();
        echo "                    ";
        echo $car1->getColor();
        echo "                    ";
        echo $car1->getTransmission();

        //callling destructor function
        unset($car1 );
    ?>
    
</body>
</html> 