<?php  require "./header.php" ?>
<?php  
//Save in db as enquery
$err = "";
if(isset($_POST["name"])){
        //id	name	email	pno	message	qualification	address
        $query = "INSERT INTO enquiry (name, email, pno, message) 
                        VALUES ('$_POST[name]', '$_POST[email]','$_POST[pno]', '$_POST[msg]'
                        );";
        $r =run_sql($query); 
        $sub="Enquiry by $_POST[name]";
        $msg="NAME :: $_POST[name],
             EMAIL :: $_POST[email],
          PHONE NO :: $_POST[pno],
           MESSEGE :: $_POST[msg],
        ";
        mail_it(ADMIN_EMAIL,$sub,$msg,null);
        redirect("home.php?msg=2");
}
?>
<?php 
//mail it to admin
?>
<div class="row">
<div class="col-sm-6">
<form method="post">
    <input required class="form-control" type="text" name="name" placeholder="Name"><br>
    <input required class="form-control" type="tel" name="pno" placeholder="Phone No" pattern="0?[5-9]{1}\d{9}"><br>
    <input required class="form-control" type="email" name="email" placeholder="EMail"><br>
    <div  class="form-group">
       <h4 style="color: white;"><?php echo $err;?></h4>
    </div>
    <textarea required rows="4" class="form-control" name="msg" placeholder="Message"></textarea><br>
    <button class="btn btn-light btn-block" type="submit">Submit</button>
    </form>         
</div>
<div class="col-sm-6">
<div class="embed-responsive embed-responsive-16by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.925249107867!2d81.65338601424894!3d21.234812586089447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28ddfa474bac83%3A0x780e1695c1ca2b8a!2sMarine+Drive+Raipur!5e0!3m2!1sen!2sin!4v1564390193575!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <!-- <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d59499.5529349156!2d81.60712327298583!3d21.242867429551584!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9ed6532a6f04f63c!2sEffCon+Technologies!5e0!3m2!1sen!2sin!4v1563187726361!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen></iframe> -->
</div>
</div>
</div>
<?php  include_once "./footer.php" ?>


