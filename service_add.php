<?php require_once './header.php';?>
<?php
$err = "";
if(isset($_POST["name"])){
    if(isset($_FILES["at1"]["name"])){
        $fname = $_FILES["at1"]["name"];
        if(substr($fname, strlen($fname)-4)!=".jpg"){
            $err = "Only jpg formate is allowed!"; 
        }    
    }
    if(empty($err)){
        $query = "INSERT INTO service (name, price, pno, description) 
        VALUES ('$_POST[name]', $_POST[price],'$_POST[phone_no]', '$_POST[description]');";
        $r =run_sql($query);    
        $lid = mysqli_insert_id($con);
        if (isset($_FILES["at1"]) && empty($_FILES["at1"]["name"]) != true) {
            move_uploaded_file($_FILES["at1"]["tmp_name"], "upload/$lid.jpg");
        }
        redirect("services.php?msg=1");    
    }
}
?>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    <h1>New Service</h1>
    <hr>
    <form id="myform" enctype="multipart/form-data" method="post">
                <input required placeholder="Name" class="form-control" value="<?= $_POST["name"] ?>" type="text" name="name" /><br>
                <input required placeholder="Starting Price" class="form-control" value="<?= $_POST["price"] ?>" type="number" name="price" /><br>
                <input required placeholder="Contact No"  pattern="0?[7-9]{1}\d{9}" value="<?= $_POST["phone_no"] ?>" class="form-control" type="tel" name="phone_no" id="phone_no"/><br>
                <textarea required placeholder="Description" name="description" class="form-control"><?= $_POST["description"] ?></textarea><br>
                <input type="file" name="at1" id="at1" class="form-control"/><br>
                <p class='myerror'><?= $err ?></p>
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
