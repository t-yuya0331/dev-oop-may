<?php
    session_start();

    include "../classes/user.php";

    $product = new User;

    $products_details = $product->getSpecificProduct($_GET['product_id']);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Product</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="dashboard.php" class="navbar-brand">
                <h5 class="fw-bold ms-3">Sales</h5>
            </a>
            
            <div class="ms-auto me-3">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link text-primary"><?= $_SESSION['username']?></a></li>

                    <li class="nav-item"><a href="../actions/logout.php" class="nav-link"><i class="fa-solid fa-user-xmark text-primary"></i></a></li>
                </ul>
            </div>
        </nav>

    <div class="container mt-5">
        <div class="card w-50 mx-auto border-0">
            <h1 class="display-4 fw-bold text-center">Edit Product</h1>
        </div>
        <div class="card-body w-50 mx-auto">
            <form action="../actions/edit-product.php" method="post">
                <input type="hidden" name="product_id" value="<?= $products_details['id']?>">


            <div class="row mb-3">
                <div class="col">
                    <label for="product_name" class="form-label">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $products_details['product_name']?>">
                </div>

            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="<?= $products_details['price']?>">
                </div>
            </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $products_details['quantity']?>">
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary mb-2">Update</button>
                    <a href="dashboard.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>

        </div>
    </div>




<script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>