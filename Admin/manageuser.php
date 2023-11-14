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

                <section id="show-user">
                    <div class="bg-img" style="background: url(img/users/manageusers.png); background-repeat:no-repeat; background-position: right; background-size: contain; "></div>
                    <div class="users-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-sm table-lg table-responsive-md" style="border-radius: 12px !important;">
                                <h2>Register Users Lists:</h2><br>
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gmail</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <?php
                                require "process/config.php";

                                $userssql = "SELECT * FROM register_db";
                                $res = $conn->query($userssql);
                                if ($res->num_rows > 0) {
                                    while ($row = $res->fetch_assoc()) {
                                ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo($row['id'])?></th>
                                                <td><?php echo($row['uname'])?></td>
                                                <td><?php echo($row['email'])?></td>
                                                <td style="color:green">Active</td>
                                                <td>
                                                    <button type="button" class="btn btn-success"><i class='bx bxs-edit'></i></button>
                                                    <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                                </td>
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
                </section>

                <!-- Content End From Here -->
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>