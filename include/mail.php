<?php require_once './my_mail.php' ?>
<?php
echo $_REQUEST["msg"]; 
// if(isset($_REQUEST["msg"])){
//     mail_it(ADMIN_EMAIL,"Enquiry Registered" ,$_REQUEST["msg"], null);
//     redirect("../home.php?msg=2");
// }  
// redirect("../home.php?msg=0");
?>