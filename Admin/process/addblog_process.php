<?php 
if(isset($_POST["title"]) && isset($_POST["postdate"]) && isset($_POST["location"]) && isset($_POST["authorname"]) && isset($_POST["category"]) && isset($_POST["image"]) && isset($_POST["descp"])){
    $title=$_POST["title"];
    $postdate=$_POST["postdate"];
    $location=$_POST["location"];
    $authorname=$_POST["authorname"];
    $category=$_POST["category"];
    $image=$_POST["image"];
    $descp=$_POST["descp"];

    if(empty($title)){
        header("location: ../addblog.php?msg=2");
    }
    else{
        if(empty($postdate)){
            header("location: ../addblog.php?msg=3");
        }
        else{
            if(empty($location)){
                header("location: ../addblog.php?msg=4");
            }
            else{
                if(empty($authorname)){
                    header("location: ../addblog.php?msg=5");
                }
                else{
                    if(empty($category)){
                        header("location: ../addblog.php?msg=6");
                    }
                    else{
                        if(empty($image)){
                            header("location: ../addblog.php?msg=7");
                        }
                        else{
                            if(empty($descp)){
                                header("location: ../addblog.php?msg=8");
                            }
                            else{

                                require "config.php";
                                //upload image to database
                               $blogImg= move_uploaded_file($_FILES['image']['tmp_name'], "../images/".$_FILES['image']['name']);
                               $blogcreate="INSERT INTO addblog_db(id, title, postdate, location, authorname, category, image, descp) VALUES(null, '$title', '$postdate', '$location', '$authorname', '$category', '$blogImg', '$descp')";
                               $res=$conn->query($blogcreate);
                               if($res){
                                echo "<script>alert('Blog Created Successfully');</script>";
                                header("location:../addblog.php");
                               }
                               else{
                                die("<h1 style='color:#ff000'>Error Occured While Creating Blog</h1>");
                               }

                               

                            }
                        }
                    }
                }
            }
        }
    }


}
else{
    header("location: ../addblog.php?msg=1");
}




?>