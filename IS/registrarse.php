<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="codigoOldTownRoad/css/bootstrap.min.css">
  <link rel="stylesheet" href="codigoOldTownRoad/css/all.min.css"> <!--font awesome-->
  <link rel="stylesheet" href="codigoOldTownRoad/css/main.css">

  <title>Registrarse</title>
</head>

<body class="bg-primary">
  <div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
                <div class="text-center d-flex">
                  <a href="index.php">
                    <i class="fas fa-chevron-left text-dark mr-4"></i>
                    <i class="fas fa-hotel text-dark h5"></i>
                    <span class="login-logo h4 mb-3 text-dark">Old<strong>Town</strong>Road</span>
                  </a>
                </div>
                <div class="intro-login my-4">
                  <h1 class="h4 font-weight-bold">Crea tu cuenta</h1>
                  <p class="font-2">Crea una cuenta para utilizar los servicios de OldTownRoad.com fácilmente.</p>
                </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="nombres" placeholder="Nombres">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="apellidos" placeholder="Apellidos">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="correo" placeholder="Correo Eléctronico">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="contrasena" placeholder="Contraseña">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="repcontrasena" placeholder="Repetir Contraseña">
                  </div>
                </div>
                <a href="login.php" class="btn btn-primary btn-user btn-block">
                  Registrar Cuenta
                </a>
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Registrarse con Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Registrarse con Facebook
                </a>
              </form>
              <hr>
              <div class="text-center field-btn">
                <a class="medium" href="olvido-contrasena.php">Olvidaste tu Contraseña?</a>
              </div>
              <div class="text-center field-btn">
                <a class="medium" href="login.php">Ya tienes una Cuenta? Ingresa!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- audio de fondo -->
  <audio autoplay loop>
    <source src="codigoOldTownRoad/audio/music_background_2.mp3" type="audio/mpeg">
    <source src="codigoOldTownRoad/audio/music_background_2.ogg" type="audio/ogg">
      Tu navegador no soporta este elemento de audio.
  </audio>

  <!-- scripts -->
  <script src="codigoOldTownRoad/jQuery/jquery-3.4.1.min.js"></script>
  <script src="codigoOldTownRoad/js/popper.min.js"></script>
  <script src="codigoOldTownRoad/js/bootstrap.min.js"></script>
  <script src="codigoOldTownRoad/jQuery/jquery.easing.min.js"></script>
  <script src="codigoOldTownRoad/js/validarFormularios.js"></script>
  <script src="codigoOldTownRoad/jQuery/main.js"></script>
</body>

</html>
