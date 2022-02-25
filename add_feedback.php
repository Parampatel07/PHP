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
                    <div class="col-lg-7">
                        <div class=" mb-4">
                            <h2 class="heading text-center">Review/Feedback</h2>
                        </div>
                    </div><!-- end col-->
                </div><!-- end row-->
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card p-3">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <label for="feedback" class="form-label">Feedback title</label>
                                        <input type="text" name="feedback" id="feedback" placeholder="Feedback title"
                                            class="form-control">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea id="mytextarea">Hello, World!</textarea>
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-primary">Send feedback</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- end row -->
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