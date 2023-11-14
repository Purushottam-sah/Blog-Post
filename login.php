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
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="style.css">
    <title>Register New Users</title>
    <style>
        .errorMsg {
            color: red;
        }
    </style>
</head>

<body>
    <section id="register">
        <div class="container">
            <div class="users-account">
                <section class="login-widget">
                    <div class="container">
                        <div>

                        </div>
                        <div class="users-entry-form">
                            <div class="login-image">
                                <img src="img/login.gif" alt="login">
                            </div>
                            <div class="entry-form">
                               <div>
                               <?php
                                if (isset($_GET["msg"])) {
                                    if ($_GET["msg"] == "1") {
                                        echo "<div class='errorMsg'>Email is Incorrect</h2>";
                                    } else if ($_GET["msg"] == "2") {
                                        echo "<div class='errorMsg'>Password Does Not Match</h2>";
                                    }
                                }
                                ?>
                               </div>
                                <a href="home.php">
                                    <h2>Sign In</h2>
                                </a>

                                <div class="login-logo"><img src="img/users.png" alt=""></div>
                                <form action="Users/process/login.php" method="post">

                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                        <i class='bx bxs-envelope'></i>
                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                            <input type="email" id="form3Example3c" class="form-control" name="email" placeholder="Enter Email" />
                                        </div>
                                    </div><br>
                                    <div class="d-flex flex-row align-items-center mb-4 users-inputs">
                                        <i class='bx bxs-lock-alt'></i>
                                        <div class="form-outline flex-fill mb-0 users-input-field">
                                            <input type="password" id="form3Example4c" class="form-control" name="pass" placeholder="Enter password" />
                                        </div>
                                    </div><br>
                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <a href="#"><button type="submit" class="btn btn-primary btn-lg login-btn">Login</button></a>
                                    </div>
                                    <div class="alternate-way">
                                        <a href="register.php"> <span><span class="colorText">Already Member?</span> Click Here To Register.</span></a>
                                    </div>
                                </form>
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