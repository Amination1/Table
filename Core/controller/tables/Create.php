<?php

use Core\Database;

require '../../functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base("{$class}.php");
});

$config = require (base('config.php'));

$db = new Database($config['database']);


$totalRows = $db->query('SELECT COUNT(*) FROM laptop')->findOrFail();
$totalrows = $totalRows['COUNT(*)'];

if (!empty($_POST)){
    $db->query('INSERT INTO laptop(id, model, color, gen, size, price, information) VALUES (:id, :model, :color, :gen, :size, :price, :information)',[
        'id' => $totalrows,
        'model' => $_POST['model'],
        'color' => $_POST['color'],
        'gen' => $_POST['gen'],
        'size' => $_POST['size'],
        'price' => (int)$_POST['price'],
        'information' => $_POST['information']
    ]);
    header('location: /core/controller/tables/tables.php');
}


require base('Core/view/tables/create.view.php');