<?php require 'views/header.php'; ?>


<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <form class="gform pure-form pure-form-stacked" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="page-header">
                            <div class="email-head">
                                <div class="email-head-title">Nuevo Coworker<span class="icon mdi mdi-edit"></span>
                                </div>
                            </div>
                            <div class="email-compose-fields">

                                <div class="to cc">
                                    <div class="form-group row pt-2">
                                        <label class="col-md-1 control-label">Nombre:</label>
                                        <div class="col-md-11">
                                            <input type="text" name="nombre" id="inputtext3" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="subject">
                                    <div class="form-group row pt-2">
                                        <label class="col-md-2 control-label">Foto de perfil:</label>
                                        <div class="col-md-10">
                                            <input type="file" name="thumb" id="inputtext3" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email editor">
                                <div class="email action-send">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <button class="btn btn-primary btn-space" type="submit"><i class="icon s7-mail"></i>Publicar</button>
                                            <a class="btn btn-secondary btn-space" type="button" href="<?php echo RUTAADMIN; ?>/posts.php"><i class="icon s7-close"></i> Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($errores)) : ?>
                            <div class="error">
                                <ul>
                                    <?php echo $errores; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </form>

                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
            </div>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>



<?php require 'views/footer.php'; ?>