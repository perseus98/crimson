<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRIMSON</title>
    <link rel="stylesheet" href="vender/bs/css/bootstrap.min.css">
    <script src="vender/jquery-3.3.1.min.js"></script>
    <script src="vender/popper.min.js"></script>
    <script src="vender/bs/js/bootstrap.min.js"></script>
</head>
<style>
/* * {
    
} */
#mycontainer1{
    position: absolute;
    margin-top: 150px;
    font-size: 25px;
    font-family: "Times New Roman", Times, serif;
    font-weight:bold;
}
#mycontainer2{
    position: absolute;
    margin-top: 400px;
    font-size: 20px;
    font-family: "Times New Roman", Times, serif;
    font-weight:bold;
}
#mybtn{
    position: absolute;
    left: 40%;
    width: 20% !important;
    top: 47%;
    font-size: 2vw;
    font-family: "Times New Roman", Times, serif;
    font-weight:bold;
    box-shadow: 2px 1px 1px black;
    transition: 1s;
}
#mybtn:hover{
    transform: scale(1.1);
}
#myVideo{
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
}
</style>
<body>

<div id="myVideo">
<video height="100%" width="100%" autoplay loop muted >
  <source src="./bg_video.mp4" type="video/mp4">
</video>
</div>
<div class="container-fluid text-center text-uppercase" id="mycontainer1" style="color: #ff8178 !important;">
    <h1>Welcome to Crimson</h1>
</div>

<a href="home.php" class="btn btn-outline-light" id="mybtn">GET STARTED</a>

<div class="container-fluid text-center text-uppercase" id="mycontainer2" style="color: #ff8178 !important;">
<h3 >We believe to make technology simpler for people to understand and use.</h3>
</div>
      
</div>
</body>
</html>
