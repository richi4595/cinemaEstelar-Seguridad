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

<body style="background:url(../../assets/images/background/biblioteca.jpg) no-repeat center center;">
    <?php
        session_start();

        $email=$_SESSION['email'];
        if(!$email)
            header("Location: cinemaIngreso.php");
    ?>

    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid" style="background:url(../../assets/images/background/biblioteca.jpg) no-repeat center center;">
                <div class="row">
                    <!--primera columna-->
                    <div class="col-md-12 text-center mb-4 mt-4">
                        <div class="card" style="border-radius: 10px">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3> Bienvenido</h3>
                                        <br> <br>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="cerrarSesion.php"><button type="button" class="btn btn-block btn-dark"><i class=""></i>Cerrar sesión</button></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="eliminarCuenta.php"><button type="button" class="btn btn-block btn-dark"><i class=""></i>Eliminar cuenta</button></a>
                                        <br>
                                    </div>
                                    <div class="col-md-9"></div>
                                </div>
                            </div>
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

</body>

</html>
