<?php
session_start();
$_SESSION['itemType'] = 'Burger';
$_SESSION['itemName'] = 'Cheeseburger';
print_r($_SESSION);

include_once('functions/functions.php');
$page = 'index';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>

<body>
    <div class="nav">
        <?php
        navigation($page);
        ?>
    </div>
    <h1>Choose your favourite burger</h1>
    <div class="cards-container">
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="">
                <h2>Cheeseburger</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="">
                <h2>Meatlovers</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="">
                <h2>Veggie</h2>
            </a>
        </div>
    </div>





</body>

</html>