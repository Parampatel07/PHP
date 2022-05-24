<?php
// session_start();
require_once("include/verify_login.php");
require_once("include/header.php") ;
require_once("../inc/connection.php");
?>
<style>
.table_str {
    background-color: #F9F9F9 !important;
}
</style>
</head>

<body>
    <?php require_once("include/sidebar.php") ?>
    <!-- ======== main-wrapper start =========== -->
    <?php require_once("include/wrapper.php") ?>
    <!-- ========== section end ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <?php
            $sql = "select * from category where id=?";
            $statement=$db->prepare($sql);
            $statement->setfetchmode(PDO::FETCH_ASSOC);
            $statement->bindparam(1,$_REQUEST['id']);
            $statement->execute();
            $row=$statement->fetch();
            // var_dump($row);
            ?>
            <div class="title-wrapper pt-30"></div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="titlemb-30">
                        <h2>Category Management</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Add new Category</h3>
                        <hr>
                        <?php
                        require("../admin/include/message.php");
                        ?>
                        <div class="row mt-3">
                            <form action="submit/update_categories.php" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title"
                                                value="<?php echo $row['ctitle']?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="description">Description</label>
                                            <input type="text" name="description" id="description"
                                                value="<?php echo $row['description']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
$news="checked";
$website=" ";
if($row['adtype']==2)
{
    $news=" ";
    $website="checked";
}
?>
                                    <div class="col-md-4">
                                        <legend class="col-form-label col-sm-12 pt-0">Select Advertise type</legend>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="adtype"
                                                id="news" value="1" <?php echo $news;?>>
                                            <label class="form-check-label" for="news">
                                                News Paper
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="adtype"
                                                id="website" value="1" <?php echo $website;?>>
                                            <label class="form-check-label" for="website">
                                                Website/Application
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <?php
$text="checked";
$mutli=" ";
$anime=" ";
if($row['subadtype']==2)
{
    $text=" ";
    $multi="checked";
    $anime= " ";
}
elseif($row['subadtype']==3)
{
    $text=" ";
    $multi=" ";
    $anime="checked";
}
?>
                                        <legend class="col-form-label col-sm-12 pt-0">Select type of Advertisement
                                        </legend>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo"
                                                id="Standard" value="2" <?php echo $text;?>>
                                            <label class="form-check-label" for="Standard">
                                                Standard(black and white)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" <?php echo $multi?> type="radio"
                                                name="rdo" id="Classified" value="2">
                                            <label class="form-check-label" for="Classified">
                                                Classified(mutlicolor)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" <?php echo $anime?> type="radio"
                                                name="rdo" id="Animation" value="2">
                                            <label class="form-check-label" for="Animation">
                                                Animation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="pageno">Enter Page no.</label>
                                            <input type="number" name="pageno" id="pageno"
                                                value="<?php echo $row['pageno']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="adsize">Ad size</label>
                                            <input type="number" name="adsize" id="adsize"
                                                value="<?php echo $row['adsize']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="rate">Rate</label>
                                            <input type="number" name="rate" id="rate"
                                                value="<?php echo $row['rate'] ?>" />
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="sample">Change image</label>
                                            <input type="file" value="<?php echo $row['sampleimage']?>" name="sample"
                                                id="sample" />
                                            <input type="hidden" name="categoryid"
                                                value="<?php echo $row['id']; ?>">
                                            <input type="hidden" name="oldsampleimage"
                                                value="<?php echo $row['sampleimage']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4 offset-4 text-center">
                                        <img src="../images/category/<?php echo $row['sampleimage'];?>"
                                            class="img-fluid" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"
                                            alt="">
                                    </div>
                                </div>
                                <div class="mb-3 float-end">
                                    <input type="submit" value="Save Changes" class="btn btn-success"></input>
                                    <a href="catagory.php" class="btn btn-danger">Back</a>
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