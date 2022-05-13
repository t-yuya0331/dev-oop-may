<?php
    require "Employee.php";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Employee Activity</title>
</head>
<body>
<div class="container w-100 mx-auto ">
        <form action="" method="post">
            <h3 class="display-4 text-center">Employee Activity</h3>
            <div class="row mb-2">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder=" Name" required>
            </div>
            
            <div class="row">
                    <label for="status">Civil Status</label>
                <select name="status" id="status" class="form-select mb-3" required>
                    <option value="hidden">Select a your Civil Status</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="position">Position</label>
                <select name="position" id="position" class="form-select mb-3" required>
                    <option value="hidden">Select a your Position</option>
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                </select>
                </div>
                <div class="col-6">
                    <label for="em_status">Employment Status</label>
                <select name="em_status" id="em_status" class="form-select mb-3" required>
                    <option value="hidden">Select a your Employment Status</option>
                    <option value="contractual">Contractual</option>
                    <option value="probationary">Probationary</option>
                    <option value="regular">Regular</option>
                </select>
                </div>
            </div>

            <div class="row mb-2">
                    <label for="num">Number of Hours Worked</label>
                    <input type="number" name="num" id="num" class="form-control" placeholder="Number of Hours Worked " required>
            </div>
            

            <button type="submit" name="submit" class="btn btn-primary w-100 ">Submit</button>

        </form>

    </div>

    <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $status = $_POST['status'];
            $position = $_POST['position'];
            $em_status = $_POST['em_status'];
            $num = $_POST['num'];
            
            $income = new Income($name,$status,$position,$em_status,$num,$health,$get_pay,$total_income);
    ?>
                <table class="table table-bordered table-striped w-50 mx-auto">
                    <tr>
                        <th>Name:</th>
                        <td><?= $name;?></td>
                    </tr>
                    <tr>
                        <th>Civil Status:</th>
                        <td><?= $status;?></td>
                    </tr>
                    <tr>
                        <th>Position:</th>
                        <td><?= $position;?></td>
                    </tr>
                    <tr>
                        <th>Employment Status:</th>
                        <td><?= $em_status;?></td>
                    </tr>
                    <tr>
                        <th class="bg-warning fw-bold">Total Hours Worked:</th>
                        <td class="bg-warning fw-bold"><?= $num."Hours"; ?></td>
                    </tr>
                    <tr>
                        <th>Regular Pay:</th>
                        <td><?= "$".number_format($income->regularPay(),2);?></td>
                    </tr>
                    <tr>
                        <th>Overtime Hours:</th>
                        <td><?= $income->getOt()."  Hours";?></td>
                    </tr>
                    <tr>
                        <th>Overtime Pay:</th>
                        <td><?= "$" .number_format($income->getOp(),2);?></td>
                    </tr>
                    <tr>
                        <th>Gross Income:</th>
                        <td><?= "$".number_format($income->grossIncome(),2);?></td>
                    </tr>
                    <tr>
                        <th class="bg-danger text-white">Tax Deduction:</th>
                        <td class="bg-danger text-white"><?= "$".number_format($income->getTax(),2);?></td>
                    </tr>
                    <tr>
                        <th class="bg-primary text-white">Healthcare Deduction:</th>
                        <td class="bg-primary text-white"><?= "$".number_format($income->getHealth(),2)?></td>
                        <!-- ternary operator ~~ (expression/condition) ? pass : fail; -->
                    </tr>
                    <tr>
                        <th class="h5 bg-black fw-bold text-white">Net Income:</th>
                        <td class="h5  bg-black fw-bold text-white"><?= "$".number_format($income->netIncome(),2)?></td>
                    </tr>
                </table>
        <?php
            }
        ?>
        
    
    





<script src="https://kit.fontawesome.com/e0ff3ed5fc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>