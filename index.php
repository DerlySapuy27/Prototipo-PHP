
<?php 
    include_once "models/conexion.php";
    $sentencia = $bd -> query("SELECT * FROM usuario");
    $personas = $sentencia ->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ingreso de Usuarios</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS Framework Framework-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <link rel="stylesheet" href="Library/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="Library/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="Library/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="Library/AdminLTE/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body>
<div class="container mt-12">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- Primer Alerta -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Falta'){
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! <br></strong>Rellena los campos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
            <!-- Segunda Alerta -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Registrado'){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Registrado! <br></strong>Se agregaron los datos a la BD.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
            <!-- Tercera alerta -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Error'){
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error! <br></strong>Vuelva a intentar.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
            <!-- Cuarta alerta -->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Editado'){
            ?>
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Hecho! <br></strong>Los datos fueron actualizados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
            <!-- Quinta alerta --->
            <?php
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Eliminado'){
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">>
                    <strong>Hecho! <br></strong>Los datos fueron eliminados.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>
<!-- Navar -->
<nav class="navbar navbar-expand-lg fixed-top navColor">
  <div class="container-fluid">
    <div>
      <h1 class="title">Agencia de Citas</h1>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item subTitulos">
          <a class="nav-link active " href="http://localhost/prototypePHP/index.php">Inicio</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="http://localhost/prototypePHP/Views/formulario.php">Registro</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="http://localhost/prototypePHP/Controller/consulta.php">Consulta</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="#">Contacto</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="http://localhost/prototypePHP/Views/citas.php">Citas</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="http://localhost/prototypePHP/Views/agendar.php">Agendar Citas</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="http://localhost/prototypePHP/views/login.php">
    <button class="btn btn-outline-success" type="submit">Cerrar Sesion</button>
</form>
    </div>
  </div>
</nav>
<br><br><br>
<!-- Tabla de usuarios -->
        <div class="container-fluid tainer consulta">
            <div class="row">
                <div class="col-md">
                    <header class="py-3">
                        <h2 class="text-center Titulos">Lista de Usuarios </h2>
                    </header>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card">
                <div class="p-4">
                    <table class="table table-bordered table-striped subTitulos" id="example1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Fecha</th>
                                <th>Tipo de Documento</th>
                                <th>Numero de Documento</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($personas as $dato){ /* Trae la informacion dato por dato de la base de datos */     
                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->item; ?></td>
                                <td><?php echo $dato->fecha; ?></td>
                                <td><?php echo $dato->tipo_Documento; ?></td>
                                <td><?php echo $dato->numero_Documento; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->apellido; ?></td>
                                <td><?php echo $dato->telefono; ?></td>
                                <td><?php echo $dato->email; ?></td>
                                <td>
                                    <a type="button" class="text-success" href="Controller/editar.php?Item=<?php echo $dato->item?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                        </svg>
                                    </a>
                                    <a onclick="return confirm('Are you sure?');" class="text-danger" href="Controller/eliminar.php?item=<?php echo $dato->item?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>

    <?php include 'views/footer.php' ?>
</body>
</html>
