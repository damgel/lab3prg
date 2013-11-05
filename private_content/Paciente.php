<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Perfil Doctor</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/jqueryUI.css">
        <link rel="stylesheet" href="validacionStyle.css">
        <script src="../assets/js/jquery-v1.10.2.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery-ui.js"></script>
        <script src="../assets/js/jquery.validate.js"></script>   
        <script src="../assets/js/modernizr2.6.2.js"></script>
        <script src="../assets/js/holder.js"></script>
        <script src="../assets/js/validarRegEmpleador.js"></script>


        <style>
            .container
            {
                margin-top: 1%;
                max-width: 1034px;
            }
            .panel panel-primary
            {
                margin-top: 1%;
                display: center;
                max-width: 1034px;

            }
            h2
            {
                text-align: center;
            }
            #publicarOferta
            {
                text-align: right;

            }
        </style>

        <script>
            // fallback para el datepicker con jquery
            Modernizr.load({
                test: Modernizr.inputtypes.date,
                nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
                complete: function() {
                    $('input[type=date]').datepicker({
                        dateFormat: 'yy-mm-dd'
                    });
                }

            });
        </script>

    </head>
    <body>

        <div id="header" class="navbar navbar-default navbar-static-top">
            <?php
            include_once 'layout/private-header.php';
            ?>
        </div>
        <div id="contenedor" class="container">

            <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a href="#Datos">Datos</a></li>
                <li class=""><a href="#Expediente">Expediente</a></li>
                <li class=""><a href="#Citas">Citas</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="Datos">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Paciente</div>
                        <div class="panel-body">

                            <form action="#" id="paciente" method="POST" class="form-horizontal">
                                <div class="form-group">
                                    <label for="Nombre" class="col-lg-3 control-label">Nombre</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_pa" class="form-control" placeholder="Escriba un nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Apellido" class="col-lg-3 control-label">Apellido</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="apellido_pa" class="form-control" placeholder="Escriba un nombre" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fecha_na_pa" class="col-lg-3 control-label">Fecha de nacimiento:</label>
                                    <div class="col-lg-3">
                                        <input type="date"  class="form-control"><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Genero</label>
                                    <div class="col-lg-4">
                                        <input type="radio" name="geneno_pa" checked="" value="M">
                                        Masculino
                                        <input type="radio" name="genero_pa" value="F">
                                        Femenino   
                                    </div>  
                                </div>

                                <div class="form-group">
                                    <label for="telefono" class="col-lg-3 control-label">Telefono</label>
                                    <div class="col-lg-4">
                                        <input type="tel" name="telefono_pa" placeholder="Escriba un numero de telefono" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <label for="direccionPaciente" class="col-lg-3 control-label">Direccion actual</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="direccion_pa" class="form-control" placeholder="Escriba la direccion" required>

                                    </div>
                                </div>

                                <div class="form-group">    
                                    <label for="municipioPaciente" class="col-lg-3 control-label">Municipio</label>
                                    <div class="col-lg-6">
                                        <input type="text" name="municipio_pa" class="form-control" placeholder="Municipio" required>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="departamento" class="col-lg-3 control-label">Departamento</label>
                                    <div class="col-lg-4">
                                        <select name="departamento_pa" class="form-control" required="">
                                            <option value="NONE">- Seleccione -</option>
                                            <option value="San Salvador">San Salvador</option>
                                            <option value="La Paz">La Paz</option>
                                            <option value="San Miguel">San Miguel</option>
                                            <option value="La Union">La Union</option>
                                            <option value="La Libertad">La Libertad</option>
                                            <option value="Santa Ana">Santa Ana</option>
                                            <option value="Sonsonate">Sonsonate</option>
                                            <option value="Ahuachapan">Aguachapan</option>
                                            <option value="San Vicente">San Vicente</option>
                                            <option value="Chalatenango">Chalatenango</option>
                                            <option value="Cabanias">Cabañas</option>
                                            <option value="Cuscatlan">Cuscatlan</option>
                                            <option value="Usulutan">Usulutan</option>
                                            <option value="Morazan">Morazan</option>
                                        </select>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center>
                                        <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Guardar</a>
                                        <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Modificar</a>
                                    </center>
                                </div>

                            </form>
                            <div class="table-responsive">
                                <?
                                include_once '../clases/db_connect.php';
                                $tabla = "table ";
                                echo "<table class=" . $tabla . ">";
                                echo "<tr>";
                                echo "<td><b>Cod Pa</b></td>";
                                echo "<td><b>Nombre Pa</b></td>";
                                echo "<td><b>Apellido Pa</b></td>";
                                echo "<td><b>Fecha Na Pa</b></td>";
                                echo "<td><b>Edad Pa</b></td>";
                                echo "<td><b>Genero Pa</b></td>";
                                echo "<td><b>Telefono Pa</b></td>";
                                echo "<td><b>Direccion Pa</b></td>";
                                echo "<td><b>Municipio Pa</b></td>";
                                echo "<td><b>Departamento Pa</b></td>";
                                echo "</tr>";
                                $result = mysql_query("SELECT * FROM `paciente`") or trigger_error(mysql_error());
                                while ($row = mysql_fetch_array($result)) {
                                    foreach ($row AS $key => $value) {
                                        $row[$key] = stripslashes($value);
                                    }
                                    echo "<tr>";
                                    echo "<td valign='top'>" . nl2br($row['cod_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['nombre_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['apellido_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['fecha_na_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['edad_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['genero_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['telefono_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['direccion_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['municipio_pa']) . "</td>";
                                    echo "<td valign='top'>" . nl2br($row['departamento_pa']) . "</td>";
                                    echo "<td valign='top'><a href=modificaraPaciente.php?cod_pa={$row['cod_pa']}>Edit</a></td><td><a href=eliminarPaciente.php?cod_pa={$row['cod_pa']}>Delete</a></td> ";
                                    echo "</tr>";
                                }
                                echo "</table>";
                                echo "<a href=agregarPaciente.php>Nuevo Paciente</a>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Expediente">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Ficha</div>
                        <div class="panel-body">

                            <h1 align="center">FICHA PARA DIAGNOSTICO ORAL</h1>

                            <form action="#" id="paciente" method="POST" class="form-horizontal">

                                <div class="form-group">
                                    <label for="Nombre" class="col-lg-3 control-label">Paciente</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="nombre_pa" class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Edad Paciente" class="col-lg-3 control-label">Edad</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="edad_pa" class="form-control" required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Expediente N°" class="col-lg-3 control-label">Expediente N°</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="no_ex" class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Lugar de origen°" class="col-lg-3 control-label">Lugar de origen</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="direccion_pa"class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Referido de" class="col-lg-3 control-label">Referido de</label>
                                    <div class="col-lg-3">
                                        <input  type="text" name="referido" class="form-control"required><br>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Fecha" class="col-lg-3 control-label">Fecha</label>
                                    <div class="col-lg-3">
                                        <input  type="date" name="fecha_consulta" class="form-control"required><br>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <label for="Mensaje" class="col-lg-3 control-label">Motivo de consulta</label>
                                    <div class="col-lg-6">
                                        <textarea name="textarea" name="motivo_consulta" class="form-control col-lg-6" rows="4" required> </textarea>

                                    </div>
                                </div>


                                <div class="form-group">    
                                    <label for="Mensaje" class="col-lg-3 control-label">Antecedentes medicos</label>
                                    <div class="col-lg-6">
                                        <textarea name="textarea" class="form-control col-lg-6" rows="4" required> </textarea>

                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <center>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Guardar</a>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Modificar</a>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="tab-pane" id="Citas">
                    <div class="panel panel-primary">

                        <div class="panel-heading">Seleccione fecha para proxima cita</div>
                        <div class="panel-body">
                            <form action="#" id="busquedaCita" class="form-horizontal">
                                <div class="form-group">
                                    <label for="numero_expediente" class="col-lg-3 control-label">Numero de expediente:</label>
                                    <div class="col-lg-3">
                                        <input type="text" name="numero_exp" class="form-control "   placeholder="-----------" required>
                                    </div>

                                </div> 
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label for="Nombre_doc" class="col-lg-3 control-label">Doctor: </label>
                                        <div class="col-lg-6">
                                            <input type="text" name="nombre_doc" class="form-control" placeholder="Escriba nombre" required>
                                        </div>
                                    </div>
                                </div>
                                <label for="Fecha_Cita" class="col-lg-3 control-label">Proxima Cita:</label>
                                <div class="col-lg-3">
                                    <input type="date"  class="form-control"><br>
                                    <br>
                                    <label for="hora_Cita" class="col-lg-2 control-label">Hora:</label>
                                    <div class="col-lg-10">
                                        <input type="time"  class="form-control">  
                                    </div>
                                    <br>
                                    <br>

                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Guardar</a>
                                    <a href="#" class="btn btn-primary btn-large"><i class="glyphicon glyphicon-search"></i> Limpiar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    $('#myTab a').click(function(e) {
                        e.preventDefault();
                        $(this).tab('show');
                    });
                </script>

            </div>
        </div>
    </body>
    <div class="footer">
        <style>
            .footer
            {

                padding: 10px;
                margin: 10px;
            }
        </style>
        <?php
        include_once 'layout/private-footer.php';
        ?>
    </div>
</html>
