<?php
session_start();


if (isset($_POST['burgers_b'])) {
    $_SESSION['burger'] = $_POST['burgers'];
    header('Location: page2.php');
}

if (isset($_POST['drinks_b'])) {
    $_SESSION['drink'] = $_POST['drinks'];
    header('Location: page3.php');
}

if (isset($_POST['sides_b'])) {
    $_SESSION['side'] = $_POST['sides'];
    header('Location: page4.php');
}

if (isset($_POST['desserts_b'])) {
    $_SESSION['dessert'] = $_POST['desserts'];
    header('Location: results.php');
}
