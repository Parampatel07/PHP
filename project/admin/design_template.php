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
                        <h3>Add new Template</h3>
                        <hr>
                        <div class="row mt-3">
                            <form action="submit/insert_template.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <?php
                                        $sql="SELECT id,ctitle from category";
                                        $statement=$db->prepare($sql);
                                        $statement->setfetchmode(PDO::FETCH_ASSOC);
                                        $statement->execute();
                                        $rows=$statement->fetchAll();
                                    ?>
                                    <div class="col-12">
                                    <?php
require("include/message.php");
                                        ?>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-2">
                                            <label class="form-label" for="catagory">Select category</label>
                                            <select name="catagory" class="form-control" name="catagory" id="catagory"
                                                aria-label="state" required>
                                                <option value="">Select Category</option>
                                                <?php                                          
                                            foreach($rows as $row)
                                            {
                                                echo "<option value='{$row['id']}'>{$row['ctitle']}</option>";
                                            }  
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="title" placeholder="Title" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-style-1 ">
                                            <label for="sample">Select photo</label>
                                            <input type="file" class="form-control-file" name="sample" id="sample"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-style-1 ">
                                            <label for="description">Description</label>
                                            <textarea class="form-control" placeholder="Description" id="description"
                                                name="description" style="height: 100px;" required></textarea>
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
                                        <td>Title</td>
                                        <td>Category</td>
                                        <td>Photo</td>
                                        <td>Description</td>
                                    </tr>
                                </thead>
                                <?php
                            try
                            {
                                $sql="SELECT t.* , c.ctitle from template t, category c where t.categoryid=c.id";
                                $statement=$db->prepare($sql);
                                $statement->setfetchmode(PDO::FETCH_ASSOC);
                                $statement->execute();
                                $table=$statement->fetchAll();
                                // var_dump($row);
                            }
                            catch(PDOException $error)
                            {
                                LogError($error,__FILE__);
                            }
                            ?>
                                <tbody>
                                    <?php
                                    $count=1;
                                    foreach($table as $row)
                                    {
                                        // var_dump($row);
                                        ?>
                                    <tr>
                                        <td><?php echo $count++ ?></td>
                                        <td>
                                           <a href="submit/delete_template.php?templateid=<?php echo $row['id'] ?>&image=<?php echo $row['image']; ?>">
                                            <i class="lni lni-trash-can"></i></a>
                                            &nbsp;&nbsp;
                                            <a href="update_design_template.php?templateid=<?php echo $row['id']?>"><i class="lni lni-slice"></i></a>
                                        </td>
                                        <td><?php echo $row['title']?></td>
                                        <td><?php 
                                           echo $row['ctitle'];
                                        ?></td>
                                        <td><img src="../images/template/<?php echo $row['image'] ?>" height="100px"
                                                width="100px" alt=""></td>
                                        <td><?php echo $row['description']?></td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
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