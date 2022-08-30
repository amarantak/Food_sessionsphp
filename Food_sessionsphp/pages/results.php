<?php
session_start();
print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css" type="text/css">
</head>

<body>
    <h1>Review your order</h1>
    <?php
    echo "Burger: " . $_SESSION['burger'] . "Drink: " . $_SESSION['drink'] . "Side: " . $_SESSION['side'] . "Dessert: " . $_SESSION['dessert'];

    ?>




</body>

</html>