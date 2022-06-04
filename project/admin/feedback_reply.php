<?php require_once("include/header.php");
require_once("../inc/connection.php");
require_once("include/verify_login.php");
?>
<?php
try {
    $sql = "SELECT email from advertiser where id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $_REQUEST['customerid']);
    $statement->setfetchmode(PDO::FETCH_ASSOC);
    $statement->execute();
    $table = $statement->fetch();
} catch (PDOException $error) {
    LogError($error, __FILE__);
}
?>
</head>

<body>
    <?php require_once("include/sidebar.php"); ?>
    <!-- ======== main-wrapper start =========== -->
    <?php require_once("include/wrapper.php"); ?>
    <!-- ========== section end ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30"></div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="title mb-30">
                        <h2>Customer's Feedback</h2>
                    </div>
                    <div class="card mt-3 shadow p-4">
                        <h3>Compose Mail</h3>
                        <hr>
                        <?php
include("include/message.php")
                        ?>
                        <div class="row mt-3">
                            <form action="submit/feedback_reply_admin.php" enctype="multipart/form-data" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-style-1 ">
                                            <input type="hidden" name="customerid" value="<?php echo $_REQUEST['customerid']; ?>">
                                            <input type="hidden" name="advertiseid" value="<?php echo $_REQUEST['advertiseid'] ?>">
                                            <input type="hidden" name="feedbackid" value="<?php echo $_REQUEST['feedbackid'];?>">
                                            <label for="custemail">Customer's Email</label>
                                            <input type="email" name="custemail" id="custemail" name="custemail" readonly required value="<?php echo $table['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="input-style-1 ">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <!-- Create the editor container
                                        <div id="editor" style="height: 100px;">
                                           
                                        </div> -->
                                        <textarea class="form-control" placeholder="Message" id="editor"  style=" height:100px;"name="message" rows="10"></textarea>

                                    </div>
                                    <div class="mb-3 mt-3 text-end ">
                                        <input type="submit" class="btn btn-success" value="Send Mail"></input>
                                        <a class="btn btn-danger" href="feedback.php" value="">Back</a>
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