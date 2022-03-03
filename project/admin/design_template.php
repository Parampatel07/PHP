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
                        <h2>Design template</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Add new Template</h3>
                        <hr>
                        <div class="row mt-3">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-2">
                                            <label class="form-label" for="catagory">Select category</label>
                                            <select name="catagory" class="form-control" name="catagory" id="catagory" aria-label="state">
                                                <option value="2" selected>Dummy category</option>
                                                <option value="3">Second Dummy category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" placeholder="Title" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="sample">Select photo</label>
                                            <input type="file" class="form-control-file" name="sample" id="sample" />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-style-1 ">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 100px;"></textarea>
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
            <!-- end of first card -->
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
                                    <td>Task</td>
                                    <td>Category</td>
                                    <td>Photo</td>
                                    <td>Description</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2</td>
                                    <td><i class="lni lni-trash-can"></i>&nbsp;&nbsp;<i class="lni lni-slice"></i></td>
                                    <td>Dummy category</td>
                                    <td><img src="https://picsum.photos/50" alt=""></td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, aperiam. Odit, deleniti tempore. Labore nesciunt error dolorum illo, enim dolores consectetur veniam vero repudiandae ea culpa! Nisi libero rerum iure!</td>
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