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
            <div class="titlemb-30">
                <h2>Customer Feedback </h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="card mt-4 shadow p-5">
                        <h3>Existing Design template</h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                                <thead>
                                    <tr>
                                        <td>#</td>
                                        <td>Category</td>
                                        <td>Photo</td>
                                        <td>Description</td>
                                        <td>Delete</td>
                                        <td>Reply</td>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr>
                                        <td>2</td>
                                        <td>Dummy category</td>
                                        <td><img src="https://picsum.photos/50" alt=""></td>
                                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, aperiam.
                                            Odit, deleniti tempore. Labore nesciunt error dolorum illo, enim dolores
                                            consectetur veniam vero repudiandae ea culpa! Nisi libero rerum iure!</td>
                                            <td>
                                                <h1 class=" text-danger text-center">
                                                <i class="lni lni-trash-can"></i>
                                                </h1>
                                            </td>
                                            <td>
                                                <h1 class=" text-success text-center">
                                                    <a href="feedback_reply.php"> <i class="lni lni-comments-reply"></i></a>
                                                </h1>
                                            </td>
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