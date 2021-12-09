<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/svg" sizes="16x16" href="../../assets/images/logo-icon.svg">
    <!-- fontaweson by Pablo kit-->
    <script src="https://kit.fontawesome.com/ab3362b7fa.js" crossorigin="anonymous"></script>
    <title>Xtreme admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--This page plugins-->

</head>

<body>

    <?php
        require 'validarIngreso.php';
    ?>

    <div id="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- Contenido -->

        <!-- terminan modales -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/background/cinema.jpg) no-repeat center center;"> <!--   -->
            <div class="auth-box on-sidebar" style="background-color: #f4f4f7c5">
                <div id="loginform">
                    <div class="logo mt-5">
                        <h1 class="card-title">Tu Próxima <br><span class="small">Serie o Pelicula Favorita</span></h1>
                        <img src="../../assets/images/cinemaEstelar.svg" alt="logo" width="250px"/>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal mt-3" action="cinemaIngreso.php" method="POST">
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            </div>
                            <input type="email" class="form-control form-control-lg " name="email"
                                placeholder="Ingrese su correo" required>
                        </div>
                        <div class="input-group mt-1">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
                            </div>
                            <input type="password" class="form-control form-control-lg " name="password"
                                placeholder="Ingrese su contraseña" required>
                        </div>

                        <div class="form-group text-center">
                            <p>Recuerda que debes estar registrado en el sistema.</p>
                            <button class="btn btn-block btn-lg btn-dark mt-3" type="submit">
                                <i class="fas fa-search mr-2"></i>Ingresar
                            </button>
                        </div>
                    </form>
                    <div class="form-group m-b-0 m-t-10">
                        <div class="col-sm-12 text-center">
                            ¿No tienes cuenta? <a href="cinemaRegistro.php" class="text-info m-l-5"><b>¡Registrate!</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.horizontal-fullwidth.js"></script>
    <script src="../../dist/js/app-style-switcher.horizontal.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="../../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../../assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="../../assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
    <!--This page JS-->

    <?php
        mysqli_close($mysqli);
    ?>

</body>

</html>
