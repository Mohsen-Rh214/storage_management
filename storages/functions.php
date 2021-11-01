<!-- نمایش فرم ها -->
<script>
    $(function() {
        $("#insert_storage").click(function() {
            location.href = "pages/add_storage.php";
        })
    })
    $(function() {
        $("#insert_item").click(function() {
            location.href = "pages/add_item.php";
        })
    })
    $(function() {
        $("#insert_item_storage").click(function() {
            location.href = "add_item_storage.php";
        })
    })
    $(function() {
        $("#cancell").click(function() {
            location.href = "../index.php";
        })
    })
</script>
