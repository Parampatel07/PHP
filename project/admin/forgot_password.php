<?php require_once("include/header.php") ?>
<style>
    .signin-wrapper {
        min-height: auto !important;
    }

    body {
        background-image: url("images/try3.jpg");
        background-size: 1200px 700px;
    }

    .card {
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }
</style>
</head>

<body>
    <section class="signin-section mt-4">
        <div class="container-fluid">

            <div class="col-lg-4 offset-md-4 mt-5 shadow">
                <div class="card">
                    <div class="signin-wrapper">
                        <div class="form-wrapper">
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="text-center mb-5 mt-5"> Forgot Password </h1>
                                        <div class="input-style-1">
                                            <label class="mt-5">
                                                <h5>Enter your registered email </h5>
                                            </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">@</span>
                                                <input type="text" class="form-control" placeholder="Email here" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->
                                    <!-- end col -->
                                    <div class="col-12">
                                        <div class="
                            button-group
                            d-flex
                            mt-4
                            justify-content-center
                            flex-wrap
                          ">
                                            <button class="
                              main-btn
                              primary-btn
                              btn-hover
                              text-center
                            ">
                                                Recover password
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        </div>
        <!-- end row -->
        </div>
    </section>
    <!-- ======== main-wrapper end =========== -->

    <?php require_once("include/script.php") ?>
</body>

</html>