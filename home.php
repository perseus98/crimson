<?php include_once "./header.php"?>
<?php
$msg = "";
if (isset($_REQUEST["msg"])) {
    if ($_REQUEST["msg"] == 1) {
        $msg = "Congratulations, you are now a member of CRIMSON";
    }
    if ($_REQUEST["msg"] == 2) {
        $msg = "Thanks for contacting us! will contact you soon!";
    }
    if ($_REQUEST["msg"] == 0) {
        $msg = "Couldn't sent mail";
    }
}
?>
<?php if (!empty($msg)) {?>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <div class="notification"><strong >UPDATE :</strong> <?=$msg?></div>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>

    </div>
    <?php }?>
<!-- carousel -->

<div class="row" style="color: aliceblue;">
<div class="carousel slide col-3 col-offset-1">
<br><br>
<h2 class="text-center">Few Words About Us</h2>
<br><br><br>
            <p class="text-center">
              We are a family of diverse origin, working together for making technology ever much more simple and better
              for each and every user out there who.
            </p>
</div>
<div id="carouselId" class="carousel slide col-8 col-offset-1" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
            <li data-target="#carouselId" data-slide-to="4"></li>
            <li data-target="#carouselId" data-slide-to="5"></li>
            <li data-target="#carouselId" data-slide-to="6"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="img-fluid cor-img" src="./images/slide/s1.jpg">
            </div>
            <div class="carousel-item">
            <img class="img-fluid cor-img" src="./images/slide/s2.jpg">
            </div>
            <div class="carousel-item">
            <img class="img-fluid cor-img" src="./images/slide/s3.jpg">
            </div>
            <div class="carousel-item">
            <img class="img-fluid cor-img" src="./images/slide/s4.jpg">
            </div>
            <div class="carousel-item">
            <img class="img-fluid cor-img" src="./images/slide/s5.jpg">
            </div>
            <div class="carousel-item">
            <img class="img-fluid cor-img" src="./images/slide/s6.jpg">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</div>
<?php include_once "./footer.php"?>