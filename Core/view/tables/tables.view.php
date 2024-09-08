
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../view/style.css">

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
        <?php if (!empty($_SESSION['user']) and $_SESSION['admin']):?>
            <th>Admin</th>
        <?php endif; ?>
    </tr>
    <?php foreach ($laptops as $mylaptop): ?>
        <style>
            <?php $model = str_replace(' ','-',$mylaptop['model']); ?>
            .<?= $model ?>{
            <?php
                 if ($mylaptop["price"] < 150){
                    $color = 'blue';
                }
                 if ($mylaptop["price"] >= 150 and $mylaptop["price"] < 400){
                    $color = 'green';
                }
                 if ($mylaptop["price"] >= 400) {
                     $color = 'red';
                }
                 echo "color:$color;";

            ?>
            }
        </style>

        <tr>
            <td><?= $mylaptop['id'] ?></td>
            <td><?= $mylaptop['model'] ?></td>
            <td><?= $mylaptop['color'] ?></td>
            <td><?= $mylaptop['gen'] ?></td>
            <td><?= $mylaptop['size'] ?></td>
            <td class="<?= $model ?>">$<?= $mylaptop['price'] ?></td>
            <td><img src="../../../files/images/<?= $mylaptop['id'] ?>.webp" alt="<?= $mylaptop['model'] ?>" class="table-img"></td>
            <td><a href="/Core/controller/tables/table.php?id=<?= base64_encode($mylaptop['id']) ?>">View</a></td>
            <?php if (!empty($_SESSION['user']) and $_SESSION['admin']):?>
                <td>
                    <form method="post">
                        <input
                                id="admin"
                                name="admin"
                                rows="3"
                                placeholder="<?= $mylaptop['admin'] ?>"
                        ></input>
                        <button
                                type="submit"
                        >
                            Save
                        </button>
                    </form></td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
</table>
<div class="link ta-center margin-top-30">
    <a href="/core/controller/tables/Create.php" class="border-solid border-radius">Add a row</a>
</div>

</body>
</html>