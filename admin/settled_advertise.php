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
                        <div class="float-start">
                            <h3>Param Patel (007) - Settled Advetise (Payment)</h3> 

                        </div>
                        <div>
                            <a class="btn btn-success btn-sm float-end" href="booked_advertise.php">Due Payment(Pending)</a>
                        </div>
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
                                        <td>ABC XYZ</td>
                                        <td>LMNOP</td>
                                        <td>1234567890 <br>9874563210</td>
                                        <td>10 feb 2004 <br>Rs 5000</td>
                                        <td>12000</td>
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