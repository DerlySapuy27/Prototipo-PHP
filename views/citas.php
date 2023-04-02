<?php
include_once '../models/conexionuno.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$consulta = "SELECT * FROM citas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<!Doctype html>
<html lang="es">
<head>
	
	
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		
		<!-- Poper Bootstrap --> 
	    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://kit.fontawesome.com/dcb1bbced2.css" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/dcb1bbced2.js" crossorigin="anonymous"></script>

  <!------ CSS-------->
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
          <a class="nav-link active"  action="citas.php">Citas</a>
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
<div class="container">
	<h1 class="text-center">Agenda de Citas</h1>
	<br>
		<br>
<table class="table table-striped">
   <thead>
    <tr>
	   <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora</th>
      <th scope="col">Motivo</th>
    </tr>
  </thead>
		
  <tbody>
  <?php
			foreach($usuarios as $filtro){
			?>
			<tr>
				<td><?php echo $filtro['id_citas']?></td>
				<td><?php echo $filtro['fecha']?></td>
				<td><?php echo $filtro['hora']?></td>
				<td><?php echo $filtro['motivo']?></td>
		<td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-file-pen"></button></td>
			
			
		<td><button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="fa-solid fa-trash-can"></i></button></td>
		
				</tr>
				<?php
			}
				?>
  </tbody>
</table>
        </div>
        <!--- Modal de editar --->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edicion de Cita</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../controller/editar.php" method="post">
				<input type="hidden" name="id" id="update_id">
					<div class="form-group">
					<label for="">Fecha</label>
					<input type="datetime-local" name="fecha" id="fecha" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="">Hora</label>
					<input type="text" name="hora" id="hora" class="form-control">
					</div>
					
					<div class="form-group">
					<label for="">Motivo</label>
					<input type="text" name="motivo" id="motivo" class="form-control">
					</div>
					
		   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </div>
	</form>
      </div>
   
    </div>
  </div>
</div>
<!---- Eliminar --->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="eliminar">Eliminar dato Seleccionado</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  <h4>Quieres Eliminar datos seleccionado</h4>
       <form action="../controlador/eliminar.php" method="post">
		   <input type="text" name="id" id="delete_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
		  </form>
    </div>
  </div>
</div>

<script>
$('.editbtn').on('click',function(){
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
	 return $(this).text();
	});
	$('#update_id').val(datos[0]);
	$('#fecha').val(datos[1]);
	$('#hora').val(datos[2]);
	$('#motivo').val(datos[3]);
	
});

</script>
	<script>
$('.deletebtn').on('click',function(){
	
	$tr=$(this).closest('tr');
	var datos=$tr.children("td").map(function(){
	 return $(this).text();
	});
	
	$('#delete_id').val(datos['0']);
	
});

</script>
                </div>
            </div>
        </div>
    </div>
</div><br><br><br><br><br>















<!-- Footer -->
<footer class="footer">
<section class="footer_container container">
<nav class="nav nav--footer">
<h2 class="footer_title">Agencia de Citas</h2>
<ul class="nav_link nav_link--footer">
    <li class="nav_items">
        <a href="http://localhost/prototypePHP/index.php" class="nav_links" id="fin">Inicio</a>
    </li><br><br>
    <li class="nav_items">
        <a href="http://localhost/prototypePHP/Views/formulario.php" class="nav_links">Registro</a>
    </li><li class="nav_items">
        <a href="http://localhost/prototypePHP/Controller/consulta.php" class="nav_links">Consulta</a>
    </li>
    <li class="nav_items">
        <a href="#r" class="nav_links">Contacto</a>
    </li>
    <li class="nav_items">
        <a href="#codigo" class="nav_links">Agenda</a>
    </li>  
</ul>
</nav>
<form  class="footer_form">
    <h2 class="footer_newsletter">¡Nuestra Atención es Primordial!</h2>
</form>

</section>
<section class="footer_copy container">
    <div class="footer_social">
        <a href="https://www.facebook.com/cefahuila" class="footer_icons"><img src="./img/svg/facebook.svg" class="footer_img"></a>
        <a href="https://twitter.com/CEFAcomunica" class="footer_icons"><img src="./img/svg/twiter.svg" class="footer_img"></a>
    </div>
    <h3 class="footer_copyright">Derechos Reservados &copy; Yuderly Sapuy</h3>
</section>
</body>
</html>
