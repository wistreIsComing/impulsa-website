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
                                <div class="email-head-title">Nuevo Post<span class="icon mdi mdi-edit"></span>
                                </div>
                            </div>
                            <div class="email-compose-fields">
                                <div class="to">
                                    <div class="form-group row pt-0">
                                        <label class="col-md-1 control-label">Titulo:</label>
                                        <input type="hidden" value="<?php echo $post['blog_id']; ?>" name="id">
                                        <div class="col-md-11">
                                            <input type="text" name="titulo" id="inputtext3" value="<?php echo $post['blog_title']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="to cc">
                                    <div class="form-group row pt-2">
                                        <label class="col-md-1 control-label">Link YT</label>
                                        <div class="col-md-11">
                                            <input type="text" name="video" id="inputtext3" value="<?php echo $post['blog_video']; ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="subject">
                                    <div class="form-group row pt-2">
                                        <label class="col-md-1 control-label">Extracto</label>
                                        <div class="col-md-11">
                                            <input class="form-control" name="extracto" value="<?php echo $post['blog_extracto']; ?>" type="text" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="subject">
                                    <div class="form-group row pt-2">
                                        <label class="col-md-1 control-label">Imagen</label>
                                        <div class="col-md-11">
                                            <input type="file" name="thumb" id="inputtext3" class="form-control">
                                            <input type="hidden" value="<?php echo $post['blog_thumb']; ?>" name="thumb-guardada"> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email editor">
                                <div class="col-md-12 p-0">
                                    <div class="form-group">
                                        <label class="control-label sr-only" for="summernote">Texto </label>
                                        <textarea class="form-control" id="summernote" name="texto" rows="6" placeholder="Write Descriptions"><?php echo $post['blog_texto']; ?></textarea>
                                    </div>
                                </div>
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

