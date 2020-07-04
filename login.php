<?php  include_once "./header.php" ?>
<?php
$err = "";
$msg = "";
if(isset($_REQUEST["msg"])){
    if($_REQUEST["msg"]==1){        
        $msg = "Your password has been sent!";
    }
    else if($_REQUEST["msg"]==2){        
        $msg = "Your password has been changed!";
    }
    else if($_REQUEST["msg"]==3){        
        $msg = "Registration Successful!";
    }
}
if(isset($_POST["email"])){
    $email = filter_var($_POST["email"], FILTER_SANITIZE_MAGIC_QUOTES);
    $pass = filter_var($_POST["pass"], FILTER_SANITIZE_MAGIC_QUOTES);
    $query = "select * from emp 
    where email = '$email' 
    and pass = '$pass' and status = 'approved'";
    $r = run_sql($query);    
    if(mysqli_num_rows($r)>0){
       $row = mysqli_fetch_array($r); 
       $_SESSION["name"]=$row["name"];
       $_SESSION["email"]=$row["email"];
       $_SESSION["role"]=$row["role"];
       $_SESSION["id"]=$row["id"];
       redirect("home.php");
    }
    else {
        $err="Incorrect User Name or Password!!";
    }
}
?>
<div class="row" id="login">
    <div class="col-sm-6 offset-sm-3">
    <h1 id="topic" class="text-center">Login</h1>
    <hr>
    <?php if(!empty($msg)) { ?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <strong>Crimson</strong> <?=$msg?>
    </div>
    <?php } ?>

<form method="post">
<input placeholder="Email" class="form-control" type="email" name="email" /><br>
<input placeholder="Password"  class="form-control" type="password" name="pass" /><br>
<p class="text-light"><?= $err ?></p>
<input class="btn btn-light btn-block" type="submit" />
</form>
    </div>
</div>
<?php  include_once "./footer.php" ?>

