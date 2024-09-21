<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Staffs</title>
    <link rel="stylesheet" href="../resources/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 p-4 border border-2 rounded-2">
                <form action="" method="get">
                    <!-- Login Heading -->
                     <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <h2 class="text-center text-primary">LOGIN</h2>
                        </div>
                     </div>
                     <!-- username -->
                      <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="email" class="form-control" id="username" name="username" required>
                        </div>
                      </div>
                      <!-- password -->
                       <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <!-- login button and register -->
                         <div class="row">
                            <div class="col-12 col-md-2 mt-3">
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                            </div>
                            <div class="col-12 col-md-10 mt-3">
                                <small id="register" class="form-text text-muted">Don't have account?</small>
                                <a href="register.php" class="btn btn-outline-primary btn-block">Register</a>
                            </div>
                         </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>