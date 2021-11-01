<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap-rtl.js"></script>

    <title>مدیریت انبارها</title>

    <?php
    include 'functions.php';
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
            <div class="modal-body">
                <div class="col-lg-2 col-md-1"></div> <!-- right space -->
                <!-- items list start -->
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">لیست کالاها</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            include 'items.php'
                            ?>
                        </div>
                        <div class="panel-footer">
                            <button type="button" id="insert_item" class="btn btn-success navbar-btn">+ ثبت کالای جدید</button>
                        </div>
                    </div>
                </div>
                <!-- items list end -->
                <!-- storage list start -->
                <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">لیست انبارها</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                            include "storages.php"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <button type="button" id="insert_storage" class="btn btn-success navbar-btn">+ ثبت انبار جدید</button>
                        </div>
                    </div>
                </div>
                <!-- storage list end -->
                <div class="col-lg-2 col-md-1"></div> <!-- left space -->
            </div>
        </div><!-- row end -->
    </div><!-- container ends -->

    <div class="panel-footer" id="footer">
        این صفحه توسط <strong>محسن ذاکری</strong> تهیه شده است.
    </div>
</body>

</html>