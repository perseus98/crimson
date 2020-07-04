<?php  include_once "./header.php" ?>
<?php check_founder(); ?>
<?php
$query = "delete from service where id = '$_REQUEST[id]'";
run_sql($query);
$fn = "upload/$_REQUEST[id].jpg";
if(file_exists($fn)){
    unlink($fn);
}

redirect("services.php?msg=2");
?>
<?php  include_once "./footer.php" ?>
