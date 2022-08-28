<?php

function navigation($page)
{
    if ($page == 'index') {
        echo '
            <a href="index.php">Choose your burger</a>
            <a href="pages/page2.php">Choose your drink</a>
            <a href="pages/page3.php">Choose your side</a>
            <a href="pages/page4.php">Choose your dessert</a>
            <a href="pages/page5.php">Review your order</a>
        ';
    } else {
        echo '
            <a href="../index.php">Choose your burger</a>
            <a href="page2.php">Choose your drink</a>
            <a href="page3.php">Choose your side</a>
            <a href="page3.php">Choose your dessert</a>
            <a href="page3.php">Review your order</a>
        ';
    }
}
