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
    <h1>Choose your favourite drink</h1>
    <div class="cards-container">
        <div class="card">
            <div class="image">
                <img src="../imgs/drinks.jpg" alt="">
            </div>
            <a href="#">
                <h2>Soda</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/drinks.jpg" alt="">
            </div>
            <a href="#">
                <h2>Juice</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/drinks.jpg" alt="">
            </div>
            <a href="#">
                <h2>Water</h2>
            </a>
        </div>
    </div>

    <form action="../backpage.php" method="post">
        <select name="drinks">
            <option value="Soda">Soda</option>
            <option value="Juice">Juice</option>
            <option value="Water">Water</option>
        </select>
        <button type="submit" name="drinks_b">Submit</button>
    </form>




</body>

</html>