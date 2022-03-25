<?php

require_once '../vendor/autoload.php';

/* ------------
--- ROUTAGE ---
-------------*/


// création de l'objet router
// Cet objet va gérer les routes pour nous, et surtout il va
$router = new AltoRouter();

// le répertoire (après le nom de domaine) dans lequel on travaille est celui-ci
// Mais on pourrait travailler sans sous-répertoire
// Si il y a un sous-répertoire
if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else { // sinon
    // On donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
    $_SERVER['BASE_URI'] = '/';
}



$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController' // On indique le FQCN de la classe
    ],
    'main-home'
);

$router->map(
    'GET',
    '/categories/list',
    [
        'method' => 'category',
        'controller' => '\App\Controllers\CategoryController' // On indique le FQCN de la classe
    ],
    'categories/list'
);


 $router->map(
    'GET',
   '/categories/add',
    [
        'method' => 'categoryAdded',
        'controller' => '\App\Controllers\CategoryController' // On indique le FQCN de la classe
     ],
    'categories/add'
 );

 $router->map(
    'GET',
   '/categories/edit/[i:id]',
    [
        'method' => 'find',
        'controller' => '\App\Controllers\CategoryController' // On indique le FQCN de la classe
     ],
    'categories_edit'
 );

 $router->map(
    'POST',
    '/categories/edit/',
    [          
        'method' => 'edit',
        'controller' => '\App\Controllers\CategoryController' // On indique le FQCN de la classe
        ],
    'categories_update_post'
        );

$router->map(
    'POST',
'/categories/add',
    [          
        'method' => 'create',
        'controller' => '\App\Controllers\CategoryController' // On indique le FQCN de la classe
    ],
    'categories_add_post'
    );


 $router->map(
    'GET',
   '/products/list',
    [
        'method' => 'products',
        'controller' => '\App\Controllers\ProductsController' // On indique le FQCN de la classe
     ],
    'products/list'
 );

 $router->map(
    'GET',
   '/products/add',
    [
        'method' => 'productAdded',
        'controller' => '\App\Controllers\ProductsController' // On indique le FQCN de la classe
     ],
    'products/add'
 );

 $router->map(
    'POST',
   '/products/add',
    [          
        'method' => 'create',
        'controller' => '\App\Controllers\ProductsController' // On indique le FQCN de la classe
     ],
    'products_add_post' 
  );
$router->map(
    'POST',
    '/products/edit/[i:id]',
    [          
        'method' => 'edit',
        'controller' => '\App\Controllers\ProductsController' // On indique le FQCN de la classe
        ],
    'product_update_post'
        );
    
$router->map(
    'GET',
    '/products/edit/[i:id]',
    [
        'method' => 'find',
        'controller' => '\App\Controllers\ProductsController' // On indique le FQCN de la classe
        ],
    'products_edit'
    );



/* -------------
--- DISPATCH ---
--------------*/

// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();


// Ensuite, pour dispatcher le code dans la bonne méthode, du bon Controller
// On délègue à une librairie externe : https://packagist.org/packages/benoclock/alto-dispatcher
// 1er argument : la variable $match retournée par AltoRouter
// 2e argument : le "target" (controller & méthode) pour afficher la page 404
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');
// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();
