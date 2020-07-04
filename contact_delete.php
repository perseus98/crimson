<?php  include_once "./header.php" ?>
<?php check_founder(); ?>
<?php
$query = "delete from emp where id = '$_REQUEST[id]'";
run_sql($query);
redirect("manage.php");
?>
<?php  include_once "./footer.php" ?>
