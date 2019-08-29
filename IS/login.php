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

    <title>Ingresar</title>
</head>

<body class="bg-primary">
  <div class="container main-login">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center d-flex">
                    <a href="index.php">
                      <i class="fas fa-chevron-left text-dark mr-4"></i>
                      <i class="fas fa-hands-helping"></i>
                      <span class="login-logo h4 mb-3 text-dark"><strong>Exhsoft</strong></span>
                    </a>
                  </div>
                  <div class="intro-login my-4">
                    <h1 class="h4 font-weight-bold">Inicia Sesión</h1>
                    <p class="font-2">Puedes iniciar sesión con tu cuenta de OldTownRoad.com para acceder a nuestros servicios</p>
                  </div>
				  <!--Inicio Formualario-->
                  <form action="validarUsuario.php" method="POST" class="user">
				  <!--Funcion que verifica si los datos ingresados son correctos-->
                      <?php 
                  
                    /*La función isset() nos permite comprobar si una variable está definida,
                    devolviendo true si lo encuentra. es decir si la variable fué instanciada 
                    previamente utilizada o separada su espacio en memoria (declarada).*/
                      if (isset($_GET["errorusuario"])=="si")
                      {
                    ?> 
                      <b>Datos incorrectos</b> 
                    <?php
                      }
                      else
                      {
                    ?> 
                      Ingrese sus datos
                    <?php 
                      }
                    ?>
                    <div class="form-group">
                      <input name="usuario" type="text" class="form-control form-control-user" id="exampleInputEmail"placeholder="Ingresa tu correo eléctronico...">
                    </div>
                    <div class="form-group">
                      <input name="contraseña" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label font-2" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <button name="validar" type="submit" class="btn btn-primary btn-user btn-block">
                      Ingresar
                    </button>
                    <hr>
                    <a href="index.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw color-google"></i> Ingresar con Google
                    </a>
                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Ingresar con Facebook
                    </a>
                  </form>
                  <hr>
                  <div class="text-center field-btn">
                    <a class="medium" href="olvido-contrasena.php">Olvidaste la Contraseña?</a>
                  </div>
                  <div class="text-center field-btn">
                    <a class="medium" href="registrarse.php">Crear una Cuenta!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- scripts -->
  <script src="codigoOldTownRoad/jQuery/jquery-3.4.1.min.js"></script>
  <script src="codigoOldTownRoad/js/popper.min.js"></script>
  <script src="codigoOldTownRoad/js/bootstrap.min.js"></script>
  <script src="codigoOldTownRoad/jQuery/jquery.easing.min.js"></script>
  <script src="codigoOldTownRoad/js/validarFormularios.js"></script>
  <script src="codigoOldTownRoad/jQuery/main.js"></script>
</body>
</html>
