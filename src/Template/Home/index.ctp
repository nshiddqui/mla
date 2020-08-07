<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

    <head>
        <title><?= __('Medical Lectures Academy') ?></title>
        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Medical Lectures Academy, Medical, Lectures, Academy"
              />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!--// Meta tag Keywords -->

        <!-- Custom-Files -->
        <!-- Bootstrap-Core-Css -->
        <?= $this->Html->css('bootstrap') ?>
        <!-- Style-Css -->
        <?= $this->Html->css('style') ?>
        <!-- Font-Awesome-Icons-Css -->
        <?= $this->Html->css('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
        <!-- //Custom-Files -->

        <!-- Web-Fonts -->
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese') ?>
        <?= $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i') ?>
        <!-- //Web-Fonts -->

    </head>

    <body>
        <!-- header -->
        <header>
            <!-- top header -->
            <div class="top-head-w3ls py-2 bg-dark">
                <div class="container">
                    <div class="row">
                        <h1 class="text-capitalize text-white col-7">
                            <i class="fa fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>welcome to Medical Lectures Academy</h1>
                        <!-- social icons -->
                        <div class="social-icons text-right col-5">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="fa fa-facebook-f icon-border facebook rounded-circle"> </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="fa fa-twitter icon-border twitter rounded-circle"> </a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus icon-border googleplus rounded-circle"> </a>
                                </li>
                                <li class="ml-2">
                                    <a href="#" class="fa fa-rss icon-border rss rounded-circle"> </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
            </div>
            <!-- //top header -->
            <!-- middle header -->
            <div class="middle-w3ls-nav py-2">
                <div class="container">
                    <div class="row">
                        <a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.html"><img src="/img/logo.png"><span class="position-absolute d-none d-lg-inline">Medical Lectures Academy</span></a>
                        <div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
                            <div class="row">
                                <div class="col-sm-6 nav-middle overflow-auto">
                                    <i class="fa fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
                                    <div class="agile-addresmk">
                                        <p>
                                            <span class="font-weight-bold text-dark">Mail Us</span>
                                            <?= $this->Html->link('medicallecturesacademy@gmail.com', 'mailto:medicallecturesacademy@gmail.com') ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
                                    <i class="fa fa-phone text-center mr-md-4 mr-sm-2 mr-4"></i>
                                    <div class="agile-addresmk">
                                        <p>
                                            <span class="font-weight-bold text-dark">Call Us</span>
                                            +91 7903-522-005
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-6 top-login-butt text-right mt-sm-2">
                                    <a href="#" class="button-head-mow3 text-white">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //middle header -->
        </header>
        <!-- //header -->
        <!-- banner -->
        <div class="banner-agile">
            <ul class="slider">
                <li class="active">
                    <div class="banner-w3ls-1">
                    </div>
                </li>
                <li>
                    <div class="banner-w3ls-2">
                    </div>
                </li>
                <li>
                    <div class="banner-w3ls-3">
                    </div>
                </li>
                <li>
                    <div class="banner-w3ls-4">
                    </div>
                </li>
                <li class="prev">
                    <div class="banner-w3ls-5">
                    </div>
                </li>
            </ul>
            <ul class="pager">
                <li data-index="0" class="active"></li>
                <li data-index="1"></li>
                <li data-index="2"></li>
                <li data-index="3"></li>
                <li data-index="4"></li>
            </ul>
            <div class="banner-text-posi-w3ls">
                <div class="banner-text-whtree">
                    <h3 class="text-capitalize text-white p-4">your bright future
                        <b>is our mission!</b>
                    </h3>
                    <p class="px-4 py-3 text-dark">Become top-of-the-flight specialist after graduating!</p>
                </div>
            </div>
        </div>
        <!-- //banner -->

        <!-- about -->
        <div class="about py-5">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Welcome to
                    <span class="font-weight-bold">Medical Lectures Academy</span>
                </h3>
                <div class="row pt-md-4">
                    <div class="col-lg-6 about_right">
                        <h3 class="text-capitalize text-right font-weight-light font-italic">interface friendly learning at
                            <span class="font-weight-bold">Medical Lectures Academy</span>
                        </h3>
                        <p class="text-right my-4 pr-4 border-right">Medical Lectures Academy one of the  leading Medical coaching centre in darbhanga offers Medical , Paramedical, Nursing students class as per subject with clinical aspects.</p>
                        <div class="about_left-list">
                            <h6 class="mb-lg-3 mb-2 font-weight-bold text-dark">Our Benefits</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="fa fa-check mr-3"></i>New videos every week</li>
                                <li class="mb-2">
                                    <i class="fa fa-check mr-3"></i> Education with clinical Medicine..</li>
                                <li class="mb-2">
                                    <i class="fa fa-check mr-3"></i>Learn everything on a traditional whiteboard</li>
                                <li class="mb-2">
                                    <i class="fa fa-check mr-3"></i>Specially focus on students week areas</li>
                                <li class="mb-2">
                                    <i class="fa fa-check mr-3"></i>Deeper level of learning..</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right">
                        <img src="/img/ab.jpg" alt="" class="img-fluid" />

                        <div class="about-bottom text-center p-sm-5 p-4">
                            <ul>
                                <li>
                                    <h5>10+</h5>
                                    <p class="text-dark font-weight-bold">Teachers</p>
                                </li>
                                <li>
                                    <h5>200+</h5>
                                    <p class="text-dark font-weight-bold">Students</p>
                                </li>
                                <li>
                                    <h5>6+</h5>
                                    <p class="text-dark font-weight-bold">Subjects</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //about -->

        <!-- Stats-->
        <div class="stats-w3layouts py-5">
            <div class="container py-xl-5 py-lg-3">
                <div class="stats-info">
                    <div class="row">
                        <div class="col-md-3 col-6 stats-grid-w3-agile text-center px-xl-5 px-3">
                            <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='10' data-delay='.5' data-increment="1">10</div>
                            <p class="text-uppercase text-white border-top pt-4 mt-3">happy students</p>
                        </div>
                        <div class="col-md-3 col-6 stats-grid-w3-agile text-center  px-xl-5 px-3">
                            <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='6' data-delay='.5' data-increment="1">6</div>
                            <p class="text-uppercase text-white border-top pt-4 mt-3">approved subjects</p>
                        </div>
                        <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
                            <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='10' data-delay='.5' data-increment="1">10</div>
                            <p class="text-uppercase text-white border-top pt-4 mt-3">certified teachers</p>
                        </div>
                        <div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
                            <div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='200' data-delay='.5' data-increment="1">200</div>
                            <p class="text-uppercase text-white border-top pt-4 mt-3">graduate students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Stats -->

        <!-- course-->
        <div class="classes py-5">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">choose your
                    <span class="font-weight-bold">subject</span>
                </h3>
                <div class="row pt-4">
                    <div class="col-lg-4 col-news-top text-center">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c1.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">pharmacology</h3>
                                    <p>The study of how a drug affect</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="#" class="text-dark">pharmacology
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                    <div class="col-lg-4 col-news-top text-center my-lg-0 my-sm-5 my-4">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c2.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">microbiology</h3>
                                    <p>The study of microorganisms</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="#" class="text-dark">microbiology
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                    <div class="col-lg-4 col-news-top text-center">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c3.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">physiology</h3>
                                    <p>The scientific study of functions and mechanisms in a living system</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="#" class="text-dark">physiology
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-news-top text-center">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c4.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">pathology</h3>
                                    <p>The study of the causes and effects of disease or injury</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="software.html" class="text-dark">pathology
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                    <div class="col-lg-4 col-news-top text-center  my-lg-0 my-sm-5 my-4">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c6.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">anatomy</h3>
                                    <p>The branch of biology concerned</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="social_media.html" class="text-dark">anatomy
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                    <div class="col-lg-4 col-news-top text-center">
                        <!-- Left to right -->
                        <!-- normal -->
                        <div class="ih-item circle effect16 left_to_right mx-auto">
                            <a href="#">
                                <div class="img">
                                    <img src="/img/c5.jpg" alt="img" class="img-fluid rounded-circle h-100">
                                </div>
                                <div class="info">
                                    <h3 class="text-capitalize text-white">surgery </h3>
                                    <p>Medical specialty that uses operative manual</p>
                                </div>
                            </a>
                        </div>
                        <h6 class="small-heading text-capitalize text-center mt-4">
                            <a href="#" class="text-dark">surgery
                                <i class="fas fa-long-arrow-alt-right ml-1"></i>
                            </a>
                        </h6>
                        <!-- end normal -->
                        <!-- end Left to right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //course -->

        <!-- what we do -->
        <div class="why-choose-agile py-5">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what we
                    <span class="font-weight-bold">do</span>
                </h3>
                <div class="row agileits-w3layouts-grid pt-md-4">
                    <div class="col-lg-4 services-agile-1">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">special education</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 services-agile-1 my-lg-0 my-5">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-book"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">full day session</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 services-agile-1">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">qualified teachers</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row agileits-w3layouts-grid mt-5">
                    <div class="col-lg-4 services-agile-1">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-calendar"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">events</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 services-agile-1  my-lg-0 my-5">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">pre classes</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 services-agile-1">
                        <div class="row wthree_agile_us">
                            <div class="col-lg-3 col-md-2 col-3  agile-why-text">
                                <div class="wthree_features_grid text-center p-3 border rounded">
                                    <i class="fa fa-users"></i>
                                </div>
                            </div>
                            <div class="col-9 agile-why-text-2">
                                <h4 class="text-capitalize text-white font-weight-bold mb-3">24/7 supports</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //what we do -->

        <!-- video and events -->
        <div class="video-choose-agile py-5">
            <div class="container py-xl-5 py-lg-3">
                <div class="row">
                    <div class="col-lg-7 video">
                        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our
                            <span class="font-weight-bold">video</span>
                        </h3>
                        <iframe src="https://www.youtube.com/embed/YqPWeQqTLsY"></iframe>
                    </div>
                    <div class="col-lg-5 events">
                        <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">upcoming
                            <span class="font-weight-bold">events</span>
                        </h3>
                        <div class="events-w3ls">
                            <div class="d-flex">
                                <div class="col-sm-2 col-3 events-up p-3 text-center">
                                    <h5 class="text-white font-weight-bold">28
                                        <span class="border-top font-weight-light pt-2 mt-2">May</span>
                                    </h5>
                                </div>
                                <div class="col-sm-10 col-9 events-right">
                                    <h4 class="text-dark">Admission Fair Spring </h4>
                                    <ul class="list-unstyled">
                                        <li class="my-2">
                                            <i class="fa fa-clock-o mr-2"></i>5.00 pm - 7.30 pm</li>
                                        <li>
                                            <i class="fa fa-map-marker mr-2"></i><?= __('Darbhanga City') ?>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex my-4">
                            <div class="col-sm-2 col-3 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold">28
                                    <span class="border-top font-weight-light pt-2 mt-2">May</span>
                                </h5>
                            </div>
                            <div class="col-sm-10 col-9 events-right">
                                <h4 class="text-dark">Admission Fair Spring </h4>
                                <ul class="list-unstyled">
                                    <li class="my-2">
                                        <i class="fa fa-clock-o mr-2"></i>5.00 pm - 7.30 pm</li>
                                    <li>
                                        <i class="fa fa-map-marker mr-2"></i><?= __('Darbhanga City') ?>.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-sm-2 col-3 events-up p-3 text-center">
                                <h5 class="text-white font-weight-bold">28
                                    <span class="border-top font-weight-light pt-2 mt-2">May</span>
                                </h5>
                            </div>
                            <div class="col-sm-10 col-9 events-right">
                                <h4 class="text-dark">Admission Fair Spring </h4>
                                <ul class="list-unstyled">
                                    <li class="my-2">
                                        <i class="fa fa-clock-o mr-2"></i>5.00 pm - 7.30 pm</li>
                                    <li>
                                        <i class="fa fa-map-marker mr-2"></i><?= __('Darbhanga City') ?>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //video and events -->

        <!-- news -->
        <div class="news-section">
            <div class="container py-xl-5 py-lg-3">
                <h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our lastest
                    <span class="font-weight-bold">news</span>
                </h3>
                <div class="row news-grids-w3l pt-md-4">
                    <div class="col-md-4 news-grid">
                        <a href="blog.html">
                            <img src="/img/n1.jpg" class="img-fluid" alt="" />
                        </a>
                        <div class="news-text">
                            <div class="news-events-agile event-colo1 py-2 px-3">
                                <h5 class="float-left">
                                    <a href="blog.html" class="text-white">07 Aug</a>
                                </h5>
                                <div class="post-img float-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments text-white"></i>
                                            </a>
                                        </li>
                                        <li class="mx-3">
                                            <a href="#">
                                                <i class="fa fa-heart text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="detail-bottom">
                                <h6 class="my-3">
                                    <a href="#" class="text-dark">
                                        Upcoming video RBCs indices part 3 on YouTube.
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">
                        <a href="blog.html">
                            <img src="/img/n2.jpg" class="img-fluid" alt="" />
                        </a>
                        <div class="news-text">
                            <div class="news-events-agile py-2 px-3">
                                <h5 class="float-left">
                                    <a href="blog.html" class="text-white">07 Aug</a>
                                </h5>
                                <div class="post-img float-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments text-white"></i>
                                            </a>
                                        </li>
                                        <li class="mx-3">
                                            <a href="#">
                                                <i class="fa fa-heart text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="detail-bottom">
                                <h6 class="my-3">
                                    <a href="#" class="text-dark">
                                        Free session on Basic Anatomy for Registered students..
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 news-grid">
                        <a href="blog.html">
                            <img src="/img/n3.jpg" class="img-fluid" alt="" />
                        </a>
                        <div class="news-text">
                            <div class="news-events-agile event-colo3 py-2 px-3">
                                <h5 class="float-left">
                                    <a href="blog.html" class="text-white">07 Aug</a>
                                </h5>
                                <div class="post-img float-right">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-comments text-white"></i>
                                            </a>
                                        </li>
                                        <li class="mx-3">
                                            <a href="#">
                                                <i class="fa fa-heart text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-share text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="detail-bottom">
                                <h6 class="my-3">
                                    <a href="#" class="text-dark">
                                        COVID-19 affects different people in different ways. 
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //news -->
        <!-- footer -->
        <footer>
            <div class="container py-4">
                <div class="row py-xl-5 py-sm-3">
                    <div class="col-lg-6 map">
                        <h2 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">our
                            <span class="font-weight-bold">directions</span>
                        </h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28657.39868593353!2d85.88285079129949!3d26.125841823316666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb8f68cfbb45d%3A0x90c216f15f936d7a!2sLaheriasarai%2C%20Darbhanga%2C%20Bihar!5e0!3m2!1sen!2sin!4v1596800553415!5m2!1sen!2sin"></iframe>
                        <div class="conta-posi-w3ls p-4 rounded">
                            <h5 class="text-white font-weight-bold mb-3">Address</h5>
                            <p><?= __('Laheriasaria') ?> ,
                                <span> <?= __('Darbhanga') ?>. Bihar,</span> India</p>
                        </div>
                    </div>
                    <div class="col-lg-6 contact-agileits-w3layouts mt-lg-0 mt-4">
                        <h4 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">get in
                            <span class="font-weight-bold">touch</span>
                        </h4>
                        <p class="conta-para-style border-left pl-4">If you have any questions about the services we provide simply use the form below. We try and respond to all queries
                            and comments within 24 hours.</p>
                        <div class="subscribe-w3ls my-xl-5 my-4">
                            <h6 class="text-white text-capitalize mb-4">subscribe our newsletter</h6>
                            <form action="#" method="post" class="subscribe_form">
                                <input class="form-control" type="email" name="email" placeholder="Enter your email..." required="">
                                <button type="submit" class="btn btn-primary submit">Submit</button>
                            </form>
                        </div>
                        <p class="para-agileits-w3layouts text-white">
                            <i class="fa fa-map-marker pr-3"></i><?= __('Laheriasaria , Darbhanga. Bihar, India') ?></p>
                        <p class="para-agileits-w3layouts text-white my-sm-3 my-2">
                            <i class="fa fa-phone pr-3"></i>+91 7903-522-005</p>
                        <p class="para-agileits-w3layouts">
                            <i class="fa fa-envelope-open pr-2"></i>
                            <?= $this->Html->link('medicallecturesacademy@gmail.com', 'mailto:medicallecturesacademy@gmail.com', ['class' => 'text-white']) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="copyright-agiles py-3">
                <div class="container">
                    <div class="row">
                        <p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">© 2018 Edulearn. All Rights Reserved</p>
                        <!-- social icons -->
                        <div class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="fa fa-facebook-f icon-border facebook rounded-circle"> </a>
                                </li>
                                <li class="mx-2">
                                    <a href="#" class="fa fa-twitter icon-border twitter rounded-circle"> </a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus icon-border googleplus rounded-circle"> </a>
                                </li>
                                <li class="ml-2">
                                    <a href="#" class="fa fa-rss icon-border rss rounded-circle"> </a>
                                </li>
                            </ul>
                        </div>
                        <!-- //social icons -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- //footer -->


        <!-- Js files -->
        <!-- JavaScript -->
        <?= $this->Html->script('jquery-2.2.3.min') ?>
        <!-- Default-JavaScript-File -->
        <?= $this->Html->script('bootstrap') ?>
        <!-- Necessary-JavaScript-File-For-Bootstrap -->

        <!-- banner slider -->
        <?= $this->Html->script('slider') ?>
        <!-- //banner slider -->

        <!-- numscroller-js-file -->
        <?= $this->Html->script('numscroller-1.0') ?>
        <!-- //numscroller-js-file -->

        <!-- smooth scrolling -->
        <?= $this->Html->script('SmoothScroll.min') ?>
        <!-- //smooth scrolling -->

        <!-- move-top -->
        <?= $this->Html->script('move-top') ?>
        <!-- easing -->
        <?= $this->Html->script('easing') ?>
        <!--  necessary snippets for few javascript files -->
        <?= $this->Html->script('edulearn') ?>

        <!-- //Js files -->

    </body>

</html>
