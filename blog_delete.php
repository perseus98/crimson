<?php  include_once "./header.php" ?>
<?php check_founder(); ?>
<?php
$query = "delete from blog where id = '$_REQUEST[id]'";
run_sql($query);
redirect("blog.php?msg=2");
?>
<?php  include_once "./footer.php" ?>
