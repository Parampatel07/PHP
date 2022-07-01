<?php 
require_once("inc2/header.php");
extract($_POST);
// var_dump($_POST);
if($room=='1')
{
    $org_room="Semi dulex";
}
elseif($room=='2')
{
    $org_room="Dulex";
}
elseif($room=='3')
{
    $org_room="Day care";
}
elseif($room=='4')
{
    $org_room="General";
}
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
<?php 
$summary="A)	Investigation Summary
Post verification of this case with
Hospital authority (Name : $hos_contact_per  and Contact No $hos_number
and
Patient (Name :) $pat_name and Contact No : $pat_number 
we confirmed that:
1.	Patient $pat_name  is admitted at $hos_name / $city.
2.	Patient is admitted on $add_date  under care of treating Dr. $tre_doctor [ $qua_doc &nbsp $reg_doc_number]
3.	 Patient is admitted in $org_room  ward .
4.	Patient has complaints of $complain .
5.	$hos_name / $city  consists of $beds beds with all in house facility of pharmacy and pathology, hence verified details of pharmacy and pathology as well with hospital authority.
6.	As per desktop verification, Insured KYC details and doctor registration details found to be genuine.
B)	Evidence :
Audio Recording
C)	Conclusion
The case seems to be clean and hence recommend to process as per policy terms and conditions
";
?>
<textarea name="summary" class="form-control" id="" cols="30" rows="20"><?php  echo $summary ?></textarea>
<div class="col-12 mt-4 text-end">
<a href="cash_inv.php" class="btn btn-danger">Back</a>
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