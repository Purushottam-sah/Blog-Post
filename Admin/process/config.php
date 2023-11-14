<?php 
$servername="localhost";
$username="root";
$password="";
$database="blog_db";

$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    # code...
    die("Failed");
}
?>