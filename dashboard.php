<?php

include 'conexiondb.php';

session_start();

if(!isset($_SESSION['id'])){


    header('Location:http://localhost/prueba/index.php');
  

}



$conexion = conexion_db();

$registros = $conexion->query("SELECT * FROM servicios");


$resultado = $conexion->query("SELECT ROUND(SUM(importe),2) as resultado FROM servicios WHERE pagado = '' ");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dastone - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="default/assets/images/favicon.ico">

    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">

    <!-- App css -->
    <link href="default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>



<body class="">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand">
            <a href="index.html" class="logo">
                <span>
                    <img src="default/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="default/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                    <img src="default/assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar style="background-color: #101b30;">
            <ul class="metismenu left-sidenav-menu">
                <li class="menu-label mt-0">Menues</li>
                <li>
                    <a href="dashboard.php"><i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a>
                </li>
                <li>
                    <a href="cuentas_a_pagar.php"><i data-feather="dollar-sign" class="align-self-center menu-icon"></i><span>Cuentas a pagar</span></a>
                </li>


                <hr class="hr-dashed hr-menu">
                <li>
                    <a href="datos_personales.php"><i data-feather="user" class="align-self-center menu-icon"></i><span>Datos personales</span></a>
                </li>

                <li>
                    <a href="destruir_sesion.php"><i data-feather="log-out" class="align-self-center menu-icon"></i><span>Cerrar
                            sesión</span></a>
                </li>

            </ul>


        </div>
    </div>
    <!-- end left-sidenav-->


    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">


                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile">
                            <i data-feather="menu" class="align-self-center topbar-icon"></i>
                        </button>
                    </li>
                    <li class="creat-btn">
                        <div class="nav-link">
                            <a class=" btn btn-sm btn-soft-primary nuevo" data-toggle="modal" data-target="#nuevoRegistro" type="button"><i class="fas fa-plus me-2"></i>Agregar servicio</a>
                        </div>
                    </li>
                    <li class="creat-btn" onclick="print_pdf()">
                        <div class="nav-link">
                            <a class=" btn btn-sm btn-soft-primary nuevo" type="button"><i class="fas fa-print me-2"></i>Imprimir</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">Página Principal</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end page-title-box-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <!-- end page title end breadcrumb -->
                <div class="row">

                    <!--end col-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Servicios</h4>
                                </div>
                                <!--end card-header-->
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped mb-0">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th style="font-size: 13px;"><b>ID</b></th>
                                                    <th style="font-size: 13px;"><b>Servicio</b></th>
                                                    <th style="font-size: 13px;"><b>1er Vto.</b></th>
                                                    <th style="font-size: 13px;"><b>2do Vto.</b></th>
                                                    <th style="font-size: 13px;"><b>Importe</b></th>
                                                    <th style="font-size: 13px;"><b>Pagado</b></th>
                                                    <th style="font-size: 13px;"><b>Opciones</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                while ($fila = $registros->fetch_assoc()) {
                                                ?>

                                                    <tr style="text-align: center;">
                                                        <td> <?php echo $fila['id'] ?> </td>
                                                        <td> <?php echo $fila['servicio'] ?> </td>
                                                        <td> <?php echo $fila['1er_vto'] ?> </td>
                                                        <td> <?php echo $fila['2do_vto'] ?> </td>
                                                        <td>
                                                            <?php

                                                            //Mostramos en la vista los numeros decimales con coma utilizando la funcion str_replace

                                                            $var = $fila['importe'];
                                                            $number = (string)$var;
                                                            $format_number = str_replace('.', ',', $number);
                                                            echo "$ " . $format_number;

                                                            ?>
                                                        </td>
                                                        <td> <?php echo $fila['pagado'] ?> </td>
                                                        <td>
                                                            <a data-toggle="modal" class="editar" data-target="#actualizarRegistro" type="button"><i class="las la-pen text-secondary" style="font-size: 25px;"></i></a>

                                                            <a data-toggle="modal" class="eliminar" data-target="#confirmarEliminacion" type="button">
                                                                <i class="las la-trash-alt text-secondary" style="font-size: 25px;margin-left:5px"></i></a>



                                                        </td>
                                                    </tr>

                                                <?php

                                                }

                                                ?>


                                            </tbody>
                                        </table>
                                        <!--end /table-->
                                        <div style="margin-top: 15px;">

                                            <br>TOTAL:

                                            <?php

                                            $TOTAL = mysqli_fetch_array($resultado, MYSQLI_NUM);

                                            //Reemplazo el valor importe que viene con coma a punto para poder guardarlo en mysql
                                            $var = $TOTAL[0];
                                            $number = (string)$var;
                                            $resultado_total = str_replace('.', ',', $number);


                                            echo "$ " . $resultado_total;

                                            ?>

                                            </br>
                                        </div>
                                    </div>
                                    <!--end /tableresponsive-->
                                </div>
                                <!--end card-body-->

                                <!-- MODAL ELIMINAR-->
                                <div class="modal fade" id="confirmarEliminacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
                                            </div>
                                            <div class="modal-body">
                                                ¿Está seguro que desea eliminar el servicio?
                                            </div>
                                            <!-- Formulario que se envia para eliminar el registro al hacer click en Confirmar -->
                                            <form action="eliminar_servicio.php" method="POST">
                                                <input type="hidden" name="eliminar_id" id="eliminar_id">
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Confirmar</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!-- MODAL EDITAR -->
                                <div class="modal fade" id="actualizarRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Actualizar Servicio</h5>
                                            </div>
                                            <form action="actualizar_servicio.php" method="POST">
                                                <div class="modal-body">
                                                    <input id="id_servicio" name="id_servicio" class="form-control" type="hidden">
                                                    <div class="mb-3 row">
                                                        <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Servicio</label>
                                                        <div class="col-sm-10">
                                                            <input id="servicio" name="servicio" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-email-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">1er Vto.</label>
                                                        <div class="col-sm-10">
                                                            <input id="ven_1" name="ven_1" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-tel-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">2do Vto.</label>
                                                        <div class="col-sm-10">
                                                            <input id="ven_2" name="ven_2" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-password-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Importe</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" style="float: left;width:10%;text-align:right" disabled value="$">
                                                            <input id="importe" name="importe" class="form-control" type="text" style="float: left;width:90%;">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-number-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Pagado</label>
                                                        <div class="col-sm-10">
                                                            <input id="pagado" name="pagado" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <!-- MODAL NUEVO -->
                                <div class="modal fade" id="nuevoRegistro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nuevo Servicio</h5>
                                            </div>
                                            <form action="guardar_servicio.php" method="POST">
                                                <div class="modal-body">
                                                    <input id="id_servicio" name="id_servicio" class="form-control" type="hidden">
                                                    <div class="mb-3 row">
                                                        <label for="example-text-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Servicio</label>
                                                        <div class="col-sm-10">
                                                            <input id="servicio" name="servicio" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-email-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">1er Vto.</label>
                                                        <div class="col-sm-10">
                                                            <input id="ven_1" name="ven_1" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-tel-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">2do Vto.</label>
                                                        <div class="col-sm-10">
                                                            <input id="ven_2" name="ven_2" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-password-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Importe</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" style="float: left;width:10%;text-align:right" disabled value="$">
                                                            <input id="importe" name="importe" class="form-control" type="text" style="float: left;width:90%;">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="example-number-input" class="col-sm-2 form-label align-self-center mb-lg-0 text-end">Pagado</label>
                                                        <div class="col-sm-10">
                                                            <input id="pagado" name="pagado" class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--end card-->
                        </div> <!-- end col -->

                    </div>

                </div>
                <!--end row-->


            </div><!-- container -->

            <footer class="footer text-center text-sm-start">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Dastone <span class="text-muted d-none d-sm-inline-block float-end">Developed By Gaston
                    Barbaccia</span>
            </footer>
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->




    <!-- jQuery  -->
    <script src="default/assets/js/jquery.min.js"></script>
    <script src="default/assets/js/bootstrap.bundle.min.js"></script>
    <script src="default/assets/js/metismenu.min.js"></script>
    <script src="default/assets/js/waves.js"></script>
    <script src="default/assets/js/feather.min.js"></script>
    <script src="default/assets/js/simplebar.min.js"></script>
    <script src="default/assets/js/moment.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <script src="plugins/apex-charts/apexcharts.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/pages/jquery.analytics_dashboard.init.js"></script>

    <!-- App js -->
    <script src="default/assets/js/app.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Funcion para recorrer los elementos de la fila y luego enviar el elemento ID al input eliminar_id -->
    <script>
        $('.eliminar').on('click', function() {

            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });

            $('#eliminar_id').val(datos[0]);
        });


        $('.editar').on('click', function() {

            $tr = $(this).closest('tr');
            var datos = $tr.children("td").map(function() {
                return $(this).text();
            });

            let sin_espacios = datos[4].replace(/ /g, "");
            let importe = sin_espacios.replace('$', '');


            $('#id_servicio').val(datos[0]);
            $('#servicio').val(datos[1]);
            $('#ven_1').val(datos[2]);
            $('#ven_2').val(datos[3]);
            $('#importe').val(importe);
            $('#pagado').val(datos[5]);

            var inputs = $("input[type=text]");
            for (var i = 0; i < inputs.length; i++) {
                var aux = $(inputs[i]).val().trim();
                $(inputs[i]).val(aux);
            }
        });

        function print_pdf() {


            $('td:nth-child(7),th:nth-child(7)').hide();

            window.print();

            $('td:nth-child(7),th:nth-child(7)').show();

        }

    </script>


</body>


</html>