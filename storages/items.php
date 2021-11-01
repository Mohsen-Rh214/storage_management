<?php
include 'database/db.php';
try {
    $sql = "SELECT * FROM items GROUP BY (item_name) order by id asc";
    $result = $conn->query($sql);
    $items = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (\Throwable $th) {
    echo $th;
} ?>

<?php if ($result->rowCount() >= 1) { ?>
    <div class="list-group">
        <?php
        foreach ($items as $item) : ?>
            <li class="list-group-item">
                <span>
                    <?php echo $item['item_name'] ?>
                </span>
                <a class="btn btn-xs btn-danger" href="database/del_item.php?id=<?php echo $item['id'] ?>">
                    <span class="glyphicon glyphicon-remove"></span>
                </a>
                <a class="btn btn-xs btn-warning" href="pages/edit_item.php?id=<?php echo $item['id'] ?>">
                    <span class="glyphicon glyphicon-pencil"></span>
                </a>
            </li>
        <?php endforeach; ?>
    </div>
<?php } else { ?>
    <h3 style="text-align:center">اطلاعاتی وجود ندارد!</h3>
<?php } ?>