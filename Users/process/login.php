<?php 
if(isset($_POST['email']) && isset($_POST['pass'])){
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    require "config.php";

    $loginsql="SELECT * FROM register_db WHERE email='$email'";
    $res=$conn->query($loginsql);

    if($res->num_rows == 0){
        header("Location: ../../login.php?msg=1");
    }
    else{
        $fa=$res->fetch_assoc();
        $pas=$fa["pass"];
        $name=$fa["uname"];

        if($pass != $pas){
            header("Location: ../../login.php?msg=2");
        }
        else{
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['uname'] = $name;
            
            header("location: ../../Users/homepage.php");
        }
    }
    
}
else{
    header("location:../../register.php?msg=1");
}




?>