<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">Sign In</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post"></form>
                <!--USername-->
                <div class="form-outline">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control"
                        placeholder="Enter your username" required="required" />
                </div>
                <br>
                <!--Password-->
                <div class="form-outline">
                    <label for="pw" class="form-label">Password</label>
                    <input type="password" id="pw" name="pw" class="form-control" placeholder="Enter your password"
                        required="required" />
                </div>
                <!--Login button-->
                <div class="mt-4 pt-2">
                    <input type="submit" value="Login" class="bg-info py-2 px-3 border-0">
                    <p class="fw-bold mt-2 pt-1 mb-0">
                        Don't have an account? <a href="signup.php">Register</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>