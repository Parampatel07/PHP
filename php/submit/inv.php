<?php 
require_once("inc2/header.php");
?>
</head>

<body>
    <div class="splash active">
        <div class="splash-icon"></div>
    </div>
    <div class="wrapper">
        <?php
		require_once("inc2/menu.php");
		?>
        <div class="main">
            <main class="content">
                <div class="container-fluid">
                    <div class="header">
                        <h1 class="header-title">
                        REIMBURSEMENT CLEAN FORMAT
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1>REIMBURSEMENT CLEAN FORMAT</h1>
                                </div>
                                <div class="card-body">
                                    <div class="my-5">
                                        <form action="submit_rem.php" method="POST"
                                            enctype="multipart/form-data" name="form1">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter presenting complaints
                                                        </label>
                                                        <input type="text" name="complain" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter addmission date
                                                        </label>
                                                        <input type="text" name="add_date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter discharge date
                                                        </label>
                                                        <input type="text" name="dis_date" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter room category
                                                        </label>
                                                        <select class="form-select" name="room">
                                                            <option value="1">Semi dulex</option>
                                                            <option value="2">Dulex</option>
                                                            <option value="3">day care</option>
                                                            <option value="4">general </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter hospital amount
                                                        </label>
                                                        <input type="text" name="amount" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter contact person name 
                                                        </label>
                                                        <input type="text" name="hos_contact_per" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter hospital number
                                                        </label>
                                                        <input type="text" name="hos_number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter treating doctor
                                                        </label>
                                                        <input type="text" name="tre_doctor" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter qualification of doctor
                                                        </label>
                                                        <input type="text" name="qua_doc" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter registration number
                                                        </label>
                                                        <input type="text" name="reg_doc_number" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter patient name
                                                        </label>
                                                        <input type="text" name="pat_name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter patient number
                                                        </label>
                                                        <input type="text" name="pat_number" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter hospital name
                                                        </label>
                                                        <input type="text" name="hos_name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter city
                                                        </label>
                                                        <input type="text" name="city" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">
                                                            Enter number of beds
                                                        </label>
                                                        <input type="text" name="beds" class="form-control" required>
                                                    </div>
                                                </div>
                                                
                                                <div class="mt-2 text-end">
                                                    <input type="submit" name="submit" class="btn btn-primary"
                                                        value="Save category">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php
	require_once("inc2/script.php");
	?>
</body>

</html>