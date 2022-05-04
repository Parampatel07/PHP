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
                        <h2>Category Management</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Add new Category</h3>
                        <?php
                        if($)
                        ?>
                        <hr>
                        <div class="row mt-3">
                            <form action="submit/insert_category.php" enctype="multipart/form-data" method="post" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" id="description" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <legend class="col-form-label col-sm-12 pt-0">Select Advertise type</legend>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="adtype" id="news" value="1" checked>
                                            <label class="form-check-label" for="news">
                                                News Paper
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="adtype" id="website" value="1">
                                            <label class="form-check-label" for="website">
                                                Website/Application
                                            </label>
                                        </div>  
                                    </div>
                                    <div class="col-md-4">
                                        <legend class="col-form-label col-sm-12 pt-0">Select type of Advertisement </legend>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo" id="Standard" value="2" checked>
                                            <label class="form-check-label" for="Standard">
                                                Standard(black and white)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo" id="Classified" value="2">
                                            <label class="form-check-label" for="Classified">
                                                Classified(mutlicolor)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo" id="Animation" value="2">
                                            <label class="form-check-label" for="Animation">
                                                Animation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="pageno">Enter Page no.</label>
                                            <input type="text" name="pageno" id="pageno" placeholder="Enter page number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row"    >
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="adsize">Ad size</label>
                                            <input type="text" name="adsize" id="adsize" placeholder="Enter AD size" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="rate">Rate</label>
                                            <input type="text" name="rate" id="rate" placeholder="Enter Rate" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="sample">Sample image</label>
                                            <input type="file" name="sample" id="sample" />
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
                        <h3>Existing Categories</h3>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Title</td>
                                    <td>File</td>
                                    <td>Rate</td>
                                    <td>Ad type</td>
                                    <td>Type of Advertise</td>
                                    <td>Page no.</td>
                                    <td>Size</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td> 1</td>
                                    <td>First ad <i class="lni lni-trash-can"></i>&nbsp;&nbsp;<i class="lni lni-slice"></i></td>
                                    <td><img src="https://picsum.photos/50" alt=""></td>
                                    <td>200</td>
                                    <td>Newspaper</td>
                                    <td>Black White</td>
                                    <td>10</td>
                                    <td>10*12</td>
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