<?php require_once("inc/header.php")?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
    <?php require_once("inc/menu.php")?>
    <!-- Modal -->
    <!-- end modal -->
    <div class="overflow-hidden-x">
        <!-- Start Home -->
        <!-- End Home -->
        <!-- Start features -->
        <section class="section feature" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="heading text-center">View Advertisement</h2>
                        <div class="card mb-4 p-5">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">Profile</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Sr no.</td>
                                                    <td>Template</td>
                                                    <td>Dates</td>
                                                    <td>Days</td>
                                                    <td>Amount</td>
                                                    <td>Details</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Color ad</td>
                                                    <td>Book date <br>15-02-2022 <br>Ad date <br>21-02-2022 </td>
                                                    <td>5</td>
                                                    <td>2500</td>
                                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
                                                        natus aut molestiae officiis, debitis exercitationem voluptates
                                                        delectus. Error minima, veritatis repellat sapiente inventore
                                                        consectetur. Illum aspernatur distinctio ullam! Cupiditate,
                                                        eligendi?</td>
                                                    <td>
                                                        <a href="book_advertise.php">
                                                            <h2>
                                                                <i class="mdi mdi-pencil"></i>
                                                            </h2>
                                                        </a>
                                                        <a href="">
                                                            <h2>
                                                                <i class="mdi mdi-delete"></i>
                                                            </h2>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <td>Sr no.</td>
                                                    <td>Template</td>
                                                    <td>Dates</td>
                                                    <td>Days</td>
                                                    <td>Amount</td>
                                                    <td>Details</td>
                                                    <td>Status</td>
                                                    <td>Feedback</td>
                                                    <td>Review</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Color Ad</td>
                                                    <td>Book Date <br>15-02-2022 <br>Ad date <br>21-02-2022</td>
                                                    <td>5</td>
                                                    <td>2500</td>
                                                    <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo consectetur veritatis eius quam perspiciatis voluptates? Quaerat corporis odit, explicabo repellendus velit accusantium a aut obcaecati, sit quam dignissimos, ut eos.</td>
                                                    <td>Paid</td>
                                                    <td>
                                                        <a href="view_feedback.php">
                                                            <h2>
                                                                <i class="mdi mdi-eye"></i>
                                                            </h2>
                                                        </a>
                                                    </td>
                                                    <td>
                                                    <a href="add_feedback.php">
                                                            <h2>
                                                                <i class="mdi mdi-message-reply-text-outline"></i>
                                                            </h2>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div><!-- end container -->
                    </div>
        </section>
        <?php require_once("inc/footer.php")?>
        <!--end back-to-top-->
        <!--Custom js-->
        <?php require_once("inc/script.php")?>
</body>

</html>