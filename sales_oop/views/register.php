<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
    <div class="container mt-5">

        <div class="card w-50 mx-auto border-0">
            <h1 class="display-3 text-center text-primary">Registration</h1>
        </div>

        <div class="card-body">
            
            <form action="../actions/register.php" method="post">
                
                <div class="row mb-3">
                    <div class="col">
                        <label for="first_name" class="form-control">First_name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="last_name" class="form-control">Last_name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>
                </div>
                
                <div class="row mb-3" >
                    <div class="col">
                        <label for="username" class="form-control">Username</label>
                        <input type="text" name="username" id="username" class="form-control" maxlength="20">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="password" class="form-control">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary" >Register</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>