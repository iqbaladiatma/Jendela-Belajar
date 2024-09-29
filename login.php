<?php 
        include("service/database.php");
        session_start();
        $login_massage="";
    if(isset($_SESSION["ls_login"])){
        header("location: dashboard.php");
    };
    if(isset($_POST["login"])){ 
        $username= $_POST["login"];
        $password= $_POST["password"];

        $sql = "SELECT * FORM users WHERE username='$username' AND password='$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0){ 
            $data= $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["password"] = $data["password"];

            header("location: index.html");
        }else{ 
            $login_massage="Kami Tidak Dapat Menemukan Akun Anda";
        }
        $db->close();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Jendela Belajar</title>
</head>
<body>
        <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./assets/logo.png" width="40">
          </a>
          <a class="navbar-brand" href="#home">Jendela Belajar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse end-0" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link page-scroll" aria-current="page" href="#home">Home</a>
              <a class="nav-link page-scroll" href="index.html#about">About Us</a>
              <a class="nav-link page-scroll" href="index.html#programs">Programs</a>
              <a class="nav-link page-scroll" href="index.html#course">Course</a>
              <a class="nav-link page-scroll" href="index.html#contact">Contact Me</a>
            </div>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <section class="vh-100" style="background-color: #ddd4d6;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="./assets/logo.png"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form>
      
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                          <span class="h1 fw-bold mb-0">Jendela Belajar</span>
                        </div>
      
                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masuk Ke Akun</h5>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example17">Alamat Email</label>
                        </div>
      
                        <div data-mdb-input-init class="form-outline mb-4">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" />
                          <label class="form-label" for="form2Example27">Kata Sandi</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                        </div>
      
                        <a class="small text-muted" href="#!">Lupa Kata Sandi?</a>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Tidak Memiliki Akun? <a href="./register.html"
                            style="color: #393f81;">Daftar Disini</a></p>
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       <!-- Login -->

        <!-- End Login -->

       <!-- JavaScript -->
      <script src="Login.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>