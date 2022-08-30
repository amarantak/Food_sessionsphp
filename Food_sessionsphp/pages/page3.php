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
    <h1>Choose your favourite main side</h1>
    <div class="cards-container">
        <div class="card">
            <div class="image">
                <img src="../imgs/sides.jpg" alt="">
            </div>
            <a href="#">
                <h2>Chips</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/sides.jpg" alt="">
            </div>
            <a href="#">
                <h2>Salad</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/sides.jpg" alt="">
            </div>
            <a href="#">
                <h2>Sauce</h2>
            </a>
        </div>
    </div>

    <form action="../backpage.php" method="post">
        <select name="sides">
            <option value="side1">Chips</option>
            <option value="side2">Salad</option>
            <option value="side3">Sauce</option>
        </select>
        <button type="submit" name="sides_b">Submit</button>
    </form>




</body>

</html>