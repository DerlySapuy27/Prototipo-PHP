<?php include 'header.php' ?>
<center>
<div class="container-fluid tainer consulta">
    <div class="row">
        <div class="col-md">
            <header class="py-3">
                <h2 class="text-center Titulos">Registro de Ingreso de Usuarios</h2>
            </header>
        </div>
    </div>
</div>
<div class="col-md-6">
    <div class="container">
        <div class="card">
            <form class="p-4" action="../Controller/registrar.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-6">
                            <label class="form-label">Fecha</label>
                            <input type="datetime-local" class="form-control" name="Fecha" autofocus require>
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Tipo de Documento</label>
                            <select class="form-control" name="Tipo" autofocus required>
                                <option value="">---Seleccione---</option>
                                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                                <option value="Cedula de Ciudadania">Cédula de Ciudadanía</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Numero de Documento</label>
                            <input type="number" class="form-control" name="Documento" autofocus required>
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="Nombre" autofocus required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control" name="Apellido" autofocus required>
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Telefono</label>
                            <input type="number" class="form-control" name="Telefono" autofocus required>
                        </div>
                        <div class="mb-6">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control" name="Email" autofocus required>
                        </div>
                        <div class="d-grid gap-2">
                            <br>
                            <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
</center>
<br>
<?php include 'footer.php' ?>