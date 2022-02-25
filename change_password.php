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
                            <h2 class="heading text-center">Change Password </h2>
                            <div class="text-muted fs-17">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <form class="row g-3 text-left">
                                            <div class="col-12">
                                                <label for="curpas" class="form-label">Enter current paassword</label>
                                                <input type="password" name="curpas" id="curpas" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label for="newpas" class="form-label">Enter new paassword</label>
                                                <input type="password" name="newpas" id="newpas" class="form-control">
                                            </div>
                                            <div class="col-12">
                                                <label for="conpas" class="form-label">Enter confirm paassword</label>
                                                <input type="password" name="conpas" id="conpas" class="form-control">
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