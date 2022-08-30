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
    <h1>Choose your favourite dessert</h1>
    <div class="cards-container">
        <div class="card">
            <div class="image">
                <img src="../imgs/desserts.jpg" alt="">
            </div>
            <a href="#">
                <h2>Ice cream</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/desserts.jpg" alt="">
            </div>
            <a href="#">
                <h2>Brownie</h2>
            </a>
        </div>
        <div class="card">
            <div class="image">
                <img src="../imgs/desserts.jpg" alt="">
            </div>
            <a href="#">
                <h2>Cake</h2>
            </a>
        </div>
    </div>

    <form action="backpage.php" method="post">
        <select name="desserts">
            <option value="dessert1">Ice cream</option>
            <option value="dessert2">Brownie</option>
            <option value="dessert3">Cake</option>
        </select>
        <button type="submit" name="desserts_b">Submit</button>
    </form>




</body>

</html>