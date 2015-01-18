<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../vendor/autoload.php';

//require_once '/path/to/lib/Twig/Autoloader.php';
//Twig_Autoloader::register();

$url = dirname(__DIR__);

$loader = new Twig_Loader_Filesystem('../tpl');
$twig = new Twig_Environment($loader, array(
    'cache' => $url . '/cache',
    'debug' => true
));

$template = $twig->loadTemplate('todo.html');


try {
    $db = new PDO('sqlite:../db.sqlite');
} catch (Exception $e) {

    throw $e;
}

$res = $db->query('SELECT t.desc,t.name,t.id,COUNT(v.id) AS votes FROM todo t '
        . ' LEFT JOIN votes v ON v.id=t.id '
        . ' GROUP BY t.id ORDER BY votes desc');

$features = $res->fetchAll();

echo $template->render(array('root' => $url, 'features' => $features));