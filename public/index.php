<?php

require '../vendor/autoload.php';
$products = ['product1', 'product2', 'product3', 'product4', 'product5'];
$loader = new Twig_Loader_Filesystem(__DIR__.'/../src/View');
$twig = new Twig_Environment($loader);
echo $twig->render('index.html.twig', ['products' => $products]);



