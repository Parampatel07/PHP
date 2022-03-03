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
                    <div class="col-lg-6">
                        <div class="text-center mb-4">
                            <h2 class="heading">Register </h2>
                            <div class="text-muted fs-17">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <form class="row g-3">
                                                <div class="col">
                                                <label for="name" class="form-label">Name</label>
                                                    <input type="text" class="form-control" placeholder="Enter your name"
                                                        aria-label="First name">
                                                </div>
                                                <div class="col">
                                                <label for="conperson" class="form-label">Contact person</label>
                                                    <input type="text" class="form-control" placeholder="Contact person"
                                                        aria-label="Last name">
                                                </div>                                          
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="1234 Main St">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress2" class="form-label">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Apartment, studio, or floor">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputCity" class="form-label">City</label>
                                                <input type="text" class="form-control" id="inputCity">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputState" class="form-label">State</label>
                                                <input type="text" class="form-control" id="inputstate">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputPassword4" class="form-label">Password</label>
                                                <input type="password" class="form-control" id="inputPassword4">
                                            </div>
                                            <div class="col-12 text-end">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                                <button type="Reset" class="btn btn-primary">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
            </div><!-- end container -->
        </section>
        <?php require_once("inc/footer.php")?>
        <!--end back-to-top-->
        <!--Custom js-->
        <?php require_once("inc/script.php")?>
</body>

</html>