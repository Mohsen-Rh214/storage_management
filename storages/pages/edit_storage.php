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

    <title>ویرایش انبار</title>
    <?php
    include '../database/db.php';
    include '../functions.php';

    $id = $_GET['id'];
    $sql ="SELECT * FROM storages WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    $storages = $stmt->fetch(PDO::FETCH_ASSOC);
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
            <div id="items" class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">ویرایش انبار</h3>
                    </div>
                    <form method="POST" action="../database/storages.php?id=<?php echo $storages['id']; ?>">
                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="storage_name" class="form-control" value="<?php echo $storages['storage_name'] ?>">
                                    <div class="row">
                                        <h4 style="display: inline-block"><span class="label label-default">شهر</span></h4>
                                        <select class="custom-select" name="city">
                                            <option value="<?php echo $storages['city'] ?>" selected>(<?php echo $storages['city'] ?>)</option>
                                            <option>تهران</option>
                                            <option>مشهد</option>
                                            <option>اصفهان</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" name="edit_storage" class="btn btn-success">ذخیره</button>
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