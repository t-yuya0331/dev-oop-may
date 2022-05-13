<?php
    session_start();

    include "../classes/user.php";

    $product = new User;

    $product_list = $product->getProducts();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="dashboard.php" class="navbar-brand">
            <h5 class="fw-bold ms-3">Sales</h5>
        </a>

        <div class="ms-auto me-3">
            <ul class="navbar-nav">
                <li class="nav-item "><a href="" class="nav-link text-primary"><?= $_SESSION['username']?></a></li>
                
                <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-primary"> <i class="fa-solid fa-user-xmark"></i> </a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col">
                <a href="add-product.php" class="btn btn-secondary ">Add Products</a>
            </div>
        </div>
        
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
            </thead>

            <tbody>
                <?php
                    foreach($product_list as $product){
                ?>
                    <tr>
                        <td><?= $product['id']?></td>
                        <td><?= $product['product_name']?></td>
                        <td><?= "$".number_format($product['price'],2)?></td>
                        <td><?= $product['quantity']?></td>
                        <td>
                            <a href="edit-product.php?product_id=<?= $product['id']?>" class="btn btn-warning btn-sm" title="edit" > <i class="fas fa-pencil-alt"></i> </a>
                            
                            <a href="../actions/delete-product.php?product_id=<?= $product['id']?>" class="btn btn-danger btn-sm" title="delete"> <i class="fas fa-trash-alt"></i> </a>

                            <a href="buy-product.php?product_id=<?= $product['id']?>" class="btn btn-warning btn-sm">Buy</a>

                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>

            </table>
        
    </div>

    <script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>