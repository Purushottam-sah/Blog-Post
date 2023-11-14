<?php
session_start()
?>

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
    <link rel="stylesheet" href="style.css">

    <title>BlogHub</title>
</head>

<body>

    <!-- Navbar -->
    <section id="content">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">BlogHub</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li>
                            <form action="#">
                                <div class="form-input">
                                    <input type="search" placeholder="Search...">
                                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                                </div>
                            </form>
                        </li>
                        <li>
                            <a href="#" class="notification">
                                <i class='bx bxs-bell'></i>
                                <span class="num">8</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="register.php"><button class="register-btn">Setting</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="../Users/process/logout.php"><button type="submit" class="login-btn">Logout</button></a>
                        </li>
                        <li class="nav-item">
                            <?php
                            echo $_SESSION['uname'];
                            ?>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </section>
    <!-- Navabr -->

    <!-- body-content -->
    <div class="body-widget">
        <div class="container">
            <div class="blog">
                <div class="blog-title">
                    <h2><strong>Kathmandu Bus Accident</strong></h2>

                </div>
                <div class="blogusers">
                    <div class="blogcategory">
                        <span>- 2023/10/12</span>
                        <span>Kathmandu, Nepal</span>
                        <span>Social</span>
                    </div>
                    <div class="user-name">
                        <span>- Ram Gopal</span>
                    </div>
                </div>
                <div class="blog-info">
                    <div class="blog-img">
                        <img src="../img/bus accident.jpg" alt="blogimg">
                    </div>
                    <div class="blog-detail">
                        <div class="blog-para">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>

                        </div>
                    </div>
                </div>
                <div class="blog-comments">
                    <form action="#">
                        <input type="text" name="coments" id="typecomments" placeholder="write Your Comments Here...">
                        <button type="button">Post</button>
                    </form>
                </div>
            </div>
            <div class="blog">
                <div class="blog-title">
                    <h2><strong>Kathmandu Bus Accident</strong></h2>
                </div>
                <div class="blogusers">
                    <div class="blogcategory">
                        <span>- 2023/10/12</span>
                        <span>Kathmandu, Nepal</span>
                        <span>Social</span>
                    </div>
                    <div class="user-name">
                        <span>- Ram Gopal</span>
                    </div>
                </div>
                <div class="blog-info">
                    <div class="blog-img">
                        <img src="../img/bus accident.jpg" alt="blogimg">
                    </div>
                    <div class="blog-detail">
                        <div class="blog-para">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia! Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem earum cumque laudantium nisi in? Fugit mollitia quod fuga nam, ipsa, quo dolores voluptatem perferendis et quaerat corporis deleniti magni quia!</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- body-content -->




    <!-- <script src="Admin/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>