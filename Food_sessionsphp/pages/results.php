<?php
session_start();


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
    <br><br>
    <div class="main">
        <?php
        echo "<h2>" . "Burger: " . $_SESSION['burger'] . "<br>" . "Drink: " . $_SESSION['drink'] . "<br>" . "Side: " . $_SESSION['side'] . "<br>" . "Dessert: " . $_SESSION['dessert'] . "</h2>";

        ?>
    </div>



</body>

</html>