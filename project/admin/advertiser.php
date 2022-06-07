<?php require_once("include/header.php");
require_once("include/verify_login.php");
require_once("../inc/connection.php");
try
{
    $sql="SELECT a.*,p.status FROM advertiser a,payment p where a.id=p.advertiserid ";
    $statement=$db->prepare($sql);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
    $statement->execute();
    $table=$statement->fetchall();
}
catch(PDOException $error)
{
    LogError($error,__FILE__);
}
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
            <div class="row align-items-center">
                <div class="col-md-12">
                <div class="titlemb-30">
                        <h2>Customer Management</h2>
                    </div>
                    <div class="card mt-4 shadow p-5">
                        <h3>Existing Customer</h3>
                        <hr>

                        <div class="table-responsive">
                            <table class="table table-striped display mt-4 mb-4" id="example">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Contact person</td>
                                    <td>Mobile(s)</td>
                                    <td>Last payment details</td>
                                    <td>Payment due</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count=1;
                                foreach($table as $row)
                                {

                               
                                ?>
                                <tr>
                                    <td><?php echo $count++?></td>
                                    <td><a href="advertiser_detail.php"><?php echo $row['name']; ?></a></td>
                                    <td><?php echo $row['contactperson']; ?></td>  
                                    <td><?php echo $row['contactno1'];?><br><?php echo $row['contactno2']; ?></td>
                                    <td><?php echo $row['last_payment_date'];?><br><?php echo $row['last_payment']; ?></td>
                                    <td><a href="booked_advertise.php"><?php echo $row['paymentdue']; ?></a></td>
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