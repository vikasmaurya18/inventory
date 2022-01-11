<?php 
require "database/database.php";
$db = new DB();
$product = $db->fetch('products'); 
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/index.css">
<?php include 'includes/navbar.php'; ?>
    <!-- Body Section -->
    <div class="body-bg m-2">
        <div class="heading my-3 px-4 border border-grey">
            <h3 class="px-1 py-3">Deals of the Day</h3>
            <div class="row">
            <?php foreach($product as $key => $value) {  ?>
                <div class="col-md-2 pb-2">
                    <div class="card" style="width: 200px;">
                        <span id="prod-avail"><?php echo $value['qty']; ?></span>
                        <img class="card-img-top" src="uploads/<?php echo $value['image']; ?>" >
                        <div class="card-body">
                        <h5 class="text-center" ><?php echo $value['price']; ?></h5>
                        <a href="#" class="btn btn-primary btn-block" onclick="sell()">Sell</a>
                        </div>
                    </div>
                </div>
               <?php } ?> 
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>