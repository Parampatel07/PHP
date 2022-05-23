<?php
require_once("include/verify_login.php");
require_once("include/header.php"); 
?>
</head>

<body>
  <?php require_once("include/sidebar.php") ?>

  <!-- ======== main-wrapper start =========== -->
  <?php require_once("include/wrapper.php") ?>
  <!-- ========== section end ========== -->

  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="titlemb-30">
            <h2>Change password</h2>
          </div>
          <div class="card mt-3 shadow p-4">
            <form action="submit/update_password.php" method="post">
              <?php
require_once("include/message.php");
              ?>
              <div class="input-style-1 ">
                <label>Enter old password</label>
                <input type="password" name="oldpassword" placeholder="Old password goes here" />
              </div>
              <!-- end input -->
              <div class="input-style-2">
                <label>Enter new password </label>
                <input type="password" name="newpassword" placeholder="Enter new password here" />
              </div>
              <!-- end input -->
              <div class="input-style-3">
                <label class="form-label">Confirm new password</label>
                <input type="password" name="conpassword" placeholder="Re-entre new password" />
              </div>
              <div class="mb-3 float-end">
                <input type="submit" class="btn btn-success" value="Save Changes"></input>
                <input type="reset" class="btn btn-danger"></input>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>
  <!-- ======== main-wrapper end =========== -->

  <?php require_once("include/script.php") ?>
</body>

</html>