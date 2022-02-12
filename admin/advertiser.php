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
                        <h2>Customer Management</h2>
                    </div>
                    <div class="card mt-4 shadow p-5">
                        <h3>Existing Customer</h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Contact</td>
                                    <td>Mobile(s)</td>
                                    <td>Last payment details</td>
                                    <td>Payment due</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td><a href="advertiser_detail.php">ABC XYZ</a></td>
                                    <td>LMNOP</td>
                                    <td>1234567890 <br>9874563210</td>
                                    <td>10 feb 2004 <br>Rs 5000</td>
                                    <td><a href="booked_advertise.php">Rs 10000</a></td>
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