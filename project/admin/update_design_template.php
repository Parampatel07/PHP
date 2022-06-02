<?php
require_once("include/verify_login.php");
require_once("../inc/connection.php");
require_once("include/header.php"); ?>
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
                        <h3>Edit Your Template</h3>
                        <hr>
                        <?php
                        $sql = "SELECT * from template where id={$_REQUEST['templateid']}";
                        $statement = $db->prepare($sql);
                        $statement->setfetchmode(PDO::FETCH_ASSOC);
                        $statement->execute();
                        $table = $statement->fetch();
                        var_dump($table);
                        ?>
                        <div class="row mt-3">
                        <form action="submit/update_template.php" method="post" enctype="multipart/form-data">
<?php
require_once("include/message.php");
?>
                        <div class="row">
                                    <div class="col-12">
                                        <?php
                                        require("include/message.php");
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="templateid" value="<?php echo $_REQUEST['templateid'] ?>">
                                        <div class="input-style-2">
                                            <label class="form-label" for="catagory">Select category</label>
                                            <select name="catagory" class="form-control" name="catagory" id="catagory" aria-label="state">
                                                <!-- <option value="">Select Category</option> -->
                                                <?php
                                                $sql = "SELECT id,ctitle FROM category ORDER BY id DESC";
                                                $statement = $db->prepare($sql);
                                                $statement->setfetchmode(PDO::FETCH_ASSOC);
                                                $statement->execute();
                                                while ($row = $statement->fetch()) {
                                                    if ($table['categoryid'] == $row['id']) {
                                                        echo "<option value='{$row['id']}' selected='selected'>{$row['ctitle']}</option>";
                                                    } else {
                                                        echo "<option value='{$row['id']}'>{$row['ctitle']}</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <input type="hidden" name="oldphoto" value="<?php echo $table['image'] ?>">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" value="<?php echo $table['title'] ?>" />
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
                                            <textarea class="form-control" id="description" name="description" value="" style="height: 100px;"><?php echo $table['description']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-8 offset-md-4">
                                        <div class="input-style-1 ">
                                            <img src="../images/template/<?php echo $table['image'] ?>" height="250px" width="350px" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 float-end">
                                    <input type="submit" class="btn btn-success" value="Save changes"></input>
                                    <input type="reset" class="btn btn-danger" value="Reset"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of first card -->
        </div>
        <!-- ======== main-wrapper end =========== -->
        <?php require_once("include/script.php") ?>
</body>

</html>