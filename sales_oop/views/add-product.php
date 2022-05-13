<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<main class="card w-25 mx-auto my-5">
            <div class="card-header bg-primary text-white">
                <h2 class="card-title h4 mb-0">Add New Product</h2>
            </div>
            <div class="card-body">
                <form  action="../actions/add-product.php" method="POST">
                    <label for="product_name" class="form-label small">Product Name</label>
                    <input type="text" name="product_name" id="product_name" class="form-control mb-2" required autofocus>
​
                    <label for="price" class="form-label">Price</label>
                    <div class="input-group mb-2">
                        <div class="input-group-text">$</div>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
​
                    <label for="quantity" class="form-label small">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-select mb-5" min = "0">

                    <button type="submit" name="btn_add" class="btn btn-primary px-5 mb-2">Add</button>
                    <a href="#" class="btn btn-outline-secondary">Cancel</a>
                </form>
            </div>
        </main>
    
</body>
</html>