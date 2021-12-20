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

    <!-- App css -->
    <link href="default/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="default/assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="default/assets/images/logo-sm-dark.png" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started Dastone</h4>
                                    <p class="text-muted  mb-0">Sign in to continue to Dastone.</p>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <ul class="nav-border nav nav-pills" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab" role="tab">Iniciar sesión</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#Register_Tab" role="tab">Registrarse</a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="LogIn_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form" action="login.php" method="post">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="email">Correo electrónico</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="password">Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <br>
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Ingresar<i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group row my-3">
                                                <div class="col-sm-12" style="text-align: center;">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Olvidó su contraseña?</a>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                    </div>

                                    <div class="tab-pane px-3 pt-3" id="Register_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form" action="dashboard.php" method="post">
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="nombre">Nombre</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="apellido">Apellido</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido">
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label class="form-label" for="useremail">Correo electrónico</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" id="useremail" placeholder="Ingrese su correo electrónico">
                                                </div>
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="userpassword">Contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Ingrese una contraseña">
                                                </div>
                                            </div>
                                            <!--end form-group-->

                                            <div class="form-group mb-2">
                                                <label class="form-label" for="conf_password">Confirmar contraseña</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Ingrese nuevamente su contraseña">
                                                </div>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <button class="btn btn-primary w-100 waves-effect waves-light" type="button">Registrarse <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end form-group-->
                                        </form>
                                        <!--end form-->
                                        <p class="my-3 text-muted">Ya tiene una cuenta?<a href="index.php" class="text-primary ms-2">Iniciar sesión</a></p>
                                    </div>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Gaston Barbaccia © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->




    <!-- jQuery  -->
    <script src="default/assets/js/jquery.min.js"></script>
    <script src="default/assets/js/bootstrap.bundle.min.js"></script>
    <script src="default/assets/js/waves.js"></script>
    <script src="default/assets/js/feather.min.js"></script>
    <script src="default/assets/js/simplebar.min.js"></script>


</body>

</html>