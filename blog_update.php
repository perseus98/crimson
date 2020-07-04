<?php require_once './header.php';?>
<?php
$query = "select * from blog where id = '$_REQUEST[id]'";
$r = run_sql($query);
$orow = mysqli_fetch_array($r);
$err = "";
if(isset($_POST["title"])){
    if(empty($err)){
        //title , location ,description
        $query = "Update blog set title = '$_POST[title]', location = '$_POST[loc]', description = '$_POST[description]' 
        where id = $_REQUEST[id]";
        $r =run_sql($query);
        redirect("blog.php?msg=3");    
    }
}
?>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    <h1>UPDATE BLOG</h1>
    <hr>
    <form id="myform" method="post">
    <input required placeholder="Title Of Blog" class="form-control" value="<?= $orow["title"] ?>" type="text" name="title" /><br>
    <input required placeholder="Location" class="form-control" value="<?= $orow["location"] ?>" type="text" name="loc" /><br>
    <textarea required placeholder="Description" name="description" class="form-control"><?= $orow["description"] ?></textarea><br>
    <div class="row">
                    <!-- <div class="col-sm-6 col-sm-offset-2"><button type="submit" class="btn btn-light ">Submit</button></div>
                    <div class="col-sm-6 col-sm-offset-2"><a class="btn btn-light" href="service_add.php">Reset</a><br></div> -->
                    <div class="col-sm-2 "></div>
                    <div class="col-sm-3 "><button type="submit" class="btn btn-light btn-block">Submit</button></div>
                    <div class="col-sm-2 "></div>
                    <div class="col-sm-3 "><a class="btn btn-light btn-block" href="service_add.php">Reset</a><br></div>
                </div>
                       </form>
    </div>
</div>
<?php require_once './footer.php';?>
