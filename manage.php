<?php  include_once "./header.php" ?>
<?php check_founder(); ?>
<form class="form-inline mb-3">
    <input value="<?= $_REQUEST["si"] ?>" type="text" placeholder="Search" name="si" class="form-control mr-3" />
    <button class="btn btn-light" type="submit">Search</button>
</form>
<?php
$query = "select * from emp ";
if(isset($_REQUEST["si"])){
    $query = $query .  " where name like '%$_REQUEST[si]%'"; 
}
$r = run_sql($query);
echo "<table class='table table-striped'>
<thead class='thead-light'>
<tr>
<th>Name</th>
<th>Phone No</th>
<th>Role</th>
<th>Action</th>
</tr>
</thead>
";
while($row = mysqli_fetch_array($r)){
    echo "<tr>
    <td>$row[name]</td>
    <td>$row[pno]</td>
    <td>$row[role]</td>
    <td><a class='btn btn-light btn-sm' href='contact_detail.php?id=$row[id]'>Read More</a>
    <a class='btn btn-light btn-sm' href='contact_delete.php?id=$row[id]'>Delete</a></<a></td>
    </tr>
    ";
}
echo "</table>";
?>
<?php  include_once "./footer.php" ?>
