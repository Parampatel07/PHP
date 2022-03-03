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
                        <h2>Operator Management</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Add new Operator</h3>
                        <hr>
                        <div class="row mt-3">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" placeholder="Password" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="fullname">Full name</label>
                                            <input type="text" name="fullname" id="fullname" placeholder="Full name"/>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="mobnumber">Mobile number</label>
                                            <input type="number" name="mobnumber" id="mobnumber" placeholder="Mobile number" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="date">Select dateof birth</label>
                                            <input type="date" name="date" id="date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 float-end">
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="card mt-4 shadow p-5">
                        <h3>Existing Operator</h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Email</td>
                                    <td>Fullname</td>
                                    <td>Mobile</td>
                                    <td>Birth date</td>
                                    <td>last login</td>
                                    <td>operation</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td>Eamil@gmail.com</td>
                                    <td>Param patel</td>
                                    <td>1234567890</td>
                                    <td>10 feb 2004</td>
                                    <td>08-feb-2022 </td>
                                    <td><i class="lni lni-trash-can"></i>&nbsp;&nbsp;<i class="lni lni-slice"></i></td>
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