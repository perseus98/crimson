<?php require_once './header.php';?>
<?php
$err = "";
if(isset($_POST["name"])){
    if(isset($_FILES["resume"]["name"])){
        $fname = $_FILES["resume"]["name"];
        if(substr($fname, strlen($fname)-4)!="docx"){
            $err = "Only docx formate is allowed!"; 
        }    
    }
    if(empty($err)){
        //name   addr  email pass pno
        $query = "INSERT INTO emp (         name     ,        addr      ,      email    ,       pass        ,     pno) 
                            VALUES (  '$_POST[name]' , '$_POST[address]','$_POST[email]', '$_POST[password]','$_POST[phone_no]');";
        $r =run_sql($query);    
        $lid = mysqli_insert_id($con);
        if (isset($_FILES["resume"]) && empty($_FILES["resume"]["name"]) != true) {
            move_uploaded_file($_FILES["resume"]["tmp_name"], "upload/$lid.docx");
        }
        redirect("home.php?msg=1");    
    }
}
?>
<div class="row">
    <div class="col-sm-6 offset-sm-3">
    <h1 class="text-center">Join Us</h1>
    <hr>
    <form id="myform" enctype="multipart/form-data" method="post">
    <!-- id  INT NOT NULL AUTO_INCREMENT ,
        VARCHAR(15) , -->
                <input required placeholder="Name*" class="form-control" value="<?= $_POST["name"] ?>" type="text" name="name" /><br>
                <input required placeholder="EMail*" class="form-control" value="<?= $_POST["email"] ?>" type="email" name="email" /><br>
                <input required placeholder="Password*" class="form-control" value="<?= $_POST["pass"] ?>" type="password" name="password" /><br>                
                <input required placeholder="Contact No*"  pattern="0?[6-9]{1}\d{9}" value="<?= $_POST["phone_no"] ?>" class="form-control" type="tel" name="phone_no" id="phone_no"/><br>
                <textarea required placeholder="Address*" name="address" class="form-control"><?= $_POST["address"] ?></textarea><br>
                <div class="row">
                    <div class="col-sm-5 text-light text-capitalize"><h5><strong>Upload Resume(.docx)</strong></h5></div>
                    <div class="col-sm-7"><input required type="file" name="resume" id="resume" class="form-control"/><br></div>
                </div>
                <p class='myerror'><?= $err ?></p>
                <button type="submit" class="btn btn-light btn-block">Submit</button>
                <a class="btn btn-light btn-block" href="joinus.php">Reset</a>
                </form>
    </div>
</div>
<?php require_once './footer.php';?>
