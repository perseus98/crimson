<?php require_once './header.php';?>
<h1>Services</h1>
<hr>
<?php
$msg = "";
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        $msg = "An entry has been added  sussessfully";
    }
    if ($_REQUEST["msg"] == 2) {
        $msg = "An entry has been deleted  sussessfully";
    }
    if ($_REQUEST["msg"] == 3) {
        $msg = "An entry has been updated  sussessfully";
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
    echo "<a class='btn btn-light' href='service_add.php'>Add New Service</a>";
}
$query = "select * from service ";
$r = run_sql($query);
echo "<div class='row'>";
while ($row = mysqli_fetch_array($r)) {
    ?>
<div class="col-sm-4 my-3 p-4">
    <div class="card  h-100">
        <img class="card-img-top" src="upload/<?=$row["id"]?>.jpg">
        <div class="card-body text-dark">
            <h4 class="card-title text-left"><?=$row["name"]?></h4>
            <p class="card-text"><?=$row["price"]?></p>
            <p class="card-text"><a class="btn btn-primary" href="service_detail.php?id=<?=$row[id]?>">Read More</a></p>
        </div>
    </div>
</div>
<?php
}
echo "</div>";
?>
<?php require_once './footer.php';?>
