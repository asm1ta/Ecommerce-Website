<!DOCTYPE html>
<html>

<head>
    <title>SignUp</title>
    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid my-3">
        <h2 class="text-center">Sign Up</h2>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-12 col-xl-6">
                <form action="" method="post" enctype="multipart/form-data"></form>
                <!--USerid-->
                <div class="form-outline">
                    <label for="userid" class="form-label">User Id</label>
                    <input type="text" id="userid" name="userid" class="form-control" placeholder="Enter your userid"
                        required="required" />
                </div>
                <br>
                <!--Username-->
                <div class="form-outline">
                    <label for="username" class="form-label">UserName</label>
                    <input type="text" id="username" name="username" class="form-control"
                        placeholder="Enter your username" required="required" />
                </div>
                <br>
                <!--Password-->
                <div class="form-outline">
                    <label for="pw" class="form-label">Password</label>
                    <input type="password" id="pw" name="pw" class="form-control"
                        title="Must contain at least 8 or more characters" placeholder="Enter your password"
                        required="required" />
                </div>
                <br>
                <!--confirmPW-->
                <div class="form-outline">
                    <label for="confpw" class="form-label">Confirm Password</label>
                    <input type="password" id="confpw" name="confpw" class="form-control"
                        placeholder="Confirm your password" required="required" />
                </div>
                <br>
                <!--email-->
                <div class="form-outline">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                        required="required" />
                </div>
                <br>
                <!--image-->
                <div class="form-outline">
                    <label for="img" class="form-label">Image</label>
                    <input type="file" id="img" name="img" class="form-control" placeholder="Enter your password"
                        required="required" />
                </div>
                <br>
                <!--phnum-->
                <div class="form-outline">
                    <label for="num" class="form-label">Contact</label>
                    <input type="number" id="num" name="num" class="form-control" placeholder="Enter your number"
                        required="required" />
                </div>
                <br>
                <!--address-->
                <div class="form-outline">
                    <label for="add" class="form-label">Address</label>
                    <input type="text" id="add" name="add" class="form-control" placeholder="Enter your address"
                        required="required" />
                </div>
                <!--Submit button-->
                <div class="mt-4 pt-2">
                    <input type="submit" value="Register" class="bg-info py-2 px-3 border-0">
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>