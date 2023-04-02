<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuarios</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- CSS Framework Framework-->
    <link rel="stylesheet" type="text/css" href="../css/stylelogin.css">

</head>
<body>

<!-- Formulario -->
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="../img/login.jpg"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Nuestra Atención es Primordial</h4>
                </div>

                <form method="post" action="../Controller/validar.php">
                  <p>Por favor, ingrese a su cuenta</p>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Nombre de Usuario</label>
                    <input type="text" name="username" id="form2Example11" class="form-control" placeholder="Nombre de usuario"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Contraseña</label>
                    <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Contraseña"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" class="btn btn-primary btn-block gradient-custom-2 mb-3 w-100" value="Iniciar Sesion">
                    <a class="text-muted" href="#!">Ovidaste tu Contraseña?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No  tienes una cuenta?</p>
                    <button type="button" class="btn btn-outline-primary">Crear una cuenta</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Nuestra Salud es primero</h4>
                <p class="small mb-0">El respeto conlleva atención o consideración hacia otra persona. Es uno de los valores humanos más importantes, ya que fomenta la buena convivencia entre personas muy diferentes. La responsabilidad. Supone el cumplimiento de las obligaciones, el tener cuidado a la hora de tomar decisiones o llevar a cabo una acción</p>
                <img src="../img/cliente.png" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>