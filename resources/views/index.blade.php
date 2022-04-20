<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/main-favicon-1.png" sizes="196x196" />
    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>HOME-DESKBOOKING</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <img class="image_logo" src="img/logo-main.png"  alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#1">Desk Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#2">Desk Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#3">Office Map</a>
                    </li>
                    <li class="nav">
                        <a class="nav-link " href="#about">About</a>
                    </li>
                </ul>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link nav-link:hover" style="color: #002456">Contact</a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-brand ms-lg-3">Logout</a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h2 class="text-white text-uppercase">E-machine Corporation</h2>
                        <h1 class="display-3 my-4">Welcome back!</h1>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal"  class="btn btn-brand">Book Now!</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal"  class="btn btn-outline-light ms-3">Our Desk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h2 class="text-white text-uppercase">With the continuing decline in Covid-19 cases in various countries,  and we know how you miss working in our office, we are glad to inform you that you can continue working in the office using our desk booking system.</h2>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-brand">Book Now!</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-outline-light ms-3">Our Desk</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide3">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h2 class="text-white text-uppercase">With the Emachine Desk booking system you can book your schedule anytime, anywhere! </h2>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-brand">Book Now!</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="btn btn-outline-light ms-3">Our Desk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- booking -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-4 col-sm-4">
                    <h1 class="display-4">Today's Booking</h1>
                    <p class="mb-0"></p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="portfolio">
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project1.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project2.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project3.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project4.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="img/project5.jpg" alt="">
                <div class="content">
                    <h2>Consulting Marketing</h2>
                    <h6>Website Design</h6>
                </div>
            </div>
        </div>
    </section>
    <br><br>
     <!-- ABOUT -->

    <section id="about">
        <div class="container" >
            <div class="row img">
                <div class="">
                    <div class="intro">
                        <h6>About</h6>
                        <br>
                        <h1  class="mission_vision">E-machine Corporation</h1>
                        <br>
                        <p class="mx-auto">E-Machine is an multinational hardware and electronics corporation specializing in advanced electronics technology, headquartered in Australia. Its products include desktop PCs, laptop PCs, tablets, servers, storage devices, virtual reality devices, displays, smartphones and peripherals, as well as gaming PCs and accessories.</p>
                        <p class="mx-auto">At E-machine, we're committed to creating IT products that improve usability and bring value to our customers' requirements. We think that innovation is more than just the production of new technology and solutions; it is also ensuring that consumers benefit from these advancements and feel truly empowered.
                        </p>
                        <br>
                        <br>
                        <h1  class="mission_vision">Key Focus</h1>
                        <p class="mx-auto">E-Machine drive the entire value chain to exercise corporate social responsibility, extend the core concept of sustainable management to social care, and continue to develop sustainable competitiveness via innovative thinking, starting with the product life cycle. In the spirit of "Wiser Together," E-sustainability machine's management approaches have progressed to a new milestone: the sustainable integration model of "digitizing data, adopting scientific management," which has created shared value.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <br>
                    <h2 class="mission_vision" >MISSION</h2>
                </div>
                <h3>To dismantle the boundaries that exist between people and technology.
                </h3>
            </div>

            <div class="review">
                <div class="person">
                    <br>
                    <h2 class="mission_vision">VISION</h2>
                </div>
                <h3>E-machine believes that the systematic and strategic collection, analysis, and interpretation of data on educational outcomes and factors related to those outcomes, as well as the development of high-quality policy aimed at improving educational progress for all learners, is required to inform the development of high-quality policy.
                </h3>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h1>Calendar</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project5.jpg" alt="">
                        <a href="#" class="tag">Web Design</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project4.jpg" alt="">
                        <a href="#" class="tag">Programming</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/project2.jpg" alt="">
                        <a href="#" class="tag">Marketing</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Web Design trends in 2022</h5>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand"><span class="dot">.</span></h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#logoutmodal" class="nav-link">Privacy & Policy</a>
                        <br>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-youtube'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">CopyRight@2022 | Group-02-ISPM</p>
        </div>
    </footer>

   

    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Contact Us</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Firstname" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Lastname" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Type your email" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="Type your concern..." class="form-control" id=""  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

     <!-- logout -->

    <div class="modal fade" id="logoutmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-8">
                                <h1>TESTING</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>