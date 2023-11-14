<?php
require"config.php";

$id=$_GET['id'];
// echo $id;
$statuscatg=$_GET['status'];
// echo $statuscatg;
$categorysql="UPDATE addcategories_db SET status='$statuscatg' WHERE id='$id'";
$res=$conn->query($categorysql);
header('location:../blogcategory.php');

?>