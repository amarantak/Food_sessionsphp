<?php
session_start();
print_r($_SESSION);
include_once('../functions/functions.php');
$page = 'page2';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <h1><?php echo strtoupper($page); ?></h1>
    <div class="nav">
        <?php
        navigation($page);
        ?>
    </div>

</body>

</html>