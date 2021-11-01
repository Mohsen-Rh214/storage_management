<?php
include 'db.php';

$storage_id = $_GET['storage_id'];
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM item_storage WHERE id = $id and storage_id = $storage_id");
$stmt->execute();

header("location:../pages/item_storage.php?id=$storage_id");

