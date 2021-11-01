<?php
include 'db.php';

if (isset($_POST['submit_storage'])) {
    $storage_name = $_POST['storage_name'];
    $city = $_POST['city'];
    $stmt = $conn->prepare('INSERT INTO storages SET storage_name=? , city=?');
    $stmt->bindValue(1, $storage_name);
    $stmt->bindValue(2, $city);
    $stmt->execute();
} 

if (isset($_POST['edit_storage'])) {
    $storage_name = $_POST['storage_name'];
    $city = $_POST['city'];
    $stmt = $conn->prepare('UPDATE storages SET storage_name=? , city=? WHERE id=?');
    $stmt->bindValue(1, $storage_name);
    $stmt->bindValue(2, $city);
    $stmt->bindValue(3, $_GET['id']);
    $stmt->execute();
}
header('location:../index.php');
