<?php
include 'db.php';
try {
    $id = $_GET['id'];
    $stmt = $conn->query("DELETE FROM item_storage WHERE item_id=$id");
    $stmt = $conn->query("DELETE FROM items WHERE id=$id");
} catch (\Throwable $th) {
    throw $th;
}

header('location:../index.php');
