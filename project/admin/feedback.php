<?php
require_once("include/header.php");
require_once("../inc/connection.php");
require_once("include/verify_login.php");
?>
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
                        <?php
require("include/message.php");
try {
                            $sql ="SELECT feedback.* ,a.name, ab.id 'advertiseid' FROM feedback ,advertiser a, advertise_book ab WHERE feedback.id=a.id and feedback.id=ab.id";
                            $statement = $db->prepare($sql);
                            $statement->setfetchmode(PDO::FETCH_ASSOC);
                            $statement->execute();
                            $table=$statement->fetchAll();
                        } catch (PDOException $error) {
                            LogError($error, __FILE__);
                        }
                        ?>
                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                                <thead>
                                    <tr>
                                        <td>Sr no.</td>
                                        <td>Customer</td>
                                        <td>Advertiser id</td>
                                        <td>Title</td>
                                        <td>Description</td>
                                        <td>Status</td>
                                        <td>Operation</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count=0;
                                    foreach($table as $row)
                                    {
                                        ?>
                                    <tr>
                                        <td><?php echo $count++ ?></td>
                                        <td><?php echo $row['name'];  ?></td>
                                        <td><?php echo $row['advertiseid'];?></td>
                                        <td><?php echo $row['title'];?></td>
                                        <td><?php echo $row['description'];?></td>
                                        <?php $current="Delevired";
                                        $color="success";
                                        if($row['status']==0)
                                        {
                                            $current="Sending";
                                            $color="warning";
                                        }
                                        ?>
                                        <td class="bg-<?php echo $color;?> text-light"><?php echo $current ?></td>
                                        <td>
                                            <h1 class=" text-danger text-center">
                                                <i class="lni lni-trash-can"></i>
                                            </h1>
                                        </td>
                                        <td>
                                            <h1 class=" text-success text-center">
                                                <a href="feedback_reply.php?customerid=<?php echo $row['id'] ?>&advertiseid=<?php echo $row['advertiseid']; ?>&feedbackid=<?php echo $row['id']; ?>"> <i class="lni lni-comments-reply"></i></a>
                                            </h1>
                                        </td>
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