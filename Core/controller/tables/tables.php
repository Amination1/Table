<?php
session_start();
use Core\Database;
use Core\Session;

require '../../functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    require base("{$class}.php");
});
$session = new Session();
$session->admin();

$config = require (base('config.php'));

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
    if (empty($_SESSION['user'])){
        if ($laptop['admin'] == 1) {
            $laptops[] = $laptop;

        }
    }elseif ($_SESSION['user'] != 'admin'){
        if ($laptop['admin'] == 1) {
            $laptops[] = $laptop;

        }
    }elseif ($_SESSION['user'] == 'admin'){
        if (empty($_GET['sort'])){
            $laptops[] = $laptop;
        }
        elseif ($_GET['sort'] == 'admin'){
            if ($laptop['admin'] == 0) {
                $laptops[] = $laptop;

            }
        }elseif ($_GET['sort'] == 'user'){
            if ($laptop['admin'] == 1) {
                $laptops[] = $laptop;

            }
        }

            }


    $link = $db->query('SELECT id FROM laptop where id = :id', [
            'id' => $i
        ])->findOrFail();


    $LINKS[] = $link;
    $links[] = $LINKS[$i]['id'];
}

require base('Core/view/tables/tables.view.php');

