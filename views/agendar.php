<?php
include_once '../models/conexionuno.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM citas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html><!---- HTML5 --->
  <html>
      <head>
  <!----  ICONO PESTAÑA--->
  <html>
  <link rel="shorticut" href="">


  <!--- bootstrap--->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
  <!------ Poper Bootstrap-------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!------ CSS-------->
  <link rel="stylesheet" type="text/css" href="../css/style.css">


      </head>

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
          <a class="nav-link active" href="http://localhost/prototypePHP/Views/citas.php">Citas</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="localhost/prototypePHP/views/agendar.php">Agendar Cita</a>
        </li>
        <li class="nav-item subTitulos">
          <a class="nav-link active" href="#">Contacto</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="http://localhost/prototypePHP/views/login.php">
    <button class="btn btn-outline-success" type="submit">Cerrar Sesion</button>
</form>
    </div>
  </div>
</nav>
<br><br><br>

      <!------ GRILLAS-------->
<div class="container text-center">
  <div class="row">
    <div class="col-8">
      <!-----FORMULARIO--->
     <div class="card" style="width: 38rem;">
     <div class="card-header">
        AGENDAMIENTO DE CITAS 
      </div>
      <form action="" method="post">
      <center> 
    
        <label> Fecha</label>
        <input type="date" name="fecha" class="form-control" placeholder="fecha"><br>
        <label> Hora</label>
        <input type="time"  name="hora" class="form-control" placeholder="Hora"><br>
        <label>Motivo</label>
        <input type="text"  name="motivo" class="form-control" placeholder="Motivo Cita"><br>
                    
        <input type="submit" name="btn_guardar" class="btn btn-success"  value="Guardar">
        <br>
        <br>
        </center> 

        <!------controlador guardar e insertar datos---->
        <?php
         include("../models/conexioncrud.php");
         if(isset($_POST['btn_guardar']))
                    {
                       
                        $fecha = $_POST['fecha']; 
                        $hora = $_POST['hora']; 
                        $motivo = $_POST['motivo'];
                        
                        
                        if($fecha=="" ||  $hora=="" || $motivo=="" || $id=="" )

                    {
                    echo "<script> alert('Todos los campos son obligatorios')
                    location.href = '../views/agendar.php'; </script>";
                    }
                    else{
                        $query = mysqli_query($conectar, "INSERT INTO citas(fecha, hora, motivo) 
                        values ( $fecha','  $hora', '  $motivo')");
                        
                        if($query){
                            echo"<script> alert('Registro Exitoso')
                            location.href = '../views/citas.php';</script>";
                        }
                    }
                }
                        ?>
       </form>
       </div>
       </div>
     
    <div class="col-4">
      <img src="../img/vaca.jpg" style="width:110%">
    </div>
  </div>
</div>


<br>
<?php include 'footer.php' ?>