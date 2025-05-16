<?php
// ====== DATABASE CONNECTION ======
$con = mysqli_connect("localhost", "root", "", "my_database");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// ====== INSERT PRODUCT LOGIC ======
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keywords = $_POST['product_keywords'];
    $product_price = $_POST['product_price'];

    // Image handling
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];
    $product_image_folder = './product_images/' . $product_image;

    // Validate and upload
    if ($product_title == '' || $product_description == '' || $product_keywords == '' || $product_price == '' || $product_image == '') {
        echo "<script>alert('Please fill all the fields and select an image')</script>";
    } else {
        move_uploaded_file($product_image_tmp, $product_image_folder);
        $insert_query = "INSERT INTO products (product_title, product_description, product_keywords, product_image, product_price, date)
                         VALUES ('$product_title', '$product_description', '$product_keywords', '$product_image', '$product_price', NOW())";
        $result = mysqli_query($con, $insert_query);
        if ($result) {
            echo "<script>alert('Product inserted successfully!')</script>";
        } else {
            echo "<script>alert('Failed to insert product.')</script>";
        }
    }
}
?>

<!-- ====== HTML FORM FOR PRODUCT INSERTION ====== -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="text-center mb-4 text-success">Insert New Product</h2>
    <form action="insert_products.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Product Title</label>
            <input type="text" name="product_title" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Product Description</label>
            <textarea name="product_description" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label>Product Keywords</label>
            <input type="text" name="product_keywords" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Product Image</label>
            <input type="file" name="product_image" class="form-control-file" required>
        </div>
        <div class="form-group">
            <label>Product Price (₹)</label>
            <input type="number" name="product_price" class="form-control" required>
        </div>
        <button type="submit" name="insert_product" class="btn btn-success btn-block">Insert Product</button>
    </form>
</div>
</body>
</html>
