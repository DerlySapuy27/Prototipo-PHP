<?php include '../views/header.php'; ?>

<center>
<div class="grid text-center">
  <div class="g-col-6"><div class="container-fluid tainer consulta">
        <div class="row">
            <div class="col-md">
                <header class="py-3">
                    <h2 class="text-center Titulos">Consulta un Usuario</h2>
                </header>
            </div>
        </div>
    </div>

    <form action="" method="post">
    <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h5 class="text-center subTitulos">Documento del Usuario</h2>
                </div>
                <div class="col-5">
                    <input type="text" name="ConsultarDocumento" id="ConsultarDocumento" class="form-control">
                </div>
                <div class="col-3">
                    <input type="submit" name="btn-consultar" value="Consultar" class="btn btn-dark">
                </div>
            </div>
            
        </div>
        <p>------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
        <br>

        <table>
            <tr>
                <td colspan="2">
                    <div>
                    <?php
                        include_once "../models/conexion2.php";

                        if(isset($_POST['btn-consultar'])){

                            $documento = $_POST['ConsultarDocumento'];
                            $existe = 0;
                            if($documento==""){
                                echo "<br><div class='alert alert-warning' role='alert'>Completa este campo obligatorio!</div>";
                            }
                            else{
                                $resultado = mysqli_query($conectar, "SELECT * FROM usuario WHERE numero_Documento = '$documento' ");
                                while($consulta = mysqli_fetch_array($resultado)){
                                    echo "
                                        <table class='table'>
                                            <tr>
                                                <td><center><b> # </b></center></td>
                                                <td><center><b> Fecha de Ingreso </b></center></td>
                                                <td><center><b> Tipo de Documento </b></center></td>
                                                <td><center><b> Documento </b></center></td>
                                                <td><center><b> Nombres </b></center></td>
                                                <td><center><b> Apellido </b></center></td>
                                                <td><center><b> Telefono </b></center></td>
                                                <td><center><b> Email </b></center></td>
                                            </tr>
                                            <tr>
                                                <td><center>".$consulta['item']."</center></td>
                                                <td><center>".$consulta['fecha']."</center></td>
                                                <td><center>".$consulta['tipo_Documento']."</center></td>
                                                <td><center>".$consulta['numero_Documento']."</center></td>
                                                <td><center>".$consulta['nombre']."</center></td>
                                                <td><center>".$consulta['apellido']."</center></td>
                                                <td><center>".$consulta['telefono']."</center></td>
                                                <td><center>".$consulta['email']."</center></td>
                                            </tr>
                                        </table>
                                    ";
                                    $existe++;
                                }
                                if ($existe==0){
                                    echo "<br><div class='alert alert-danger' role='alert'>El numero de documento digitado no Existe!</div>";
                                }
                            }
                        }
                    ?>       
                    </div>
              
                    </div>
                </td>
            </tr>
        </table>

    </form>
</center>
<br><br><br><br><br><br><br><br><br><br><br>

<?php include '../views/footer.php'; ?>

