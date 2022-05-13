<?php
    require "fare.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Fare</title>

</head>
<body>
    <div class="container w-50 mx-auto">
    <h1 class="text-center mb-3">Fare Calculation</h1>
    <form action="" method="post">
        <div class="row mb-2">
            <div class="col-6">
                <label for="quantity">Kilometers Traveled</label>
                <input type="number" name="km" id="km" class="form-control" min="4" >
            </div>
            <div class="col-6">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" class="form-control" min="10" max="80" >
            </div>
        </div>
        <div class="text-center w-100">
        <button type="submit" name="submit" class="btn btn-primary w-100 mt-3 mb-3">Calculate</button>
        </div>

    </form>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $fare = new Fare;
            $age = $_POST['age'];
            $km = $_POST['km'];

            $fare->setValues($km,$age);
            
            echo "<div class='h1 text-center mt-3'>
                    Fare:<span class ='text-danger'>$"
                    .$fare->getPrice()."</span></div>";

        }
    ?>


<script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>