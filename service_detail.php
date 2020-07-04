<?php  include_once "./header.php" ?>
<?php
$query = "select * from service where id = '$_REQUEST[id]'";
$r = run_sql($query);
$row = mysqli_fetch_array($r);
?>

<div class="row text-light">
    <div class="col-sm-8 offset-sm-2">
    <table class="table table-striped">
    <tr><th>Name</th><td><?= $row['name'] ?></td></tr>
    <tr><th>Phone No</th><td><?= $row['pno'] ?></td></tr>
    <tr><th>Price</th><td><?= $row['price'] ?></td></tr>
    <tr><th>Description</th><td><?= $row['description'] ?></td></tr>
    <?php
        $fn = "upload/$row[id].jpg";
        if(file_exists($fn)){
            echo "<tr><th>Image</th><td><img class='img-fluid' src='upload/$row[id].jpg' /></td></tr>";
        }
    ?>
    </table>        
    <a class="btn btn-light" href="services.php"><i class="fa fa-backward"></i></a>
    <?php
    if(is_founder()){
        echo "<a class='btn btn-light mx-3' href='service_delete.php?id=$row[id]'>&times</a>";
        echo "<a class='btn btn-light mx-3' href='service_update.php?id=$row[id]'>EDIT</a>";
    }    
    ?>
    </div>
</div>
<?php  include_once "./footer.php" ?>
