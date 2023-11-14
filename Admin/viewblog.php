<?php include('includes/header.php') ?>
<style>
    .table-wrapper {
        max-height: 700px;
        margin-top: 5%;
        padding-left: 20px;
    }

    .table-wrapper h2 {
        color: #6902e3;
        font-weight: 600;
    }

    .table-wrapper tbody td {
        padding: 5px 10px;
    }

    .table-wrapper button {
        display: grid;
        grid-template-columns: auto;
        align-items: center;
        margin: 20px 0;
    }
</style>

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


                    <section id="views-blog-post">
                        <div class="table-wrapper">
                            <table class="table table-bordered table-striped table-hover table-sm table-lg">
                                <h2>Blog Post Views:</h2> <br>
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">Post Date</th>
                                        <th scope="col">Post Location</th>
                                        <th scope="col">Author Name</th>
                                        <th scope="col">Post Image</th>
                                        <th scope="col">Blog Categories</th>
                                        <th scope="col">Blog Description</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>

                                <?php
                                require "process/config.php";

                                $viewblogsql = "SELECT * FROM addblog_db";
                                $res = $conn->query($viewblogsql);
                                if ($res->num_rows > 0) {
                                    while ($row = $res->fetch_assoc()) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <td scope="col"><?php echo ($row['id'])?></td>
                                                <td scope="col"><?php echo ($row['title'])?></td>
                                                <td scope="col"><?php echo ($row['postdate'])?></td>
                                                <td scope="col"><?php echo ($row['location'])?></td>
                                                <td scope="col"><?php echo ($row['authorname'])?></td>
                                                <td scope="col"><?php echo ($row['image'])?></td>
                                                <td scope="col"><?php echo ($row['category'])?></td>
                                                <td scope="col"><?php echo ($row['descp'])?></td>
                                                <td>
                                                    <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button><br>
                                                    <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                                </td>
                                            </tr>
                                        </tbody>



                                <?php
                                    }
                                }

                                ?>

                            </table>
                        </div>
                    </section>
                </main>


                <!-- Content End From Here -->
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>