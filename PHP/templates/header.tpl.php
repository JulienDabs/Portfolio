<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMD Web Development</title>

    <link rel="stylesheet" href="../CSS/reset.css">
    <link rel="stylesheet" href="../CSS/style.css">

    <nav>
        <ul>

        <?php

        $nav = [
            'lastest projects' => '../PHP/lastest_projects.php',
            'testimonials' => '../PHP/testimonials.php',
            'home' => '../PHP/Index.php',
            'about me' => '../PHP/about_me.php',
            'contact' => '../PHP/contact_me.php',
        ];
        ?>

        <?php
        foreach ($nav as $name => $link) : 
            ?>
            <li><a href="<?= $link ?>"><?= $name ?></a></li>

        <?php endforeach; ?>

       
            
        </ul>
    </nav>

</head>