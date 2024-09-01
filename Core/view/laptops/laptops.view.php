<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../view/style.css">
    <title>list of best laptops</title>
</head>
<body>
<h1 class="ta-center">Laptops</h1>

<table id="customers" class="ta-center">
    <tr>
        <th>Id</th>
        <th>Model</th>
        <th>Color</th>
        <th>Gen</th>
        <th>Size</th>
        <th>Price</th>
        <th>Image</th>
        <th>Link</th>
    </tr>
    <?php foreach ($laptops as $mylaptop): ?>

        <tr>
            <td><?= $mylaptop['id'] ?></td>
            <td><?= $mylaptop['model'] ?></td>
            <td><?= $mylaptop['color'] ?></td>
            <td><?= $mylaptop['gen'] ?></td>
            <td><?= $mylaptop['size'] ?></td>
            <td><?= $mylaptop['price'] ?></td>
            <td><img src="../../files/images/<?= $mylaptop['id'] ?>.webp" alt="<?= $mylaptop['model'] ?>" class="table-img"></td>
            <td><a href="http://localhost:8080/Core/controller/laptop.php?id=<?= base64_encode($mylaptop['id']) ?>">View</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<form action="">

</form>

</body>
</html>