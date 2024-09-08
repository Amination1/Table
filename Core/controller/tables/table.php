<?php

use Core\Database;
require '../../functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base("{$class}.php");
});


$config = require base('config.php')   ;

$db = new Database($config['database']);

$url = base64_decode($_GET['id']);

$mylaptop = $db->query('select * from laptop where id = :id',[
    'id' => $url
])->findOrFail();


 require base('Core/view/tables/table.view.php');