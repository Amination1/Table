<?php

use Core\Database;

require '../Database.php';

$config = require '../../config.php';

$db = new Database($config['database']);

$url = base64_decode($_GET['id']);

$mylaptop = $db->query('select * from laptop where id = :id',[
    'id' => $url
])->findOrFail();


 require '../view/laptops/laptop.view.php';