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
        <section class="section cta">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <div>
                            <p>Categories</p>
                            <h3 class="fw-bold">Category Name Goes Here</h3>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container-->
        </section>
        <div class="container mb-5 ">
            <div class="row">
                <div class="col-12">
                    <div class="p-5">
                        <img class="img-fluid" src="https://picsum.photos/1000/400" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <h5>
                        Description Goes Here
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate reiciendis esse facilis
                        deleniti est officiis magnam quod nisi. Quia nulla quidem maiores voluptatem ratione optio
                        aliquam laboriosam doloremque fugit veniam?
                    </p>
                </div>
                <div class="col-4">
                    <div class="card outline-primary">
                        <div class="card-body">
                            <h4 class="headinfeature-heading mb-2">
                                Category Detials
                            </h4>
                            <hr class="bg-primary"> 
                            <div class="table-responsive">
                                <table class="table bg-success table-striped table-hover">
                                    <tr>
                                        <td>Ad type</td>
                                        <td>News paper</td>
                                    </tr>
                                    <tr>
                                        <td>Display type</td>
                                        <td>Text only</td>
                                    </tr>
                                    <tr>
                                        <td>Page no</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Ad size</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Rate</td>
                                        <td>1000</td>
                                    </tr>
                                </table>
                            </div>
                            <a href="advertise_template.php" class="btn btn-primary text-center">Select Template</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("inc/footer.php")?>
        <!--end back-to-top-->
        <!--Custom js-->
        <?php require_once("inc/script.php")?>
</body>

</html>