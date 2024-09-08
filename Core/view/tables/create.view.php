<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../view/style.css">
    <title>Add a laptop</title>
</head>
<body>
    <div class="ta-center border-radius border-solid">
        <a href="/core/controller/tables/tables.php">Back to tables!</a>
        <form method="POST" action="">
            <div>
                <label
                        for="body"
                >Model of laptop</label>

                <div>
                    <input
                            id="model"
                            name="model"
                            rows="3"
                            placeholder="Model of laptop"
                    ></input>
                    <input
                            id="color"
                            name="color"
                            rows="3"
                            placeholder="Color of laptop"
                    ></input>
                    <input
                            id="gen"
                            name="gen"
                            rows="3"
                            placeholder="Gen of laptop"
                    ></input>
                    <input
                            id="size"
                            name="size"
                            rows="3"
                            placeholder="Size of laptop"
                    ></input>
                    <input
                            id="price"
                            name="price"
                            rows="3"
                            placeholder="Price of laptop"
                    ></input>
                    <br>
                    <input
                            id="information"
                            name="information"
                            rows="3"
                            placeholder="Information of laptop"
                    ></input>
                </div>
            </div>
            <button
                    type="submit"
            >
                Save
            </button>
        </form>
    </div>
</body>
</html>
