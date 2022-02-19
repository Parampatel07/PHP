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
                        <h2>Customer's Feedback</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Compose Mail</h3>
                        <hr>
                        <div class="row mt-3">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-style-1 ">
                                            <label for="custemail">Customer's Email</label>
                                            <input type="email" name="custemail" id="custemail" name="custemail"
                                                readonly required placeholder="Customer's Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-style-1 ">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Create the editor container -->
                                        <div id="editor" style="height:100px;">
                                            <p>Hello World!</p>
                                            <p>Some initial <strong>bold</strong> text</p>
                                            <p><br></p>
                                        </div>
                                    </div>
                                    <div class="mb-3 mt-3 text-end ">
                                    <button type="submit" class="btn btn-success">Save changes</button>
                                    <button type="reset" class="btn btn-danger">Reset</button>
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