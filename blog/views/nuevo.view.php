<?php require '../views/header.php'; ?>


<section id="apply" class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title-header text-center">
                    <h1 class="section-title">Nuevo POST</h1>
                </div>
            </div>

            <div class="col-lg-12 col-xs-12 col-md-12 col-xs-12">
                <div class="container-form-apply">
                    <div class="form-wrapper-apply">

                        <form class="gform pure-form pure-form-stacked" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <!-- change the form action to your script url -->
                            <div class="row">

                                <div class="col-xs-12 col-md-12 form-line">
                                    <div class="form-group">
                                        <input style="border-radius: 20px;" type="text" class="form-control-apply form-control-apply-name" id="name" name="titulo" placeholder="Titulo" required>
                                        <input style="border-radius: 20px;" type="text" class="form-control-apply form-control-apply-name" id="name" name="video" placeholder="Link de Youtube">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <textarea style="border-radius: 20px;" class="form-control-apply" rows="4" id="message" name="texto" placeholder="¿Cuál crees que es el futuro del marketing?" required data-error="Por favor ingresa un mensaje"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 form-line">
                                    <div class="form-group">
                                        <input style="border-radius: 20px;" type="text" class="form-control-apply form-control-apply-name" id="name" name="extracto" placeholder="Resumen" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12 form-line">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="thumb" id="validatedCustomFile" required>
                                        <label class="custom-file-label" for="validatedCustomFile">
                                            <span id="cambiar">Choose file...</span>
                                        </label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-md-12">
                                    <div class="form-submit">
                                        <button type="submit" value="enviar" class="btn btn-common" name="add_apply" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Enviar ahora</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    </div>
                                </div>

                            </div>
                            <!--Customise the Thankyou Message People See when they submit the form: -->
                            <div class="thankyou_message" style="display:none;">

                                <center>
                                    <img src="src/apply/fondo - gracias por aplicar.png" alt="" srcset="">
                                    <a href="index.php" class="btn btn-custom btn-ready btn-lg btn-apply"><i class="fas fa-home"></i>Regresar al home</a>


                                </center>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--          

        <div class="col-12 white">
            <div class="section-title-header text-center">
                <h1>Próximos resultados en:</h1>
                <h2 id="demo"></h2>
            </div>
        </div> -->
        </div>


    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$("#validatedCustomFile").change(function(){
  var cambiar = $(this).val();
  var nombre_cambiar = cambiar.replace(/.*[\/\\]/, ''); //Eliminamos el path hasta el fichero seleccionado
  $("#cambiar").text(nombre_cambiar);
});
</script>