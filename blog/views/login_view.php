<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo RUTAADMIN; ?>/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            color: #c79c57;
            background-color: #f3dab8;
        }

        .card{
            box-shadow: 0px 1px 10px 4px rgba(10, 10, 10, 0.22);
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="<?php echo RUTAADMIN;?>/aaa.png" width="100%" alt="logo"></a><span class="splash-description">Por favor identifiquese.</span></div>
            <div class="card-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" name="username" type="text" placeholder="Usuario" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" name="password" type="password" placeholder="Clave">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg btn-block">Iniciar sesion</button>
                </form>
            </div>

        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>