<?php
if (isset($_GET['edit_products'])) {
    $edit_id = $_GET['edit_products'];
    $get_data = "SELECT * FROM products WHERE product_id=$edit_id";
    $result = mysqli_query($con, $get_data);
    $row = mysqli_fetch_assoc($result);
    $product_title = $row['product_title'];
    $product_description = $row['product_description'];
    $product_keywords = $row['product_keywords'];
    $product_image1 = $row['product_image1'];
    $product_image2 = $row['product_image2'];
    $product_image3 = $row['product_image3'];
    $product_price = $row['product_price'];
}
?>
<div class="container mt-5">
    <h1 class="text-center">Edit Products</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" id="product_title" value="<?php echo $product_title ?>" name="product_title"
                class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_desc" class="form-label">Product Description</label>
            <input type="text" id="product_desc" value="<?php echo $product_description ?>" name="product_desc"
                class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" id="product_keywords" value="<?php echo $product_keywords ?>" name="product_keywords"
                class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image1" class="form-label">Product Image-1</label>
            <div class="d-flex">
                <input type="file" id="product_image1" name="product_image1" class="form-control w-90 m-auto">
                <img src="./product_images/<?php echo $product_image1 ?>" alt="" class="product_img" width="100">
            </div>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image2" class="form-label">Product Image-2</label>
            <div class="d-flex">
                <input type="file" id="product_image2" name="product_image2" class="form-control w-90 m-auto">
                <img src="./product_images/<?php echo $product_image2 ?>" alt="" class="product_img" width="100">
            </div>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image3" class="form-label">Product Image-3</label>
            <div class="d-flex">
                <input type="file" id="product_image3" name="product_image3" class="form-control w-90 m-auto">
                <img src="./product_images/<?php echo $product_image3 ?>" alt="" class="product_img" width="100">
            </div>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" id="product_price" value="<?php echo $product_price ?>" name="product_price"
                class="form-control" required>
        </div>

        <div class="text-center">
            <input type="submit" name="edit_product" value="Update Product" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>

<?php
if (isset($_POST['edit_product'])) {
    $product_title = $_POST['product_title'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_price = $_POST['product_price'];

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Move images to folder
    move_uploaded_file($temp_image1, "./product_images/$product_image1");
    move_uploaded_file($temp_image2, "./product_images/$product_image2");
    move_uploaded_file($temp_image3, "./product_images/$product_image3");

    // Update query
    $update_product = "UPDATE products SET 
        product_title='$product_title', 
        product_description='$product_desc',
        product_keywords='$product_keywords', 
        product_image1='$product_image1', 
        product_image2='$product_image2',
        product_image3='$product_image3', 
        product_price='$product_price', 
        date=NOW() 
        WHERE product_id=$edit_id";

    $result_update = mysqli_query($con, $update_product);
    if ($result_update) {
        echo "<script>alert('Product updated successfully')</script>";
        echo "<script>window.open('./view_product.php','_self')</script>";
    }
}
?>