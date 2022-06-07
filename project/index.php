<?php require_once("inc/header.php");
require_once("inc/connection.php");?>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
    <?php require_once("inc/menu.php")?>
    <!-- Modal -->
    <!-- end modal -->
    <div class="overflow-hidden-x">
        <section class="section home home-1" id="home" data-spy="scroll" data-target="#navbar-example">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="home-heading">
                            <h1 class="mb-3 ">Instantly Book Ads Online With Us<span
                                    class="typewrite text-primary d-none d-sm-inline-block" data-period="2000"
                                    data-type='[ " Vegeta " ]'>
                                    <span class="wrap"></span> </span>
                            </h1>
                        </div>
                        <p class=" fs-20">Grow your Business with our Network</p>
                        <div class="home-btn hstack gap-2 flex-column d-sm-block">
                            <a class="btn btn-white me-1"
                                href="#features">Request Free Demo</a>
                            <a class="modal-btn" href="#features"
                                data-bs-toggle="modal" data-bs-target=".watchvideomodal">
                                <span class="avatar-sm">
                                    <span class="avatar-title rounded-circle btn-icon">
                                        <i class="mdi mdi-play"></i>
                                    </span>
                                </span>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg watchvideomodal" data-keyboard="false"
                                tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                                    <div class="modal-content home-modal p-1">
                                        <div class="modal-header border-0">
                                            <button type="button" class="btn-close btn-close-dark"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <video id="VisaChipCardVideo" class="video-box" controls="">
                                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                            <!--Browser does not support <video> tag -->
                                        </video>
                                    </div>
                                </div>
                            </div>
                            <!-- END MODAL -->
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div>
         <!--end container-->
        </section>
        <section class="section team" style="z-index: 1;">
            <div id="particles-js" style="z-index: -1;">
            </div>
            <!-- end particles -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading mt-4" id="catageory">Select Catageory</h2>
                            <p class="text-muted fs-17">Select a suitable catageory for your add from multiple option of
                                your choice</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row -->
                <div class="row gy-4">
                    <?php 
                    $sql="SELECT ctitle,description,sampleimage from category";
                    try
                    {
                        
                        $statement=$db->prepare($sql);
                        $statement->setfetchmode(PDO::FETCH_ASSOC);
                        $statement->execute();
                        $table=$statement->fetchall();
                        // var_dump($table);
                    }
                    catch(PDOException $error)
                    {
                        LogError($error,__FILE__);
                    }
                    foreach($table as $row)
                    {
                    ?>
                        <div class="col-lg-3 col-sm-6">
                        <div class="team-card">
                            <div class="team-card-img text-center">
                                <img class="img-fluid" src="images/category/<?php echo $row['sampleimage']; ?>" alt="image" style="height: 261px; width: 262px;;">
                                <div class="team-social-icons">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#"
                                                target="">
                                                <i class="mdi mdi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="project2\themesdesign.in\oxhen\layouts/javascript:void(0)"
                                                target="">
                                                <i class="mdi mdi-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="project2\themesdesign.in\oxhen\layouts/javascript:void(0)"
                                                target="">
                                                <i class="mdi mdi-linkedin"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="project2\themesdesign.in\oxhen\layouts/javascript:void(0)"
                                                target="">
                                                <i class="mdi mdi-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-card-text-2">
                                <h5 class="fw-bold mb-0">Title goes here</h5>
                                <p class="mb-0 fs-13 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Exercitationem minima quae expedita beatae consequuntur perferendis labore
                                    corrupti in soluta similique nihil cupiditate provident, obcaecati incidunt
                                    perspiciatis, alias libero odio illo?</p>
                                <div class="mt-3 text-center">
                                    <a href="advertise_template.php" class="btn btn-primary btn-block">View more details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php    
                    }
                    ?>
                    <!-- End col-->
                </div><!-- end row-->
            </div><!-- end cotainer-->
        </section>
        <section class="section cta">
            <marquee behavior="" direction="left">
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
            </marquee>
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div>
                            <div class="cta-heading"><span class="mb-3">
                                    <span class="counter_value" data-target="5000"></span>
                                    <span>+ Happy Customer</span>
                                </span>
                            </div>
                            <p>Now that we've aligned the details, it's time to get things mapped out and organized. Now
                                that we've aligned the details.</p>
                            <!-- <p class="fs-18">Limited signup only. Order today before the discount period end.</p> -->
                            <a class="btn btn-primary" href="javascript:void(0)">Learn More</a>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>


        <section class="section reviews" id="review">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-5">
                            <h2 class="heading">Most Popular Ad Booking System </h2>
                            <p class="text-muted fs-17">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                                doloribus officiis quae eum atque, totam, asperiores exercitationem in praesentium
                                aperiam, iure quis autem nihil numquam? Accusantium numquam sequi distinctio alias!</p>
                        </div>
                    </div><!-- end col-->
                    <div class="col-lg-8">
                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators mb-0">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2" class=""></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3" class="active" aria-current="true"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/instant.jpg" style="height: 230px;"
                                                                alt="">
                                                            <div class="mt-3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="reviews-heading">Instant Ad Booking</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/quote.png"
                                                                alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit
                                                                amet, consectetuer adipiscing elit. Aenean commodo
                                                                ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus
                                                                et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item ">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/unknow.avif" style="height: 230px;"
                                                                height="150px" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="reviews-heading">Book Ad For Multiple Platform</h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/quote.png"
                                                                alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit
                                                                amet, consectetuer adipiscing elit. Aenean commodo
                                                                ligula
                                                                eget dolor. Lorem, ipsum dolor sit amet consectetur
                                                                adipisicing elit. Atque laborum recusandae iste quos,
                                                                ducimus molestias .</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item active">
                                    <div class="card bg-transparent reviews-box h-100">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card reviews-card">
                                                        <div class="card-body text-center">
                                                            <img class="img-fluid"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/template_demo.avif"
                                                                style="height: 230px;"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <h5 class="reviews-heading">Thousands Of Template To Choose Froom
                                                    </h5>
                                                    <div class="d-flex align-items-top">
                                                        <div class="flex-shrink-0">
                                                            <img class="reviews-quote-1"
                                                                src="project2\themesdesign.in\oxhen\layouts/images/quote.png"
                                                                alt="">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 mt-2">
                                                            <p class="text-muted fs-14 mt-xl-4">Lorem ipsum dolor sit
                                                                amet, consectetuer adipiscing elit. Aenean commodo
                                                                ligula
                                                                eget dolor. Aenean massa. Cum sociis natoque penatibus
                                                                et magnis dis parturient montes.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->
                </div><!-- End row-->
            </div><!-- end container-->
        </section>
        <section class="section cta">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div data-aos="fade-down" data-aos-duration="1800">
                            <h3 class="fw-bold">Stay Connected</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique molestiae optio
                                voluptatum incidunt, est qui magnam perferendis, doloribus vitae ut vel commodi
                                excepturi, quia atque at quos aliquam neque unde.</p>

                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>
        <section class="section feature" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="text-center mb-4">
                            <h2 class="heading">Template Features</h2>
                            <p class="text-muted fs-17">Ut enim ad minima veniam quis nostrum exercitationem ullam
                                corporis suscipit laboriosam nisi commodi consequatur.</p>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="feature-card p-3 py-sm-4 rounded d-flex">
                                <div class="flex-shrink-0">
                                    <i class="mdi mdi-responsive text-primary float-start me-3 h2"></i>
                                </div>
                                <div class="flex-grow-1 ms-2">
                                    <div class="content">
                                        <h5 class="title">Fully Reliable</h5>
                                        <p class="text-muted">One disadvantage of Lorum Ipsum is that in certain letters
                                            which is said more than.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div class="feature-card p-3 py-sm-4 rounded">
                            <i class="mdi mdi-layers-triple-outline text-primary float-start me-3 h2"></i>
                            <div class="content d-block overflow-hidden">
                                <h5 class="title">Fresh Layouts</h5>
                                <p class="text-muted mt-2">The most well-known dummy text is the 'Lorem', which
                                    well-known is said which is said.</p>
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-7 mt-sm-4">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <div class="feature-card p-3 py-sm-4 rounded">
                                <i class="mdi mdi-clipboard-flow-outline text-primary float-start me-3 h2"></i>
                                <div class="content d-block overflow-hidden">
                                    <h5 class="title">Modern Workflow</h5>
                                    <p class="text-muted mt-2">Moreover, in Latin only words at the beginning of
                                        sentences which is said are capitalized.</p>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="row my-sm-5 py-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div data-aos="fade-right" data-aos-duration="1800">
                            <div class="card bg-transparent border-0 mb-3 mb-lg-0">
                                <img src="project2\themesdesign.in\oxhen\layouts/images/feature1.png"
                                    class="img-fluid rounded-3" alt="">
                            </div>
                        </div>
                    </div><!-- end col -->
                    <div class="col-lg-5">
                        <div data-aos="fade-left" data-aos-duration="1800">
                            <h3 class="feature-heading mb-2">Retina Ready Templates</h3>
                            <p class="text-muted">Now that we've aligned the details, it's time to get things mapped out
                                and organized. Now that we've aligned the details. </p>
                            <ul class="feature-list">
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Advertising for a
                                    trade magazine</li>
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Designing
                                    marketing materials </li>
                                <li><i class="mdi mdi-checkbox-marked-circle-outline text-primary"></i>Update News
                                    content</li>
                            </ul>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <?php require_once("inc/footer.php")?>
        <!--end back-to-top-->
        <!--Custom js-->
        <?php require_once("inc/script.php")?>
</body>

</html>