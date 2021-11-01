<?php 
include 'db.php';

if (isset($_POST['submit_item'])) {
    $item_name = $_POST['item_name'];
    $stmt = $conn->prepare('INSERT INTO items SET item_name=?');
    $stmt->bindValue(1, $item_name);
    $stmt->execute();
}

if (isset($_POST['edit_item'])) {
    $item_name = $_POST['item_name'];
    $stmt = $conn->prepare('UPDATE items SET item_name=? WHERE id=?');
    $stmt->bindValue(1, $item_name);
    $stmt->bindValue(2, $_GET['id']);
    $stmt->execute();
}

header('location:../index.php');