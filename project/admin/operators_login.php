<?php require_once("include/header.php") ?>
<style>
  .signin-wrapper
  {
    min-height: auto !important;
  }
  body
  {
    background-image: url("images/try3.jpg");
    background-size: 1200px 700px;
  }
  .card
  {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  }
</style>
</head>

<body>
  <section class="signin-section mt-4">
    <div class="container-fluid">
      <div class="col-lg-4 offset-md-4 shadow">
        <div class="card shadow">
        <div class="signin-wrapper">  
          <div class="form-wrapper">
            <form action="#">
              <div class="row">
                <div class="col-12">
                <h1 class="text-center mb-5">
                Operator Login
                <br>
                <br>    
                Login Form   </h1>
                  <div class="input-style-1">
                    <label ><h4>Email</h4></label>
                    <input type="email" class="form-control" placeholder="Enter your registered email here" />
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="input-style-1">
                    <label><h4>Password</h4></label>
                    <input type="password" placeholder="Enter your Password here" />
                  </div>
                </div>
                <div class="col-xxl-6 col-lg-12 col-md-6">
                  <div class="
                            text-start text-md-end text-lg-start text-xxl-end
                            mb-30
                          ">
                    <a href="../admin/forgot_password.php" class="hover-underline">Forgot Password?</a>
                  </div>
                </div>
                <!-- end col -->
                <div class="col-12">
                  <div class="
                            button-group
                            d-flex
                            justify-content-center
                            flex-wrap
                          ">
                    <button type="submit" class="
                              main-btn
                              primary-btn
                              btn-hover
                              text-center
                            ">
                      Login 
                    </button>
                  </div>
                </div>
              </div>
              <!-- end row -->
            </form>
          </div>
          </div>
        </div>
        </div>
        
      </div>
      <!-- end col -->
    </div>
    <!-- end row -->
    </div>
  </section>
  <!-- ======== main-wrapper end =========== -->

  <?php require_once("include/script.php") ?>
</body>

</html>