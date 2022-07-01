<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- https://tcpdf.org/examples/example_001/ -->

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-6 offset-3 mt-5 mb-5">
                <div class="card mt-5 shadow">
                    <div class="card-header bg-success text-light">
                        <h2>PDF Generator</h2>
                    </div>
                    <div class="card-body">
                        <form action="pdf_lib.php" method="POST" >
                            <div class="mb-3">
                                <label for="author_name" class="form-label">Enter Author Name</label>
                                <input type="text" class="form-control" id="author_name" name="author_name">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Set Title for Pdf</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Enter Text in pdf file</label>
                                <textarea class="form-control" name="text" placeholder="Leave a comment here"
                                    id="text"></textarea>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="image">Select image file</label>
                                <input type="file" name="image" id="image">
                            </div> -->
                            <div class="mb-3 text-end">
                                <input type="submit" class="btn btn-success" value="Create Pdf">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>