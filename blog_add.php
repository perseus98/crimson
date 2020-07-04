<?php require_once './header.php';?>
<?php
if(isset($_POST["title"])){
    //title , location ,description
        $query = "INSERT INTO blog (title , location ,description) 
        VALUES ('$_POST[title]', '$_POST[loc]','$_POST[description]');";
        $r =run_sql($query);    
        redirect("blog.php?msg=1");    
}
?>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    <h1>NEW BLOG</h1>
    <hr>
    <form id="myform" method="post">
                <input required placeholder="Title Of Blog" class="form-control" value="<?= $_POST["title"] ?>" type="text" name="title" /><br>
                <input required placeholder="Location" class="form-control" value="<?= $_POST["price"] ?>" type="text" name="loc" /><br>
                <textarea required placeholder="Description" name="description" class="form-control"><?= $_POST["description"] ?></textarea><br>
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
