<?php

include('./includes/connect.php');

//getting prodcuts and displaying them

function getproducts()
{
    global $con;
    $con = mysqli_connect('localhost', 'root', '', 'mystore');

    $select_query = "select * from products order by rand() LIMIT 0,9";

    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keyword = $row['product_keyword'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];
        echo "
                    <div class='col-md-4 mb-2'>
                    <div class='card'>
                      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                      <h5 class='card-title'>$product_title</h5>
                      <p class='card-text'>$product_description</p>
                      <p class='card-text'>Price : Rs. $product_price</p>
                    
                      <a href='#' class='btn btn-info'>Add to cart</a>
                      <a href='#' class='btn btn-secondary'>View more</a>
                        </div>
                        </div>
                        </div>
                    ";

    }

}

function searchproducts()
{

    global $con;
    $con = mysqli_connect('localhost', 'root', '', 'mystore');

    if (isset($_GET['search_data'])) {
        $search_data = $_GET['search_data'];



        $search_query = "select * from products where product_keyword like '%$search_data%' ";

        $result_query = mysqli_query($con, $search_query);

        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_keyword = $row['product_keyword'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            echo "
    <div class='col-md-4 mb-2'>
    <div class='card'>
        <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
    <div class='card-body'>
        <h5 class='card-title'>$product_title</h5>
        <p class='card-text'>$product_description</p>
        <p class='card-text'>Price : Rs. $product_price</p>
        <a href='#' class='btn btn-info'>Add to cart</a>
        <a href='#' class='btn btn-secondary'>View more</a>
        </div>
        </div>
        </div>
    ";

        }
    }

}

?>