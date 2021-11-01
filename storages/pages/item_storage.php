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

    <title>اطلاعات انبار</title>
    <?php
    include '../database/db.php';
    include '../functions.php';
    try {
        $storage_id = $_GET['id'];
        $sql = "SELECT items.item_name, item_storage.*
        FROM items INNER JOIN item_storage 
        on items.id = item_storage.item_id 
        WHERE storage_id=? GROUP BY item_name";
        $result = $conn->prepare($sql);
        $result->bindValue(1, $storage_id);
        $result->execute();
        $items = $result->fetchAll(PDO::FETCH_ASSOC);
    } catch (\Throwable $th) {
        echo $th;
    } ?>
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
            <!-- storage info start -->
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title">اطلاعات انبار</h3>
                    </div>

                    <?php if ($result->rowCount() >= 1) { ?>
                        <div class="panel-body">
                            <div class="list-group">
                                <?php foreach ($items as $item) : ?>
                                    <li class="list-group-item">
                                        <?php echo $item['item_name'] ?>
                                        <span class="badge">
                                            <?php echo $item['item_count'] ?>
                                        </span>
                                        <a class="btn btn-xs btn-danger" href="../database/del_item_storage.php?id=<?php echo $item['id'] ?>&storage_id=<?php echo $storage_id ?>">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </a>
                                        <a class="btn btn-xs btn-warning" href="edit_item_storage.php?id=<?php echo $item['id'] ?>">
                                            <span class="glyphicon glyphicon-pencil"></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php } else {  ?>
                        <h3 style="text-align:center">اطلاعاتی وجود ندارد!</h3>
                    <?php } ?>
                    
                    <div class="panel-footer">
                        <button type="button" onclick="location.href='add_item_storage.php?id=<?php echo $storage_id ?>'" class="btn btn-success navbar-btn">افزودن کالا به انبار</button>
                        <button type="button" id="cancell" class="btn btn-danger">خروج</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- storage info end -->
        <div class="col-lg-4 col-md-5 col-sm-6"></div>
    </div>

    <div class="panel-footer" id="footer">
        این صفحه توسط <strong>محسن ذاکری</strong> تهیه شده است.
    </div>

</body>