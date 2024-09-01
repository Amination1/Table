<?php


use Core\Database;

require '../Database.php';



$config = require '../../config.php';

$db = new Database($config['database']);

$laptops = [];
$LINKS = [];
$links = [];

$totalRows = $db->query('SELECT COUNT(*) FROM laptop')->findOrFail();
$totalrows = $totalRows['COUNT(*)'];


for ($i = 0; $i < $totalrows; $i++) {
    $laptop = $db->query('SELECT * FROM laptop where id = :id', [
        'id' => $i
    ])->findOrFail();
    if ($laptop['admin'] == 1) {
        $laptops[] = $laptop;

    }

    $link = $db->query('SELECT id FROM laptop where id = :id', [
            'id' => $i
        ])->findOrFail();


    $LINKS[] = $link;
    $links[] = $LINKS[$i]['id'];
}



require '../view/laptops/laptops.view.php';

