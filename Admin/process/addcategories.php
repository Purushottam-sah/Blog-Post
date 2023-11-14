<?php 
if(isset($_POST["blogCategory"])){
    $category = $_POST['blogCategory'];

    if(empty($category)){
       header("location:../blogcategory.php?msg=2");
    }
    else{
        require "config.php";
        $insertsql= "INSERT INTO addcategories_db(id, categoryName) VALUES(null, '$category')";
        $res=$conn->query($insertsql);
        if($res){
            echo "<Script>alert('New Categories Added Successfully')</script>";   
            header("location:../blogcategory.php?msg=3");         
        }
    }
}
else{
    header("location:../blogcategory.php?msg=1");
}

?>