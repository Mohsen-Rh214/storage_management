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

    $id = $_GET['id'];
    $sql = "SELECT   * from item_storage where id=$id";
    $row = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);

    $item_id = $row['item_id'];
    $storage_id = $row['storage_id'];

    $sql = "SELECT * FROM items where id=$item_id";
    $items = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
    
    $sql = "SELECT * FROM storages where id=$storage_id";
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
                        <h3 class="panel-title">ویرایش اطلاعات انبار</h3>
                    </div>
                    <form method="POST" action="../database/item_storage.php?id=<?php echo $storage_id ?>">
                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <h4 style="display: inline-block; margin: 0px 0px 10px 15px"><span class="label label-default">انبار</span></h4>
                                    <b name="item_name"><?php echo $storages['storage_name'] ?></b>
                                    <br>
                                    <h4 style="display: inline-block; margin: 0px 0px 10px 15px"><span class="label label-default">کالا</span></h4>
                                    <select name="item_name">
                                    <option><?php echo $items['item_name'] ?></option>
                                    </select>
                                    
                                    <br>
                                    <input type="number" name="item_count" class="form-control" value="<?php echo $row['item_count'] ?>">
                                </div>
                            </div>
                        </div>

                        <div class="panel-footer">
                            <button type="submit" name="edit_item_storage" class="btn btn-success">ثبت</button>
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