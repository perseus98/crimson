<?php  include_once "./header.php" ?>
<?php check_founder(); ?>
<?php
$query = "select * from emp where id = '$_REQUEST[id]'";
$r = run_sql($query);
$row = mysqli_fetch_array($r);
?>

<div class="row text-light">
    <div class="col-sm-8 offset-sm-2">
    <table class="table table-striped">
    <tr><th>Name</th><td><?= $row['name'] ?></td></tr>
    <tr><th>Phone No</th><td><?= $row['pno'] ?></td></tr>
    <tr><th>Role</th><td><?= $row['role'] ?></td></tr>
    <tr><th>Email</th><td><?= $row['email'] ?></td></tr>
    <tr><th>Address</th><td><?= $row['address'] ?></td></tr>
    <?php
        $fn = "upload/$row[id].docx";
        if(file_exists($fn)){
            echo "<tr><th>Resume</th><td><a class='btn btn-primary' href='$fn'>Resume</a></td></tr>";
        }
    ?>
    </table>        
    <a class="btn btn-dark" href="manage.php">Back</a>
    </div>
</div>
<?php  include_once "./footer.php" ?>
