<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card mt-5 shadow">
                    <div class="card-header bg-danger text-light">
                        <h3>Table Generator with loop</h3>
                    </div>
                    <div class="card-body">
                        <form action="submit/loop_novalidate.php" method="post" novalidate>
                            <div class="mb-3">
                                <label for="row" class="form-label">Enter number of Rows
                                </label>
                                <input type="number" name="row" id="row" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="colum" class="form-label">Enter number of Colums</label>
                                <input type="number" name="colum" id="colum" class="form-control" required/>
                            </div>
                            <div class="mb-3">
                                <label for="loop" class="form-label">Select Loop</label>
                                <select name="loop" class="form-select" required id="loop">
                                    <option value="">Select</option>
                                    <option value="1">While</option>
                                    <option value="2">For</option>
                                    <option value="3">Do while</option>
                                </select>
                            </div>
                            <div class="mb-3 text-end">
                                <button class="btn btn-danger" action="submit" required>
                                    Create Table
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>