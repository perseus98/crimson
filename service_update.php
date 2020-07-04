<?php require_once './header.php';?>
<?php
$query = "select * from service where id = '$_REQUEST[id]'";
$r = run_sql($query);
$orow = mysqli_fetch_array($r);

$err = "";
if(isset($_POST["name"])){
    if(isset($_FILES["at1"]["name"])){
        $fname = $_FILES["at1"]["name"];
        if(substr($fname, strlen($fname)-4)!=".jpg"){
            $err = "Only jpg formate is allowed!"; 
        }    
    }
    if(empty($err)){
        $query = "Update `service` set `name` = '$_POST[name]', `price` = $_POST[price], 
        `pno` = '$_POST[phone_no]', `description` = '$_POST[description]' 
        where id = $_REQUEST[id]";
        $r =run_sql($query);    
        $lid = $_REQUEST["id"];
        if (isset($_FILES["at1"]) && empty($_FILES["at1"]["name"]) != true) {
            move_uploaded_file($_FILES["at1"]["tmp_name"], "upload/$lid.jpg");
        }
        redirect("services.php?msg=3");    
    }
}
?>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    <h1>Update Service</h1>
    <hr>
    <form id="myform" enctype="multipart/form-data" method="post">
                <input value="<?= $orow[name]?>" required placeholder="Name" class="form-control" type="text" name="name" /><br>
                <input value="<?= $orow[price]?>" required placeholder="Starting Price" class="form-control" type="number" name="price" /><br>
                <input value="<?= $orow[phone_no]?>" required placeholder="Contact No"  pattern="0?[7-9]{1}\d{9}"  class="form-control" type="tel" name="phone_no" id="phone_no"/><br>
                <textarea required placeholder="Description" name="description" class="form-control"><?= $orow['description']?></textarea><br>
                <?php
                    $fn = "upload/$orow[id].jpg";
                    if(file_exists($fn)){
                        echo "<img class='img-fluid' src='upload/$orow[id].jpg' />";
                    }
                ?>

                <input type="file" name="at1" id="at1" class="form-control"/><br>
                <p class='myerror'><?= $err ?></p>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
                <a class="btn btn-danger btn-block" href="register.php">Reset</a>
                </form>
    </div>
</div>
<?php require_once './footer.php';?>
