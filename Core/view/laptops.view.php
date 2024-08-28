<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list of best laptops</title>
    <style>
        .ta-center{
            text-align: center;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
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
<!--        <th>Image</th>-->
        <th>Link</th>
    </tr>
    <?php foreach ($laptops as $mylaptop): ?>

        <tr>
        <?php foreach ($mylaptop as $x) : ?>
            <td><?= "$x" ?></td>
        <?php endforeach; ?>
    <?php foreach ($links as $mylink):?>
            <td><a href="http://localhost:8080/Core/controller/laptop.php?id=<?= $mylink ?>">View</a></td>
    <?php endforeach; ?>
        </tr>

    <?php endforeach; ?>

</table>

</body>
</html>