<!DOCTYPE html>
<html dir="rtl" lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap-rtl.js"></script>
    
    <title>افزودن کالا به انبار</title>

    <?php
    include '../database/db.php';
    include '../functions.php';

    $sql = "SELECT * FROM items GROUP BY (item_name)";
    $items = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);

    $id = $_GET['id'];
    $sql = "SELECT   * from storages where id=$id";
    $storages = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
    ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <span class="navbar-brand navbar-right">مدیریت انبارها</span>
            </nav>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6"></div>

            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">افزودن کالا به انبار</h3>
                    </div>
                    <form method="POST" action="../database/item_storage.php?id=<?php echo $storages['id'] ?>">
                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="form-group">
                                <h4 style="display: inline-block; margin: 0px 0px 10px 15px"><span class="label label-default">انبار</span></h4>
                                <b><?php echo $storages['storage_name'] ?></b>
                                <br>
                                <h4 style="display: inline-block; margin: 0px 0px 10px 15px"><span class="label label-default">کالا</span></h4>
                                    <select class="custom-select" name="item_name">
                                        <?php foreach ($items as $item) : ?>
                                            <option><?php $item['id']; echo $item['item_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <input type="number" name="item_count" class="form-control" placeholder="تعداد را وارد کنید" required>
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" name="add_item_storage" class="btn btn-success">ثبت</button>
                            <button type="button" id="cancell" class="btn btn-danger">لغو</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-6"></div>
        </div>
    </div>

    <div class="panel-footer" id="footer">
        این صفحه توسط <strong>محسن ذاکری</strong> تهیه شده است.
    </div>
</body>