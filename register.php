<?php
include "service/database.php";

    $register_massage = "";

 if (isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    try {
        $sql ="INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
    if ($db->query($sql)) {
        $register_massage = "Daftar Akun Berhasil, Silahkan login";
            //  kalau gagal masuk.
            }else{
                $register_massage = "Daftar Akun Gagal, Silahkan coba lagi";
            }
        }catch (mysqli_sql_exception) { //catch butuh parameter
        $register_massage = "username sudah ada,silahkan ganti yang lain";
    }
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="assets/logo.png" type="image/x-icon" />
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <title>Jendela Belajar</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./assets/logo.png" width="40" />
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
    <!-- Register -->
    <section class="vh-100 bg-image" style="background-color: #ddd4d6;">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Buat Akun</h2>

                  <form>
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1cg">Nama</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example3cg">Email</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cg">Kata Sandi</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cdg">Ulangi Kata Sandi</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        Saya Setuju Dengan Semua <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button type="button" data-mdb-button-init data-mdb-ripple-init  class="btn btn-secondary btn-block btn-lg gradient-custom-4 text-body" >Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">
                      Sudah Punya Akun? <a href="./login.html" class="fw-bold text-body"><u>Login sini</u></a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Register -->

    <!-- JavaScript -->
    <script src="animation.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </body>
</html>
