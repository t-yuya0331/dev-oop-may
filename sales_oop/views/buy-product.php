<?php
    session_start();

    include "../classes/user.php";

    $product = new User;

    $product_details = $product->getSpecificProduct($_GET['product_id']);

    $num = $_POST['num']

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Buy Product</title>
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

    <div class="container w-75 mt-5 text-center">

        <h1>Buy Details</h1>
        
        <article class="bg-light p-3">
            <div class="text-center mt-3">
                <div class="row">
                    <div class="col">
                        <p>Product Name:<span class="text-primary"><?= $product_details['product_name'] ?></span>
                        </p>

                        <p>
                            Price:<span class="text-primary">$<?= number_format($product_details['price'],2)?></span>
                        </p>

                        <p class="txt-primary">Quantity:<span class="text-primary"><?=$product_details['quantity'] ?></span>
                        </p>
                    </div>
                    <div class="col">
                        <form action="" method="post">
                            <label for="num" class="form-label">How many do you want?</label>

                            <input type="number" name="num" id="num" min="0">

                            <button class="btn btn-primary btn-sm" name="
                            btn_num" >Buy</button>

                        </form>

                    </div>

                </div>
            </div>
        </article>
                    <?php
                        // if(isset($_POST['btn_num'])){
                        //     echo "NO STOCK.";
                        // }
                    ?>
        
            
        
    </div>




<script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>