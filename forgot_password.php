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
                            <h2 class="heading">Forgot password </h2>
                            <div class="text-muted fs-17">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email adress</label>
                                                <input type="email" class="form-control" id="eamil" name="email"
                                                    placeholder="Email adress goes here">
                                            </div>
                                            <div class="mb-3 mt-4  text-end">
                                                <input type="submit" value="Recover account" class="btn btn-primary">
                                                <a href="login.php" class="btn btn-primary">Click to login</a>
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