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

                <section id="view-comments">
                    <div class="comments-img" style="background: url(img/comments/comments.png); background-repeat:no-repeat; background-position: right; background-size: contain; "></div>
                    <div class="comments-table">
                        <div class="table-responsive">
                            <div class="comment-header">
                                <h2>View Comments</h2>
                            </div>
                            <table class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Blog ID</th>
                                        <th scope="col">Blog Name</th>
                                        <th scope="col">Users Name</th>
                                        <th scope="col">Comments</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Road Accidents</td>
                                        <td>Ram Verma</td>
                                        <td>This is serious accidents that i have ever seen.</td>
                                        <td>2023/10/02</td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button>
                                            <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Road Accidents</td>
                                        <td>Ram Verma</td>
                                        <td>This is serious accidents that i have ever seen.</td>
                                        <td>2023/10/02</td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button>
                                            <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Road Accidents</td>
                                        <td>Ram Verma</td>
                                        <td>This is serious accidents that i have ever seen.</td>
                                        <td>2023/10/02</td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button>
                                            <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Road Accidents</td>
                                        <td>Ram Verma</td>
                                        <td>This is serious accidents that i have ever seen.</td>
                                        <td>2023/10/02</td>
                                        <td>
                                            <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button>
                                            <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!-- Content End From Here -->
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>