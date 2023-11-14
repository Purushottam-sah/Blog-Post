<?php include('includes/header.php') ?>

<body>
    <div class="webApps">
        <div class="mobileApps">
            <div class="container-fluid">
                <!-- Sidebar -->
                <?php include('includes/sidebar.php') ?>
                <!-- End Sidebar -->
                <!-- Content Start From Here -->
                <?php include('includes/navbar.php') ?>
                <section id="blogCategory">
                    <div class="overlay1">
                        <img src="img/addcategory/category.png" alt="" srcset="">
                    </div>
                    <div class="blog-category-form">
                        <form action="process/addcategories.php" method="post">
                            <h2>Create a New Blog Category</h2>
                            <?php
                            if (isset($_GET["msg"])) {
                                if ($_GET["msg"] == "1") {
                                    echo "<div class='errorMsg'>Fill all the required field..</div>";
                                } else if ($_GET["msg"] == "2") {
                                    echo "<div class='errorMsg'>Please add new category..</div>";
                                } else if ($_GET["msg"] == "3") {
                                    echo "<div class='correctMsg'>New Categories Added Successfully..</div>";
                                }
                            }
                            ?>
                            <div class="form-group">
                                <label for="blog Category">Blog Category:</label>
                                <input type="text" class="form-control" name="blogCategory" placeholder="Add Blog Category">
                            </div>
                            <button type="submit" class="btn btn-success">Add Category</button>
                        </form>
                    </div>
                </section>
                <section id="show-category">
                    <div class="container">
                        <div class="category-table">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-sm table-lg table-responsive-md" style="border-radius: 12px !important;">
                                    <h2>Categories Lists:</h2><br>
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Categories Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    require "process/config.php";

                                    $categoriessql = "SELECT * FROM addcategories_db";
                                    $res = $conn->query($categoriessql);
                                    if ($res->num_rows > 0) {
                                        while ($row = $res->fetch_assoc()) {
                                    ?>
                                            <tbody>
                                                <tr>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><?php echo ($row['id']) ?></th>
                                                    <td><?php echo ($row['categoryName']) ?></td>
                                                    <td style="color:green">
                                                    <?php 
                                                    if($row['status']==1){
                                                        echo '<span style="color:green; padding-left:10px; font-weight:500;">Active</span>';
                                                    }
                                                    else{
                                                        echo '<span style="color:red; padding-left:10px; font-weight:500;">Deactive</span>';
                                                    }
                                                    
                                                    ?>
                                                    </td>                                                
                                                    <td>
                                                        <?php 
                                                        if($row['status']==1){
                                                            //update status to zero
                                                            echo'<a href="process/status.php?id='.$row['id'].'&status=0"><button type="button" class="btn btn-success">Active</button></a>';
                                                        }
                                                        else{
                                                            echo'<a href="process/status.php?id='.$row['id'].'&status=1"><button type="button" class="btn btn-danger">Deactive</button></a>';
                                                        }                                                       
                                                        
                                                        ?>
                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                            </tr>
                                            </tbody>
                                    <?php
                                        }
                                    } else {
                                        echo "<div style= 'margin-bottom:8px; font-size:24px; font-weight:600;'>No Data are Available..</div>";
                                    }

                                    ?>

                                </table>

                            </div>
                        </div>
                    </div>
                </section>
                <!-- Content End From Here -->
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>