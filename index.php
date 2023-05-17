<?php
ini_set('display_errors', 1);ini_set('display_startup_errors', 1);error_reporting(E_ALL);

    require_once __DIR__ . "/Database/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <h1 class="d-flex justify-content-center align-items-center">ANIMAL SHOP</h1>
    <div class="container">
        <div class="row col d-flex justify-content-center align-items-center">
            <?php foreach ($Products as $product) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $product->image; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->name; ?></h5>
                        <p class="card-text">Prezzo <?php echo $product->getPrice(); ?></p>
                        <p class="card-text">Categoria per: <?php echo $product->category->name ?></p>
                        <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                    </div>
                </div>
            <?php endforeach; ?>            
        </div>
    </div>
</body>
</html>

<style>
    * {
        border: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background: linear-gradient(217deg, rgba(255,0,0,.8), rgba(255,0,0,0) 70.71%),
                    linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
                    linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);
    }

    h1 {
        color: white;
        font-size: 5rem;
        height: 100px;
    }
    .container {
        height: calc(100vh - 108px);
        max-width: 1100px;
    }
    .card {
        margin: 10px;
        text-align: center;
    }

    img {
        width: 100px;
        height: 300px;
    }
</style>

