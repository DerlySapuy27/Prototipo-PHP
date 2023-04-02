<?php include '../views/header.php' ?>

<?php
    include("../models/conexion3.php");
    $con=conectar();

    $id = $_GET['Item'];
    $sql = "SELECT * FROM usuario WHERE item='$id'";
    $query = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($query);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
    <h2 class="text-center Titulos">Actualizacion de informacion:</h2>
        <div class="col-md-4">
            <div class="card">
                <form action="editarProcesos.php" class="p-4" method="post">
                    <div class="mb-3">
                        <label class="form-label">Fecha:</label>
                        <input type="datetime-local" class="form-control" name="fecha" required value="<?php echo date ('Y-m-d\TH:i:s', strtotime($row['fecha']));?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo:</label>
                        <select class="form-control" name="tipo_Documento" autofocus required value="<?php echo $row['tipo_Documento']; ?>">
                                    <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                    <option value="Cedula de Ciudadania">Cedula de Ciudadania</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Documento:</label>
                        <input type="number" class="form-control" name="numero_Documento" required value="<?php echo $row['numero_Documento']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required value="<?php echo $row['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" required value="<?php echo $row['apellido']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono:</label>
                        <input type="number" class="form-control" name="telefono" required value="<?php echo $row['telefono']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required value="<?php echo $row['email']; ?>">
                    </div>
                    <div>
                        <div class="d-grid">
                            <input type="hidden" name="item" value="<?php echo $row['item'];?>">
                            <input type="submit" class="btn btn-primary" value="Editar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php include '../views/footer.php'?>
