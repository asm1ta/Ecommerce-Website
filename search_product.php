<?php

include('./includes/connect.php');
include('functions/common_function.php');

?>


<!DOCTYPE html>
<html>

<head>
    <!-- css link -->

    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @media (max-width: 768px) {
            .card-img-top {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                LOGIN
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="signup.php">USERS</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="admin/index.php">ADMIN</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-sharp fa-regular fa-cart-circle-plus"></i>
                                Cart</a>
                        </li>

                    </ul>
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            name="search_data">

                        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_value">


                    </form>


                </div>
            </div>
        </nav>
    </div>

    <div class="bg-light">
        <h2 class="text-center">MISSIONPROJECT</h2>
        <p class="text-center">India's best selling online store</p>
    </div>



    <div class="row px-3">
        <div class="col md-10">
            <!-- display prodcuts -->
            <div class="row">
                <!-- fetch products -->
                <?php
                searchproducts();
                ?>

            </div>
        </div>
    </div>


    <footer class="bg-dark text-white py-4">
        <div class="container">
            <p class="text-center">&copy; 2024 Your Company Name. All rights reserved.</p>
        </div>
    </footer>
    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>