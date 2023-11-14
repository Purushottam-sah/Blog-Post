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
    <link rel="stylesheet" href="css/style.css">

    <title>BlogHub</title>
    <style>
        .msgError {
            padding: 25px;
        }

        .error {
            background: #3adb3a;
            padding: 6px 22px;
            border-radius: 10px;
            color: #2e08fd;
        }
    </style>
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
                            <a href="register.php"><button class="register-btn">Register</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php"><button class="login-btn">Login</button></a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navabr -->

    <div class="msgError">
        <?php
        if (isset($_GET["msg"])) {
            if ($_GET["msg"] == "1") {
                echo "<div class='error'>You are logout Successfully...</div>";
            }
        }

        ?>
    </div>
    <section id="blog-bg-header">
        <div class="container">
            <div class="header-img" style="background: url(img/header/blog.jpg);">
                <div class="overlay5"></div>
                <span>Read Our Blog Post</span>
            </div>
        </div>
    </section>

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
                        <img src="img/bus accident.jpg" alt="blogimg">
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
                <div class="moreinfo">
                    <a href="#"><button><span>Readmore <i class='bx bxs-right-arrow-alt'></i></span></button></a>
                </div>
            </div>
        </div>
    </div>
    <section id="Blog-card">
        <div class="container">
            <div class="blog-header">
                <span>Explore More Blog:</span>
            </div>
            <div class="explore-info">
                <p>WEEKLY ARTICLES WITH INSIGHT INTO THE WEEKEND'S MESSAGE</p>
            </div>
            <div class="weekly-blog">
                <p>Our blog takes the message from the weekend and lays out next right steps, so you can hear a message and do a message in practical ways.</p>
            </div>
            <div class="card-content">
                <div class="card" style="width: 18rem;">
                    <img src="img/bus accident.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/farming1.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/fun1.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/patient.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/political1.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/farming2.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/patient1.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/political 2.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="img/fun2.jpg" class="card-img-top" alt="blog-img">
                    <div class="card-body">
                        <h5 class="card-title">Bus Accident</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="writer">
                            <span>Author</span>
                            <h6>- Ram Sardar</h6>
                        </div>
                        <div class="card-btn">
                            <a href="login.php" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- body-content -->

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                                <span>1010 Avenue, sw 54321, chandigarh</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span>977-9876543210</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span>bloghub@info.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="home.html">BlogHub</a>
                            </div>
                            <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                    elit,Lorem ipsum dolor sit amet.</p>
                            </div>
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-google-plus'></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button><i class='bx bxl-telegram'></i></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2023, All Right Reserved <a href="home.php">Purushottam Shah</a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Policy</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer -->




    <!-- <script src="Admin/js/script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>