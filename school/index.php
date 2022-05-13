<?php
    require "school.php" ;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>School Activity</title>

</head>
<body>
<div class="container w-50 mx-auto">
    <h1 class="text-center mb-3">School Activity</h1>
    <form action="" method="post">
        <div class="row mb-2 w-100">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        </div>
        <div class="row mt-3 w-100">
            <label for="year_lev">Year Level</label>
            <select name="year_lev" id="year_lev" class="form-select mb-3" required>
                <option value="hidden">Select a your level</option>
                <option value="1">Year1</option>
                <option value="2">Year2</option>
                <option value="3">Year3</option>
                <option value="4">Year4</option>
            </select>
        
        </div>
        <div class="row mb-3 w-100">
            <label for="num">Number og Units</label>
            <input type="number" name="num">
        </div>


        <div class="row mt-3 w-100 text-center">
            
            <p>Lab Options</p>
            <div class="col-6">
                <label for="lab" class="btn btn-success" >With Lab</label>
                <input type="radio" name="lab" id="lab" value="with_lab" class="btn-check" ></input>
            </div>
            <div class="col-6">
                <label for="no_lab" class="btn btn-danger" >No Lab</label>
                <input type="radio" name="lab" id="no_lab" class="btn-check" value="no_lab" ></input>
            </div>

        </div>

        <!-- <div class="col-6">
                <label for="lab" class="btn btn-success">With Lab</label>
                <input type="radio"  name="lab"  value="with_lab" class="btn-check" ></input>
            </div>
            
            <div class="col-6">
                <label for="lab" class="btn btn-danger">No Lab</label>
                <input type="radio" name="lab"  class="btn-check" value="no_lab" ></input>
            </div> -->

        <div class="text-center w-100">
        <button type="submit" name="submit" class="btn btn-primary w-100 mt-3 mb-3">Calculate</button>
        </div>
    </form>

    <?php
    if(isset($_POST['submit'])){
            $calculate = new Calculate;

            $name = $_POST['name'];
            $level = $_POST['year_lev'];
            $num = $_POST['num'];
            $lab = $_POST['lab'];

            $calculate->setValues($name,$level,$num,$lab);


            echo "<div class='table table-responsive-lg'>
                    <table class='table table-hover mt-3'>
                    <tr>
                        <td>Name:</td>
                        <td> $calculate->name</td>
                    </tr>
                    <tr>
                        <td>Year Level:</td>
                        <td>$calculate->level </td>
                    </tr>
                    <tr>
                        <td>Number of Units:</td>
                        <td> $calculate->num </td>
                    </tr>
                    <tr>
                        <td>Lab Option:</td>
                        <td> $calculate->lab</td>
                    </tr>
                    <tr>
                        <td class='text-danger'>Total:</td>
                        <td class='text-danger'>".$calculate->getPrice()."</td>
                    </tr>


                    </table>
                </div>";
    }
    ?>
    




    </div>

<script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>