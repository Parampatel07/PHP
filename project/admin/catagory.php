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
                            <form action="submit/insert_category.php" enctype="multipart/form-data" method="post">
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
                                            <input required class="form-check-input" type="radio" name="adtype"
                                                id="news" value="1" checked>
                                            <label class="form-check-label" for="news">
                                                News Paper
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="adtype"
                                                id="website" value="1">
                                            <label class="form-check-label" for="website">
                                                Website/Application
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <legend class="col-form-label col-sm-12 pt-0">Select type of Advertisement
                                        </legend>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo"
                                                id="Standard" value="2" checked>
                                            <label class="form-check-label" for="Standard">
                                                Standard(black and white)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo"
                                                id="Classified" value="2">
                                            <label class="form-check-label" for="Classified">
                                                Classified(mutlicolor)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input required class="form-check-input" type="radio" name="rdo"
                                                id="Animation" value="2">
                                            <label class="form-check-label" for="Animation">
                                                Animation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="pageno">Enter Page no.</label>
                                            <input type="number" name="pageno" id="pageno"
                                                placeholder="Enter page number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="adsize">Ad size</label>
                                            <input type="number" name="adsize" id="adsize"
                                                placeholder="Enter AD size" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="rate">Rate</label>
                                            <input type="number" name="rate" id="rate" placeholder="Enter Rate" />
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
                            <table class="table mt-4 mb-4" id="example">
                                <thead>
                                    <tr>
                                        <th>sr no.</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Rate</th>
                                        <th>Ad type</th>
                                        <th>Type of Advertise</th>
                                        <th>Page no.</th>
                                        <th>Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * from category order by id desc";
                                try
                                {
                                    $statement=$db->prepare($sql);
                                    $statement->setFetchMode(PDO::FETCH_ASSOC);
                                    $statement->execute();
                                    $table=$statement->fetchall();
                                }
                                catch(PDOException $error)
                                {
                                    LogError($error,__FILE__);
                                }
                                require("../admin/include/message.php");
                                if(isset($table)==true)
                                {   $count=1;
                                    foreach($table as $row)
                                    {
                                        if($count%2==0)
                                        {
                                            $color = "#FFFFFF";
                                        }
                                        else
                                        {
                                            $color= "#F9F9F9";
                                        }
                                ?>
                                
                                    <tr style="background-color:<?php echo $color?>">
                                        <td style="background-color:<?php $color ?>"><?php echo $count++; ?></td>
                                        <td style="background-color:<?php $color ?>"><?php echo $row['ctitle']; ?>
                                        <br>
                                        <a href="delete_catagory.php?categoryid=<?php echo $row['id'];?>& image=<?php echo $row['sampleimage'];?>" class="btn btn-danger">
                                        <i class="lni lni-trash-can"></i>
                                        </a>
                                        &nbsp;&nbsp;
                                        <a href="update_category.php?id=<?php echo $row['id'];?>" class="btn btn-success">
                                        <i class="lni lni-slice"></i>
                                        </a>
                                        </td>
                                        <td style="background-color:<?php $color ?>"><img
                                                src="../images/category/<?php echo $row['sampleimage']; ?>"
                                                width="100px" alt="">
                                            <br><br>
                                        </td>
                                        <td style="background-color:<?php $color ?>"><?php echo $row['rate']; ?></td>
                                        <td style="background-color:<?php $color ?>"><?php 
                                        if($row['adtype']=='1')
                                        {
                                            echo "Newspaper";
                                        }
                                        else
                                        {
                                            echo "Website";
                                        }
                                        ?></td>
                                        <td style="background-color:<?php $color ?>"><?php 
                                        if($row['subadtype']=='1')
                                        {
                                            echo "Text only";
                                        }
                                        else if($row['subadtype']=='2')
                                        {
                                            echo "Classified";
                                        }
                                        else
                                        {
                                            echo "Dispaly";
                                        }
                                        ?>
                                        </td>
                                        <td style="background-color:<?php $color ?>"><?php echo $row['pageno'];?></td>
                                        <td style="background-color:<?php $color ?>"><?php echo $row['adsize']; ?></td>
                                    </tr>
                                <?php
                                    } ?>
                                    </tbody>
                                    <?php
                                }
                               ?>
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