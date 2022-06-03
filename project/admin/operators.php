<?php
session_start();
require_once("../inc/connection.php");
require_once("include/header.php") ?>
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
                        <?php
                        require("include/message.php");
                        ?>
                        <div class="row mt-3">
                            <form action="submit/insert_operators.php" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="fullname">Full name</label>
                                            <input type="text" name="fullname" id="fullname" placeholder="Full name" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="mobnumber">Mobile number</label>
                                            <input type="number" name="mobnumber" id="mobnumber" placeholder="Mobile number" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="date">Select dateof birth</label>
                                            <input type="date" name="date" id="date" />
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
                                <?php
                                $sql = "SELECT * from operators order by id desc";
                                try {
                                    $statement = $db->prepare($sql);
                                    $statement->SetFetchMode(PDO::FETCH_ASSOC);
                                    $statement->execute();
                                    $table = $statement->fetchall();
                                } catch (PDOException $error) {
                                    LogError($error, __FILE__);
                                }
                                require("include/message.php");
                                if (isset($table) == true) {
                                    $count = 0;
                                    // var_dump($table);
                                ?>
                                    <tbody>
                                        <?php
                                        foreach ($table as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $count = $count + 1; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['fullname'] ?></td>
                                                <td><?php echo $row['mobile'] ?></td>
                                                <td><?php echo $row['dob'] ?></td>
                                                <td width="50%"><?php echo $row['last_login_date'] ?></td>
                                                <td>
                                                    <a href="submit/delete_operator.php?operatorid=<?php echo $row['id']; ?>"><i class="lni lni-trash-can"></i></a>
                                                    &nbsp;&nbsp;
                                                    <a href="edit_operator.php?operatorid=<?php echo $row['id']; ?>">
                                                        <i class="lni lni-slice"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                            </table>
                        <?php
                                }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======== main-wrapper end =========== -->
        <?php require_once("include/script.php") ?>
</body>

</html>