<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/style.css">
    <title><?= $mylaptop['model'] ?></title>
</head>
<body>
<a href="/core/controller/laptops.php">Back to laptops!</a>
<div class="laptop">
    <div class="title border-solid border-radius"><h1><?= $mylaptop['model'] ?></h1></div>
    <div class="info border-solid border-radius"><p><?= $mylaptop['information'] ?></p></div>
    <img class="info-img border-radius border-solid" src="../../../files/images/<?= $mylaptop['id']; ?>.webp"
         alt="<?= $mylaptop['model'] ?>" title="<?= $mylaptop['model'] ?>">
</div>
</body>
</html>