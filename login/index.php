<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de ventas</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/templates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!--Librería de Sweet Alert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
      $respuesta = $_SESSION['mensaje']; ?>
        <script>
        Swal.fire({
            icon: "error",
            title: "<?php echo $respuesta; ?>",
            text: "Datos Incorrectos",
            showConfirmButton: false,
            timer: 1500
        });
        </script>

        <?php
      session_destroy();
    }
    ?>

        <!-- /.login-logo -->
        <center>
            <img src="https://img.freepik.com/vector-gratis/impulsar-ilustracion-concepto-abstracto-ventas_335657-1833.jpg?w=740&t=st=1701355419~exp=1701356019~hmac=50633718d846b3098a02622b714e25ce5de8eac32768f5fd80485800ee289667"
                alt="" width="250px">
        </center>

        <br>
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="../public/templates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de </b>VENTAS</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingrese sus datos</p>

                <form action="../app/controllers/login/ingreso.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password_user" class="form-control" placeholder="Password" id="password_user">
                        <div class="input-group-append">
                            <div class="input-group-text"  onclick="mostrarPassword()" style="cursor: pointer">
                                <span class="fas fa-lock" ></span>
                            </div>
                        </div>
                    </div>

                    <script>
                    function mostrarPassword() {
                        var tipo = document.getElementById("password_user");
                        if (tipo.type == "password") {
                            tipo.type = "text";
                        } else {
                            tipo.type = "password";
                        }
                    }
                    </script>
                    <!--<div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>-->
                    <!-- /.col -->

                    <hr>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
            </div>
            </form>

            <!--<div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>-->
            <!-- /.social-auth-links -->
            <!--
      <p class="mb-1">
        <a href="../public/templates/AdminLTE-3.2.0/forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="../public/templates/AdminLTE-3.2.0/register.html" class="text-center">Register a new membership</a>
      </p>
    </div>-->
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../public/templates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/templates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/templates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>