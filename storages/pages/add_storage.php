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

    <title>افزودن انبار</title>
<?php 
include '../functions.php';
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
                        <h3 class="panel-title">افزودن انبار</h3>
                    </div>
                    <form method="POST" action="../database/storages.php">
                        <div class="panel-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" name="storage_name" class="form-control" placeholder="نام انبار را وارد کنید" required>
                                    <div class="row">
                                        <h4 style="display: inline-block"><span class="label label-default">شهر</span></h4>
                                        <select class="custom-select" name="city">
                                            <option selected>تهران</option>
                                            <option>مشهد</option>
                                            <option>اصفهان</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" name="submit_storage" class="btn btn-success">ثبت</button>
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