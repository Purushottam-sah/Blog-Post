<?php 
if (isset($_GET['uname']) && isset($_GET['email']) && isset($_GET['pass']) && isset($_GET['cpass'])){
    $uname=$_GET["uname"];
    $email=$_GET["email"];
    $pass=$_GET["pass"];
    $cpass=$_GET["cpass"];

    if(empty($uname)){
        header("location: ../../register.php?msg=2");
    }else{
        if(empty($email)){
            header("location: ../../register.php?msg=3");
        }else{
            if(empty($pass)){
                header("location: ../../register.php?msg=4");
            }
            else{
                if($pass!=$cpass){
                    header("location: ../../register.php?msg=5");
                }
                else{

                    require "config.php";
                   $sqlcreate="INSERT INTO register_db(id, uname, email, pass) VALUES(null, '$uname', '$email', '$pass')";
                   $res=$conn->query($sqlcreate);
                   if($res){
                    header("location:../../login.php");
                   }
                   else{
                    header("location:../../register.php?msg=6");
                   }

                }
            }
        }
    }
}
else{
    header("location:../../register.php?msg=1");
}


?>