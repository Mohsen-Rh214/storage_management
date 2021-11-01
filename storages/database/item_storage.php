<?php
include 'db.php';

$storage_id = $_GET['id'];
$item_count = $_POST['item_count'];
$item_name = $_POST['item_name'];

echo 'this is storage id :   ', $storage_id , '<br>';
echo 'this is item count :   ', $item_count , '<br>';
echo 'this is item name :   ', $item_name , '<br>';

$sql1 = "SELECT * from items where item_name=?";
$stmt = $conn->prepare($sql1);
$stmt->bindValue(1, $item_name);
$stmt->execute();
$items = $stmt->fetch(PDO::FETCH_ASSOC);
$item_id = $items['id'];

echo 'this is item id :   ', $item_id;

if (isset($_POST['add_item_storage'])) {
    $sql2 = "INSERT INTO item_storage set item_count=?, item_id=$item_id, storage_id=$storage_id";
    $stmt = $conn->prepare($sql2);
    $stmt->bindValue(1, $item_count);
    $stmt->execute();
}

if (isset($_POST['edit_item_storage'])) {
    $sql2 = "UPDATE item_storage set item_count=? where item_id=$item_id and storage_id=$storage_id";
    $stmt = $conn->prepare($sql2);
    $stmt->bindValue(1, $item_count);
    $stmt->execute();
}

header("location:../pages/item_storage.php?id=$storage_id");
