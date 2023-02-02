<!-- FUNCTIONS -->
<?php
    require_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php
            if(isset($title)){
                echo $title;
            }else{
                echo "Site de réservation de table";
            }
        ?>
    </title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="navbar__list">
                <?php
                    echo add_nav_menu();
                ?>
            </ul>
            <a href="index.php" class="logo">
                <img src="images/mr-shaker-logo.png" alt="">
            </a>
            <ul class="navbar__list">
                <?php
                    echo add_nav_menu2();
                ?>
            </ul>
        </nav>
    </header>