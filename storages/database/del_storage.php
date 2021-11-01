<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("DELETE FROM item_storage WHERE storage_id=$id");
$result = $conn->query("DELETE FROM storages WHERE id=$id");

header('location:../index.php');
