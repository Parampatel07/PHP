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
                        <h3>Edit Operator</h3>
                        <hr>
                        <?php
                        require("include/message.php");
                        try {
                            $sql = "SELECT * from operators WHERE id=?";
                            $statement = $db->prepare($sql);
                            $statement->setfetchmode(PDO::FETCH_ASSOC);
                            $statement->bindparam(1, $_REQUEST['operatorid']);
                            $statement->execute();
                            $row = $statement->fetch();
                            // var_dump($row);
                        } catch (PDOException $error) {
                            LogError($error, __FILE__);
                        }
                        ?>
                        <div class="row mt-3">
                            <form action="submit/update_operator.php" enctype="multipart/form-data" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <input type="hidden" name="operatorid" value="<?php echo $row['id']; ?>">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="mobnumber">Mobile number</label>
                                            <input type="number" name="mobnumber" id="mobnumber" value="<?php echo $row['mobile']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="fullname">Full name</label>
                                            <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-style-1 ">
                                            <label for="date">Select dateof birth</label>
                                            <input type="date" name="date" id="date" value="<?php echo $row['dob']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 float-end">
                                    <input type="submit" value="Update Operator" class="btn btn-success"></input>
                                    <a href="operators.php" class="btn btn-danger">Back</a>
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