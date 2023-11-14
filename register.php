<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/register.css">
    <title>Register New Users</title>
    <style>
        .error {
            background: red;
            padding: 5px 40px;
            margin: 12px 0;
            color: white;
            font-weight: 500;
            border-radius: 9px;
        }
    </style>
</head>

<body>
    <section id="register">
        <div class="container">
            <div class="users-account">

                <section class="vh-100">
                    <div class="error-msg">
                        <?php
                        if (isset($_GET["msg"])) {
                            if ($_GET["msg"] == "1") {
                                echo "<div class='error'>Please Fill All The Required Field</h2>";
                            }
                            else if ($_GET["msg"] == "2") {
                                echo "<div class='error'>Username is Empty</h2>";
                            }
                            else if ($_GET["msg"] == "3") {
                                echo "<div class='error'>Email is Empty</h2>";
                            }
                            else if ($_GET["msg"] == "4") {
                                echo "<div class='error'>Password is Empty</h2>";
                            }
                            else if ($_GET["msg"] == "5") {
                                echo "<div class='error'>Password Doesnot Match</h2>";
                            }
                            else if ($_GET["msg"] == "5") {
                                echo "<div class='error'>Password Doesnot Match</h2>";
                            }
                        }
                        ?>
                    </div>
                    <div class="container h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-12 col-xl-11">

                                <div class="card text-black" style="border-radius: 25px;">
                                    <div class="card-body p-md-5">

                                        <div class="row justify-content-center">
                                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-2">

                                                <a href="home.php">
                                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                                </a>

                                                <form class="mx-1 mx-md-4 new-users" action="Users/process/register.php" method="get">
                                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                                        <i class='bx bxs-user'></i>
                                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                                            <input type="text" id="form3Example1c" class="form-control" name="uname" placeholder="Enter Name" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                                        <i class='bx bxs-envelope'></i>
                                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                                            <input type="email" id="form3Example3c" class="form-control" name="email" placeholder="Enter Email" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                                        <i class='bx bxs-lock-alt'></i>
                                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                                            <input type="password" id="form3Example4c" class="form-control" name="pass" placeholder="Enter password" />
                                                        </div>
                                                    </div>

                                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                                        <i class='bx bxs-key'></i>
                                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                                            <input type="password" id="form3Example4cd" class="form-control" name="cpass" placeholder="Enter Re-password" />
                                                        </div>
                                                    </div>

                                                    <div class="form-check d-flex justify-content-center mb-5">
                                                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                                                        <label class="form-check-label" for="form2Example3">
                                                            I agree all statements in <a href="#!">Terms of service</a>
                                                        </label>
                                                    </div>

                                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                        <a href="#"><button type="submit" class="btn btn-primary btn-lg register-btn">Register</button></a>
                                                    </div>
                                                    <div class="alternate-way">
                                                        <a href="login.php"><span><span class="colorText">Already Member?</span> Click Here To Login.</span></a>
                                                    </div>

                                                </form>

                                            </div>
                                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-1">
                                                <img src="img/register.gif" class="img-fluid" alt="Sample image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>


</body>

</html>