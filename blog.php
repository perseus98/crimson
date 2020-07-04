<?php include_once "./header.php"?>
<?php check_login();?>
<h1>BLOG</h1>
<hr>
<?php
$msg = "";
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        $msg = "New blog entry has been added  sussessfully";
    }
    if ($_REQUEST["msg"] == 2) {
        $msg = "A blog entry has been deleted  sussessfully";
    }
    if ($_REQUEST["msg"] == 3) {
        $msg = "A blog  has been updated  sussessfully";
    }
}
?>
<?php if (!empty($msg)) {?>
    <div class="alert alert-light alert-dismissible fade show text-dark" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Notification :</strong> <?=$msg?>
    </div>
<?php }?>
<?php
if (is_founder()) {
    echo "<a class='btn btn-light' href='blog_add.php'>Add New blog</a>";
}
$query = "select * from blog ";
if (isset($_REQUEST["si"])) {
    $query = $query . " where topic like '%$_REQUEST[si]%'";
}
$r = run_sql($query);
while ($row = mysqli_fetch_array($r)) {
    ?>
    <div class="row text-dark">
    <div class="col-sm-8 offset-sm-2"><ul class='list-group'>
            <li class='list-group-item text-dark'> TITLE :: <?=$row['title']?> </li>
            <li class='list-group-item text-dark'> LOCATION :: <?=$row['location']?></li>
            <li class='list-group-item text-dark'>DESCRIPTION :: <?=$row['description']?></li>
            <?php if (is_founder()) {?>
<li class='list-group-item'><a class='btn btn-dark btn-sm' href='blog_update.php?id=<?=$row["id"]?>'>EDIT</a>
<a class='btn btn-dark btn-sm' href='blog_delete.php?id=<?=$row["id"]?>'>DELETE</a></<a></li>
            <?php }?>

        </ul>
        </div>
</div><br>
<?php
}
?>
<?php include_once "./footer.php"?>