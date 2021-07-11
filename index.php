<?php
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>spectrum</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--Header Section -->
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home">
                        <span>
                            <img src="pic/mozclub logo.png" class="logo" alt="">
                        </span>
                    </a>
                    <a class="user" href="user.php">
                        <h2>&#128522;</h2>
                       <?php echo "<p>Hello,{$_SESSION['username']}</p>"?>
                    </a>
                    <button class="navbar-toggler menu-toggle humb" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#project">projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="signup.php">Sign Up</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>

        </div>
    </section>

    <!--Header Section end -->
    <!-- baner section start -->
    <section id="home">
        <div class="container">
            <div class="baner">
                <div class="baner-imgs">
                    <img src="pic/spectrum (1).png" class="img-fluid" alt="">
                </div>
                <div class="overlay"></div>
                <div class="baner-cont" data-aos="fade-right">
                    <h1>
                        Empowered by Innovation
                    </h1>
                    <p>
                        SPECTRUM a place for all technical enthusiasts to learn, discover and innovate new things in the
                        field of Technology and Design.
                    </p>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Contact Us
                    </a>
                </div>

            </div>
        </div>

    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="about-head">
                    <h1>About Us</h1>
                </div>
                <div class="row abt-cont">
                    <div class="col-lg-6 col-md-12 col-sm-12 para">
                        <p><b>SPECTRUM</b>
                            ,Technical society of COLLEGE OF ENGINEERING AND TECHNOLOGY, BHUBANESWAR,a place for all
                            technical
                            enthusiasts to learn, discover and innovate new things in the field of Technology and
                            Design. The name of
                            the club " SPECTRUM ", a contribution of our alumni of 2015 batch, is particularly used to
                            describe the
                            characteristic colors of visible light after passing
                            through a prism, similarly students of CET consist of different skills within them and
                            Spectrum acts
                            like a prism, Spectrum recognises their skills helps them to strengthen it.
                            <br><br>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 abt-mg">
                        <img src="pic/bg2.jpg" class="img-fluid img1" alt="">
                    </div>
                </div>
                <div class="row abt-cont">
                    <div class="col-lg-6 col-md-12 col-sm-12 abt-mg">
                        <img src="pic/bg1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 para">
                        <p>This club was established by " Bikram Keshari Panda (2015 batch) ".Spectrum got its
                            recognition in the year
                            2016 and got its workspace, funding and other
                            facilities. Primarily this was his idea to have an electronics society in our college but
                            with the efforts
                            of other members we established two other wings - Software and Design.The other seniors who
                            had their
                            valuable contribution for this initiative were:
                            Ankit Mishra, Zighnesh Biswal, Abhishek Dash, Avinash Nayak, Tapan Kumar Pal, Krutikesh
                            Sahoo, Abhilash
                            Das.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br><br><br><br>
        <hr>
        <div class="container">
            <div class="row wing-head">
                <h1>Our Wings</h1>
            </div>
            <div class="row wing">
                <div class="wing-cont">
                    <p><b>SPECTRUM</b> Our club is so named as it provides us with different wings emitted by the
                        hardwork from
                        our members, showing homologous transitions between Hardware, Software and Designing. <br><br>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row wing">
                <div class="col-lg-6 col-md-6 wing-text ">
                    <p>The <b>HARDWARE</b> team of the Club mainly focuses on VLSI, Embedded Systems and PCB Design. We
                        have
                        developed many projects with implementation and testing of circuits, components, systems,
                        etc.<br><br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 wbox" data-aos="fade-right">
                    <img src="pic/hardware (W).png" class="img-fluid">
                    <div class="box-cont">
                        <a href="">vlsi</a><br>

                        <a href="">embedded system</a><br>

                        <a href="">pcb design</a><br>

                    </div>
                </div>
            </div>
            <div class="row wing">
                <div class="col-lg-4 col-md-6 col-sm-6 wbox wlboxs" data-aos="fade-right">
                    <img src="pic/software (W).png" class="img-fluid">
                    <div class="box-cont">
                        <a href="">web Development</a><br>

                        <a href="">app Development</a><br>

                        <a href="">meachine Learning</a><br>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wing-text">
                    <p>The <b>SOFTWARE</b> team is continuously striving for growth in the domains of Web Development,
                        App
                        Development, Competitive Programming, Machine Learning and Data Science. Working as a team,
                        inspiring
                        each other we quickly develop viable solutions for a better outcome.<br><br></p>
                </div>
            </div>
            <div class="row wing">
                <div class="col-lg-6 col-md-6 wing-text">
                    <p>The <b>DESIGN</b> Wing of our Club has proven their creativity in UI/UX Poster Designing. We
                        believe
                        visual
                        communication is a major tool to enhance various creative projects.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 wbox" data-aos="fade-right">
                    <img src="pic/design (W).png" class="img-fluid">
                    <div class="box-cont">
                        <a href="">ui/ux Designing</a><br>

                        <a href="">Poster Designing</a><br>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="project">
        <div class="container">
            <div class="row wing-head">
                <h1>Projects</h1>
            </div>
            <div class="row" id="project_slider">
                <div class="owl-carousel owl-theme">
                    <div class="project-content">
                        <div class="crd-img">
                            <img src="pic/prj1.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="crd-title">
                            <p>Travel Agency</p>
                        </div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quae perspiciatis delectus.
                        </div>
                        <div class="crd-footer">
                            <a href="#">Demo</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="crd-img">
                            <img src="pic/prj2.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="crd-title">
                            <p>Food Order</p>
                        </div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quae perspiciatis delectus.
                        </div>
                        <div class="crd-footer">
                            <a href="#">Demo</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="crd-img">
                            <img src="pic/prj3.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="crd-title">
                            <p>Online Learning</p>
                        </div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quae perspiciatis delectus.
                        </div>
                        <div class="crd-footer">
                            <a href="#">Demo</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="crd-img">
                            <img src="pic/prj4.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="crd-title">
                            <p>Online Shopping</p>
                        </div>
                        <div class="desc">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque quae perspiciatis delectus.
                        </div>
                        <div class="crd-footer">
                            <a href="#">Demo</a>
                            <a href="#">Download</a>
                        </div>
                    </div>
                </div>
                <div class="row explore">
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Explore Our Projects
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section id="Contact">
        <div class="container">
            <div class="row wing-head">
                <h1>Contact Us</h1>
            </div>
            <div class="row contact">
                <div class="cont-form">
                    <input type="text" class="in" placeholder="Name"><br><br>
                    <input type="email" class="in" placeholder="email"><br><br>
                    <input type="text" class="in" placeholder="Contact Number"><br><br>
                    <textarea class="in" placeholder="Messege" cols="30" rows="10"></textarea><br>
                    <input type="button" value="Send" class="send">
                </div>
                <div class="cont-form1">
                    <p>Get in touch with us</p><br><br>
                    <div class="conti">
                        <i class="fas fa-envelope"></i>
                        <p>spectum@123gmail.com</p>
                    </div>
                    <div class="conti">
                        <i class="fab fa-telegram"></i>
                        <p>Join us with telegram</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-sm-12 footer-cont">
                    <div class="flogo">
                        <img src="pic/mozclub logo.png" class="img-fluid">
                        <p>Spectrum</p>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-sm-12 footer-cont">
                    <div class="fhead">
                        Quick Links
                    </div>
                    <div class="flink">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <a href="#">Our Wings</a>
                        </li>
                        <li>
                            <a href="#">Our Pojects</a>
                        </li>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-sm-12 footer-cont">
                    <div class="fhead">
                        Conditions & Helps
                    </div>
                    <div class="flink">
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Terms And Conditions</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mini-footer">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <p>@2021 <b> Spectrum </b>all rights are reserved</p>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="mail">
                            <i class="fas fa-envelope"></i>
                            <p>spectum@123gmail.com</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 social">
                        <a href="#"> <i class="fab fa-facebook"></i> </a>
                        <a href=""> <i class="fab fa-youtube"></i> </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>

</html>