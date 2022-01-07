<?php
require "../database/database.php";
$db = new DB();
$productData = $db->insert('products',[
    'name' => $_POST['name'],
    'qty' => $_POST['qty'],
    'company' => $_POST['company'],
    'price' => $_POST['price'],
    'image' => $_POST['img'],
    'description' => $_POST['description']
]);
if($productData) {
    header("location:../index.php");
} else {
    echo "Sorry! Youre product not add.";
}
// echo "testing";
?>