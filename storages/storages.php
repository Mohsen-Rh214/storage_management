<?php
include 'database/db.php';
try {
    $sql = "SELECT * FROM storages GROUP BY (storage_name) order by id asc";
    $result = $conn->query($sql);
    $storages = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (\Throwable $th) {
    echo $th;
}

if ($result->rowCount() >= 1) { ?>
    <div class="list-group">
        <?php foreach ($storages as $storage) : ?>
            <li class="list-group-item list-group-item-action">
                <?php echo $storage['storage_name'] ?>
                <a class="btn btn-xs btn-primary" href='pages/item_storage.php?id=<?php echo $storage['id'] ?>'>
                    <span class="glyphicon glyphicon-folder-open" dir="ltr"></span>
                </a>
                <a class="btn btn-xs btn-danger" href="database/del_storage.php?id=<?php echo $storage['id'] ?>">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
                <a class="btn btn-xs btn-warning" href="pages/edit_storage.php?id=<?php echo $storage['id'] ?>">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </li>
        <?php endforeach ?>
    </div>
<?php } else { ?>
    <h3 style="text-align:center">اطلاعاتی وجود ندارد!</h3>
<?php } ?>