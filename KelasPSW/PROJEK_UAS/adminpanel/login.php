  <?php
    session_start();
    require "../koneksi.php";
  ?>

  <!DOCTYPE html>
  <html lang="id">
      <head>
          <title>Login</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          
          <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

          <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
          <link rel="stylesheet" href="../css/animate.css">
          
          <link rel="stylesheet" href="../css/owl.carousel.min.css">
          <link rel="stylesheet" href="../css/owl.theme.default.min.css">
          <link rel="stylesheet" href="../css/magnific-popup.css">

          <link rel="stylesheet" href="../css/aos.css">

          <link rel="stylesheet" href="../css/ionicons.min.css">

          <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
          <link rel="stylesheet" href="../css/jquery.timepicker.css">

          
          <link rel="stylesheet" href="../css/flaticon.css">
          <link rel="stylesheet" href="../css/icomoon.css">
          <link rel="stylesheet" href="../css/style.css">
          <link rel="stylesheet" href="../css/css.css">
  
      </head>
      <body>
            <div class="full-wrapper">
              <div class="login-container">
                <h2>Login</h2>
                <form action="" method="post">
                  <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                  </div>
                  <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                  </div>
                  <div>
                    <button class="btn btn-primary p-3 px-xl-4 py-xl-3" type="submit" name="loginbtn">Login</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="">
              <?php
                if(isset($_POST['loginbtn'])){
                  $username = htmlspecialchars($_POST['name']);
                  $password = htmlspecialchars($_POST['password']);
                  
                  $query = mysqli_query($con, "SELECT * FROM users  WHERE name='$username'");
                  $countdata = mysqli_num_rows($query);
                  $data = mysqli_fetch_array($query);
                  
                  if($countdata>0){
                    if (password_verify($password, $data['password'])) {
                        $_SESSION['name'] = $data['name'];
                        $_SESSION['role'] = $data['role'];
                        $_SESSION['login'] = true;

                        if ($data['role'] === 'admin') {
                            header('Location: ../adminpanel');
                        } elseif ($data['role'] === 'customer') {
                            header('Location: ../index.html');
                        } else {  
                            // fallback jika role tidak dikenali
                            header('Location: login.php');
                        }

                        exit;
                    }
                    }
                  else{
                    ?>
                    <div class="error" role="alert">
                      Akun tidak tersedia
                    </div>
                    <?php
                  }
                }
              ?>
            </div>

          <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


          <script src="../js/jquery.min.js"></script>
          <script src="../js/jquery-migrate-3.0.1.min.js"></script>
          <script src="../js/popper.min.js"></script>
          <script src="../js/bootstrap.min.js"></script>
          <script src="../js/jquery.easing.1.3.js"></script>
          <script src="../js/jquery.waypoints.min.js"></script>
          <script src="../js/jquery.stellar.min.js"></script>
          <script src="../js/owl.carousel.min.js"></script>
          <script src="../js/jquery.magnific-popup.min.js"></script>
          <script src="../js/aos.js"></script>
          <script src="../js/jquery.animateNumber.min.js"></script>
          <script src="../js/bootstrap-datepicker.js"></script>
          <script src="../js/jquery.timepicker.min.js"></script>
          <script src="../js/scrollax.min.js"></script>
          <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>-->
          <script src="../js/google-map.js"></script>
          <script src="../js/main.js"></script>
          <script src="../js/javascript.js"></script>
          </body>
        </html>