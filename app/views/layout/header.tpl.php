<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMD Web Development</title>

    <link rel="stylesheet" href="<?= $viewData['assetsBaseUri'] ; ?>/css/reset.css">
    <link rel="stylesheet" href="<?= $viewData['assetsBaseUri'] ; ?>/css/style.css">

    <nav>
        <ul>

        <?php

        $nav = [
             'lastest projects' => $router->generate('latest_projects'),
             'testimonials' => $router->generate('testimonials'),
             'home' => $router->generate('main_home'),
             'about me' => $router->generate('about_me'),
             'contact' => $router->generate('contact_me'),
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