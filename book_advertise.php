<?php require_once("inc/header.php")?>
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
    <?php require_once("inc/menu.php")?>
    <!-- Modal -->
    <!-- end modal -->
    <div class="overflow-hidden-x">
        <!-- Start Home -->
        <!-- End Home -->
        <!-- Start features -->
        <section class="section feature" id="features">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" mb-4">
                        <h2 class="heading text-center">Book Advertise</h2>
                        <div class="card p-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="https://picsum.photos/350/410" alt="">
                                </div>
                                <div class="col-md-8">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label for="addate" class="form-label">Add date</label>
                                                <input type="date" class="form-control" id="addate" name="addate"
                                                    placeholder="Addate">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="nodays" class="form-label">NO. of days</label>
                                                <input type="number" class="form-control" id="nodays" name="nodays"
                                                    placeholder="NO. of days">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="amount" class="form-label">Amount</label>
                                                <input type="text" class="form-control" id="amount" placeholder="Amount"
                                                    readonly>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <textarea id="mytextarea" rows="10">Hello, World!</textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-3 text-end">
                                            <input type="submit" class="btn btn-primary" value="Save">
                                            <input type="reset" class="btn btn-primary" value="Reset">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                </div>
            </div><!-- end container -->
        </section>
        <?php require_once("inc/footer.php")?>
        <!--end back-to-top-->
        <!--Custom js-->
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
        tinymce.init({
            selector: '#mytextarea'
        });
        </script>
        <?php require_once("inc/script.php")?>
</body>

</html>