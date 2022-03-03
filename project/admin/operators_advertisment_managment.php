<?php require_once("include/header.php") ?>
</head>
<body>
    <?php require_once("include/operator_sidebar.php") ?>
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
                    <div class="card mt-3 shadow p-4">
                        <h3>Ad Request</h3>
                        <hr>
                        <div class="row mt-3">
                            <form action="" method="post">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <table class="table table-bordered  ">
                                                    <tr>
                                                        <td>Category goes here</td>
                                                        <td>Template goes here</td>
                                                        <td>Advertisment Date</td>
                                                        <td>Advertisment status</td>
                                                    </tr>
                                                </table>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <img src="https://picsum.photos/300/260" alt="">
                                                        <strong>Template Title</strong>
                                                    </div>
                                                    <div class="col-8">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Title</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Description</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Ad type</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sub Ad Type</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Page no</td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                        <br>
                                                    </div>
                                                    <div class="col-12">
                                                        <table class="table table-striped">
                                                            <tr>
                                                                <td>Ad size</td>
                                                                <td>big ad</td>
                                                                <td>Rate </td>
                                                                <td>2500</td>
                                                            </tr>
                                                        </table>
                                                        <h4>
                                                            Other Ad Detailes
                                                        </h4>
                                                        <table class="table table-striped table-bordered">
                                                            <tr>
                                                                <td width="20%">Book Date</td>
                                                                <td>16-02-2022</td>
                                                                <td>Days</td>
                                                                <td>5 Days</td>
                                                                <td>Amount</td>
                                                                <td>2500</td>
                                                            </tr>
                                                            <tr>
                                                                <td width="20%">Content</td>
                                                                <td colspan="5">Lorem ipsum dolor sit amet consectetur
                                                                    adipisicing elit. Fuga perferendis, debitis sit illo
                                                                    totam expedita nostrum pariatur ducimus saepe
                                                                    eveniet laborum distinctio magni repellendus,
                                                                    fugiat, architecto iure possimus? Porro, iure!</td>
                                                            </tr>
                                                            <br>
                                                            <tr>
                                                                <td colspan="2"> <input type="file" name="" id=""
                                                                        class="form-control"></td>
                                                                <td colspan="2"> <input type="file" name="" id=""
                                                                        class="form-control"></td>
                                                                <td colspan="2"> <input type="file" name="" id=""
                                                                        class="form-control"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" class="text-center">
                                                                    <img src="https://picsum.photos/150" alt="">
                                                                </td>
                                                                <td colspan="2" class="text-center">
                                                                    <img src="https://picsum.photos/150" alt="">
                                                                    <br>
                                                                    <strong class="mt-4">Selected Image</strong>
                                                                    <br>
                                                                    <a href="" class="btn btn-primary">Download File</a>
                                                                </td>
                                                                <td colspan="2" class="text-center">
                                                                    <img src="https://picsum.photos/150" alt="">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== main-wrapper end =========== -->
        <?php require_once("include/script.php") ?>
</body>
</html>