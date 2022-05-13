<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card-header w-50 mx-auto border-0">
            <h1 class="display-3 text-center text-primary">Registration</h1>
        </div>
        <div class="card-body w-50 mx-auto">
            <form action="../actions/login.php" method="post">
                
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
                    <div class="col ">
                        <button type="submit" class="btn btn-primary w-100" >Login</button>
                        <p class="text-center small mt-3"> <a href="register.php">Create an Account</a> </p>
                    </div>
                </div>

            </form>
        </div>
    </div>
</body>
</html>