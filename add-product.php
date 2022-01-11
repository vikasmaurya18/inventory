<?php 

?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/add-product.css">
<?php include 'includes/navbar.php'; ?>
    <!-- Body Section -->
    <div class="body-bg">
        <div class="card mx-auto my-5 w-50 p-4 shadow">
            <form action="functions/add-product.php" method="POST" enctype="multipart/form-data">
                <h2 class="my-3">Add products to your website</h2>
                <div class="form-group">
                    <label for="">Image of the product</label>
                    <input type="file" class="form-control" name="img"/>
                </div>
                <div class="form-group">
                    <label for="">Name of the product</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="">Company of the product</label>
                    <input type="text" class="form-control" name="company"/>
                </div>
                <div class="form-group">
                    <label for="">Price of the product</label>
                    <input type="text" class="form-control" name="price"/>
                </div>
                <div class="form-group">
                    <label for="">Number of the product Available</label>
                    <input type="number" class="form-control" name="qty"/>
                </div>
                <div class="form-group">
                    <label for="">Description of product </label>
                    <textarea class="form-control"  rows="4" name="description"></textarea>
                </div>
                <button class="btn btn-primary" name="btn">Add Product</button>
            </form>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>