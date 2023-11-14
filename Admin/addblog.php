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
                <main>
                    <div class="bg-form">
                    </div>
                    <div class="blog-form">
                        <form action="process/addblog_process.php" method="post">
                            <?php
                            if (isset($_GET["msg"])) {
                                if ($_GET["msg"] == "1") {
                                    echo "<div class='errorMsg'>Fill all the required field..</div>";
                                } else if ($_GET["msg"] == "2") {
                                    echo "<div class='errorMsg'>Please fill blog title..</div>";
                                } else if ($_GET["msg"] == "3") {
                                    echo "<div class='errorMsg'>Please add blog post date..</div>";
                                } else if ($_GET["msg"] == "4") {
                                    echo "<div class='errorMsg'>Please add post incident location..</div>";
                                } else if ($_GET["msg"] == "5") {
                                    echo "<div class='errorMsg'>Please add author name..</div>";
                                } else if ($_GET["msg"] == "6") {
                                    echo "<div class='errorMsg'>Please select blog category..</div>";
                                } else if ($_GET["msg"] == "7") {
                                    echo "<div class='errorMsg'>Please choose blog image..</div>";
                                } else if ($_GET["msg"] == "8") {
                                    echo "<div class='errorMsg'>Please add blog descriptions..</div>";
                                }
                            }
                            ?>
                            <h2>Create a New Blog Post</h2>
                            <div class="form-group">
                                <label for="blog-title">Blog Title:</label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Blog Title...">
                            </div>
                            <div class="form-group">
                                <label for="blog-title">Post Date:</label>
                                <input type="date" class="form-control" name="postdate" placeholder="Enter Blog Post Date...">
                            </div>
                            <div class="form-group">
                                <label for="blog-title">Post Location:</label>
                                <input type="text" class="form-control" name="location" placeholder="Enter Blog Post Location...">
                            </div>
                            <div class="form-group">
                                <label for="blog-title">Author Name:</label>
                                <input type="text" class="form-control" name="authorname" placeholder="Enter Author name...">
                            </div>
                            <div class="form-group">
                                <label for="blog-title">Blog Categories:</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="selectCategory">--Select blog category--</option>
                                    <?php
                                    require "process/config.php";

                                    $showcategorysql = "SELECT * FROM addcategories_db WHERE status = 0"; // Only select active categories (assuming status 0 is active)
                                    $res = $conn->query($showcategorysql);
                                    if ($res->num_rows > 0) {
                                        while ($row = $res->fetch_assoc()) {
                                    ?>
                                           
                                            <option value="<?php echo ($row['categoryName']) ?>"><?php echo ($row['categoryName']) ?></option>

                                    <?php
                                        }
                                    } else {
                                        echo "<div style= 'margin-bottom:8px; font-size:24px; font-weight:600;'>No Data are Available..</div>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="blog-title">Blog Image:</label>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                            <div class="form-group">
                                <label for="blog-title">Blog Description:</label>
                                <textarea class="form-control" name="descp" rows="4" placeholder="Add Blog Description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Add Blog</button>
                        </form>
                    </div>
                </main>


                <!-- Content End From Here -->
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>