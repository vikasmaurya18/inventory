<?php
require "../database/database.php";
$db = new DB();
// echo '<pre>';
// print_r($_FILES['img']);
$productData = $db->insert('products',[
    'name' => $_POST['name'],
    'qty' => $_POST['qty'],
    'company' => $_POST['company'],
    'price' => $_POST['price'],
    'image' => $_FILES['img']['name'],
    'description' => $_POST['description']
]);
if($productData) {
    $target_dir = '../uploads/';
    $target_file = $target_dir . $_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'], $target_file);
    header("location:../index.php");
} else {
    echo "Sorry! Youre product not add.";
}
// echo "testing";
?>