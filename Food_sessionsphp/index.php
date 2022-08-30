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
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>

<body>
    <h1>Choose your favourite burger</h1>
    <div class="cards-container">
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="#">
                <h2>Cheeseburger</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="#">
                <h2>Meatlovers</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="imgs/burger.jpg" alt="">
            </div>
            <a href="#">
                <h2>Veggie</h2>
            </a>
        </div>
    </div>

    <form action="backpage.php" method="post">
        <select name="burgers">
            <option value="burger1">Cheeseburger</option>
            <option value="burger2">Meatlovers</option>
            <option value="burger3">Veggie</option>
        </select>
        <button type="submit" name="burgers_b">Submit</button>
    </form>




</body>

</html>