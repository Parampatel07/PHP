<?php require_once("include/header.php") ?>
</head>

<body>
    <?php require_once("include/sidebar.php") ?>
    <!-- ======== main-wrapper start =========== -->
    <?php require_once("include/wrapper.php") ?>
    <!-- ========== section end ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30"></div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="titlemb-30">
                        <h2>Advertisment Management</h2>
                    </div>
                    <div class="card mt-4 shadow p-5">
                        <div class="float-start">
                            <h3>Tomorrow's Advertisment</h3>

                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Type of Ad</td>
                                        <td>Template</td>
                                        <td>Customer</td>
                                        <td>Amount</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2</td>
                                        <td>Multicolor Ad</td>
                                        <td>Front page mid Size</td>
                                        <td><a href="advertiser_detail.php" target="blank">Rahul Mehta</a></td>
                                        <td>15000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== main-wrapper end =========== -->
        <?php require_once("include/script.php") ?>
</body>

</html>