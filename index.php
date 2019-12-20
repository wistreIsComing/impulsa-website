<?php
session_start();
require 'requirelanguage.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php require('Common/head.php'); ?>

<body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
        <!-- Navbar Start -->
        <?php require('Common/nav.php'); ?>
        <!-- Navbar End -->

        <!-- Main Carousel Section Start -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <div class="wallpaper">

                <center>
                    <img id="lettering" src="src/iconos/lettering.png" alt="" srcset="">
                    <h3 class="sub"><?php echo $agencia; ?></h3>
                </center>
            </div>
        </div>
        <!-- Main Carousel Section End -->
    </header>

    <!-- Header Area wrapper End -->

    <!-- about us Section Start -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $us; ?></h1>

                    </div>
                </div>
                <div class="col-12 row section-padding-us">
                    <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
                        <div class="videoWrapper">
                            <!-- Copy & Pasted from YouTube -->
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/7QzI-hLbTfg" class="lazyload" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <?php echo $descrip; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $team; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <!--TULIOO!!-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="hh team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Tulio-1.jpg" />
                                <img class="top" width="240" height="240" src="src/team/Tulio-2.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $tulio; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--JUAN!!!-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Juan-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/Juan-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $juan; ?>
                        </div>

                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--LEO!!!-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Leo-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/Leo-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $leo; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Argenis-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Argenis-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/Argenis-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $Argenis; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Rafael-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Rafael-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/Rafael-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $rafa; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Will-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/wil-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/wil-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $will; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Yoge-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.8s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/jorge-2.jpg" />
                                <img class="top" width="240" height="240" src="src/team/jorge-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $yorge; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--ENVIAR CV!!!-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.9s">
                        <div class="team-img">
                            <div id="blur">
                                <img style="filter: blur(15px);" class="bottom" width="240" height="240" src="src/team/Vivi-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text cv-overlay">
                            <?php echo $aplicaAqui; ?>

                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

            </div>

            <!--OCULTOOS!!!-->
            <div class="row" id="texto" style="display: none;">
                <!--Andrea-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/andrea-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/Andrea-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $andrea; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Rosaguis Sousa-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/rosaguis-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/rosaguis-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $rosi; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Orlando Caccavale-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/orli-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/orli-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $orlando; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Enrique Sandoval-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.2s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/enrique-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/enrique-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $enrique; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Samantha Alonso-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Samantha-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/samantha-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $samantha; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Rozmeyle Suarez-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/Rozme-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/Rozme-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $rozme; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Johnny Landaeta-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/johnny-2.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/johnny-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $jhonny; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

                <!--Edgardo Montolla-->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <!-- Team Item Starts -->
                    <div class="team-item wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-img">
                            <div id="cf">
                                <img class="bottom lazyload" width="240" height="240" data-src="src/team/edgardo.jpg" />
                                <img class="top lazyload" width="240" height="240" data-src="src/team/edgardo-1.jpg" />
                            </div>
                        </div>
                        <div class="info-text">
                            <?php echo $edgardo; ?>
                        </div>
                    </div>
                    <!-- Team Item Ends -->
                </div>

            </div>
            <!--Agrecar id cambia despues!!-->
            <a href="javascript:;" id="cambia" class="btn btn-common wow fadeInUp" data-wow-delay="0.2s" style="color: #fff;" onclick="FbotonOn(this)"><?php echo $btnMas; ?></a>
        </div>

    </section>
    <!-- Team Section End -->

    <!-- parallax-->
    <div id="parallax">
        <div class="section-titlee text-center center">
            <div class="overlay">

            </div>
        </div>
    </div>
    <!--End PAralalx-->

    <!-- que hacemos Section Start -->
    <section id="quehacemos" class="section-padding us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $queha; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="gallery-box especialidades wow fadeInLeftBig">
                        <div class="uk-panel image-container">
                            <h3 class="card-text"><?php echo $diseg; ?></h3>
                            <img class="uk-align-center uk-align-left@m uk-margin-remove-adjacent card-img-top img-fluid especialidades-img lazyload" data-src="src/iconos/desing-grafico.png" />
                            <?php echo $dise; ?>
                            <div class="uk-column-1-2">
                                <?php echo $espDise; ?>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <br>
                                <center>
                                    <button href="#modal-overflow-dg" uk-toggle type="submit" class="btn btn-common" id="form-submit"><?php echo $btndg; ?></button>
                                </center>
                                <div id="modal-overflow-dg" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><?php echo $modaldg; ?></h2>
                                        </div>
                                        <div class="uk-modal-body" uk-overflow-auto>
                                            <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net" action="./Common/mail/graphic-design.php">
                                                <!-- change the form action to your script url -->
                                                <div class="row">
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-name" style="border-radius: 20px;" id="name" name="name" placeholder="<?php echo $modalplanesNombre; ?>" pattern="[A-Za-zÑñ ]+" required data-error="Por favor ingrese su nombre">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" style="border-radius: 20px;" id="email" name="email" placeholder="<?php echo $modalplanesCorreo; ?>" required data-error="Por favor ingrese su E-mail">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" style="border-radius: 20px;" id="phone" name="telefono" placeholder="<?php echo $modalplanesTelefono; ?>" pattern="[0-9+]+$" required data-error="Por favor ingrese su numero de contacto">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-submit">
                                                            <button type="submit" class="btn btn-common" id="form-submit" name="submit"><i class="fas fa-arrow-down"></i><?php echo $descubrirplanes; ?></button>
                                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Customise the Thankyou Message People See when they submit the form:
                                                <div class="thankyou_message" style="display:none;">
                                                    <a class="btn btn-common" onclick="window.location.href='./Planes de servicios/PAQUETES DE SERVICIOS - diseno grafico.pdf'" style="color:white;"><i class="fas fa-arrow-down"></i><?php echo $descargarplanes; ?></a>
                                                </div> -->
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="gallery-box especialidades wow fadeInRightBig">
                        <div class="uk-panel download image-container">
                            <h3 class="card-text"><?php echo $mediosdig; ?></h3>
                            <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent img-fluid especialidades-img lazyload" data-src="src/iconos/Medios-digitales.png" />
                            <p><?php echo $mediosd; ?></p>
                            <div class="uk-column-1-2">
                                <ul>
                                    <?php echo $espMedios; ?>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <br>
                                <center>
                                    <button href="#modal-overflow-md" uk-toggle type="submit" class="btn btn-common" id="form-submit"><?php echo $btnmd; ?></button>
                                </center>
                                <div id="modal-overflow-md" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><?php echo $modalmd; ?></h2>
                                        </div>
                                        <div class="uk-modal-body" uk-overflow-auto>
                                            <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net" action="./Common/mail/digital-media.php">
                                                <!-- change the form action to your script url -->
                                                <div class="row">
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-name" style="border-radius: 20px;" id="name" name="name" placeholder="<?php echo $modalplanesNombre; ?>" pattern="[A-Za-zÑñ ]+" required data-error="Por favor ingrese su nombre">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" style="border-radius: 20px;" id="email" name="email" placeholder="<?php echo $modalplanesCorreo; ?>" required data-error="Por favor ingrese su E-mail">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" style="border-radius: 20px;" id="phone" name="telefono" placeholder="<?php echo $modalplanesTelefono; ?>" pattern="[0-9+]+$" required data-error="Por favor ingrese su numero de contacto">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-submit">
                                                            <button type="submit" class="btn btn-common" id="form-submit" name="submit"><i class="fas fa-arrow-down"></i><?php echo $descubrirplanes; ?></button>
                                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Customise the Thankyou Message People See when they submit the form:
                                                <div class="thankyou_message" style="display:none;">
                                                    <a class="btn btn-common" onclick="window.location.href='./Planes de servicios/PAQUETES DE SERVICIOS - medios digitales.pdf'" style="color:white;"><i class="fas fa-arrow-down"></i><?php echo $descargarplanes; ?></a>
                                                </div> -->
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                </div>


                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="gallery-box especialidades wow fadeInLeftBig">
                        <div class="uk-panel image-container">
                            <h3 class="card-text">Marketing</h3>
                            <img class="uk-align-center uk-align-left@m uk-margin-remove-adjacent card-img-top img-fluid especialidades-img lazyload" data-src="src/iconos/marketing.png" />
                            <p><?php echo $marketing; ?></p>
                            <div class="uk-column-1-2">
                                <ul>
                                    <?php echo $espMarketing; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                </div>

                <div class="col-md-12 col-sm-12 col-lg-12">
                    <div class="gallery-box especialidades wow fadeInRightBig">
                        <div class="uk-panel image-container">
                            <h3 class="card-text"><?php echo $desarrolloweb; ?></h3>
                            <img class="uk-align-center uk-align-right@m uk-margin-remove-adjacent card-img-top img-fluid especialidades-img lazyload" data-src="src/iconos/desarrollo-web.png" />
                            <p><?php echo $desarrollo; ?></p>
                            <div class="uk-column-1-2">
                                <ul>
                                    <?php echo $espDesarrollo; ?>
                                </ul>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <br>
                                <center>
                                    <button href="#modal-overflow-dw" uk-toggle type="submit" class="btn btn-common" id="form-submit"><?php echo $btndw; ?></button>
                                </center>
                                <div id="modal-overflow-dw" uk-modal>
                                    <div class="uk-modal-dialog">
                                        <button class="uk-modal-close-default" type="button" uk-close></button>
                                        <div class="uk-modal-header">
                                            <h2 class="uk-modal-title"><?php echo $modaldw; ?></h2>
                                        </div>
                                        <div class="uk-modal-body" uk-overflow-auto>
                                            <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net" action="./Common/mail/web-dev.php">
                                                <!-- change the form action to your script url -->
                                                <div class="row">
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-name" style="border-radius: 20px;" id="name" name="name" placeholder="<?php echo $modalplanesNombre; ?>" pattern="[A-Za-zÑñ ]+" required data-error="Por favor ingrese su nombre">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" style="border-radius: 20px;" id="email" name="email" placeholder="<?php echo $modalplanesCorreo; ?>" required data-error="Por favor ingrese su E-mail">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" style="border-radius: 20px;" id="phone" name="telefono" placeholder="<?php echo $modalplanesTelefono; ?>" pattern="[0-9+]+$" required data-error="Por favor ingrese su numero de contacto">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-line">
                                                        <div class="form-submit">
                                                            <button type="submit" class="btn btn-common" id="form-submit" name="submit"><i class="fas fa-arrow-down"></i><?php echo $descubrirplanes; ?></button>
                                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Customise the Thankyou Message People See when they submit the form:
                                                <div class="thankyou_message" style="display:none;">
                                                    <a class="btn btn-common" onclick="window.location.href='./Planes de servicios/PAQUETES DE SERVICIOS - desarrollo web.pdf'" style="color:white;"><i class="fas fa-arrow-down"></i><?php echo $descargarplanes; ?></a>
                                                </div> -->
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="uk-divider-icon">
                </div>
            </div>
        </div>
    </section>

    <!-- Proyectos-->
    <section id="gallery" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $proyectos; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="container wow fadeInLeft" data-wow-delay="0.5s">
                    <div uk-slider="center: true">

                        <div class="uk-position-relative uk-visible-toggle uk-light">
                            <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                <!--Casabe-->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="uk-card-media-top">
                                                <div class="card image-container">
                                                    <a href="src/mock ups/casabe sabroso/casabee.jpg" data-fancybox="casabe">
                                                    </a>
                                                    <div class="image-overlay">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                    <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/casabe sabroso/casabe.jpg" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $rebrandingpacking; ?></h3>

                                        </div>
                                        </a>

                                        <div style="display: none;">

                                            <a href="src/mock ups/casabe sabroso/casabe empaque-04.png" data-caption="This image has simple caption" data-fancybox="casabe" data-width="1500" data-height="1000"></a>


                                            <a href="src/mock ups/casabe sabroso/casabe-empaque-numero-2-front.jpg" data-fancybox="casabe" data-width="1500" data-height="1000"></a>


                                            <a href="src/mock ups/casabe sabroso/casabe-empaque-numero-2-back.jpg" data-fancybox="casabe" data-width="1500" data-height="1000"></a>
                                        </div>
                                    </div>
                                </li>
                                <!--Casabe-->

                                <!--KAVANA-->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="card image-container">
                                                <a href="src/mock ups/KAVANA/PORTADA.jpg" data-fancybox="kavana">
                                                </a>
                                                <div class="image-overlay">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/KAVANA/PORTADA-01.jpg" />
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $ecommerceads; ?></h3>
                                        </div>

                                    </div>
                                    <div style="display: none;">
                                        <a href="src/mock ups/KAVANA/Kavana LOGO-38.png" data-fancybox="kavana" data-width="1500" data-height="1000"></a>

                                        <a href="src/mock ups/KAVANA/Kavana-mockup-plantillas-porcelanato.jpg" data-fancybox="kavana" data-width="1500" data-height="1000"></a>

                                        <a href="src/mock ups/KAVANA/KAVANA-mockup-plantillas.jpg" data-fancybox="kavana" data-width="1500" data-height="1000"></a>
                                    </div>
                                </li>
                                <!--fin KAVANA-->

                                <!--KMART-->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="card image-container">
                                                <a href="src/mock ups/Kmart/PORTADA.jpg" data-fancybox="Kmart">
                                                </a>
                                                <div class="image-overlay">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/Kmart/PORTADA-01.jpg" />
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $diseñoedi; ?></h3>
                                        </div>
                                    </div>
                                    <div style="display: none;">
                                        <a href="src/mock ups/Kmart/Letter-Magazine-Mockup---Free-Version.jpg" data-fancybox="Kmart" data-width="1500" data-height="1000"></a>

                                        <a href="src/mock ups/Kmart/Magazine-Mockup.jpg" data-fancybox="Kmart" data-width="1500" data-height="1000"></a>

                                        <a href="src/mock ups/Kmart/us-letter-magazine-mockup-02.jpg" data-fancybox="Kmart" data-width="1500" data-height="1000"></a>


                                    </div>
                                </li>
                                <!--Fin Kmart-->

                                <!--Animacion-->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="card image-container">
                                                <a href="src/mock ups/animacion/hidro animacion 1.gif" data-fancybox="animacion">
                                                </a>
                                                <div class="image-overlay">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/animacion/hidroportada.png" />
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $motion; ?></h3>
                                        </div>

                                    </div>
                                    <div style="display: none;">
                                        <a href="src/mock ups/animacion/hidro animacion 3.gif" data-fancybox="animacion" data-width="1500" data-height="1000"></a>

                                        <a href="src/mock ups/animacion/hidro animacion 4.gif" data-fancybox="animacion" data-width="1500" data-height="1000"></a>
                                    </div>
                                </li>
                                <!--Fin animacion-->

                                <!--ADS para campañas -->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="card image-container">
                                                <a href="src/mock ups/aereon/Areon _ Big Business.jpg" data-fancybox="aereon">
                                                </a>
                                                <div class="image-overlay">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/aereon/Areon _ Big Business.jpg" />
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $adscampa; ?></h3>
                                        </div>
                                    </div>

                                </li>
                                <!--fin ADS para campañas -->

                                <!--Desarrollo de campañas-->
                                <li>
                                    <div class="uk-card uk-card-default">
                                        <div class="uk-card-media-top">
                                            <div class="card image-container">
                                                <a href="src/mock ups/lacuenta/la-cuenta-portada.jpg" data-fancybox="lacuenta">
                                                </a>
                                                <div class="image-overlay">
                                                    <i class="fa fa-search"></i>
                                                </div>
                                                <img class="card-img-top img-fluid lazyload" data-src="src/mock ups/lacuenta/la-cuenta-portada.jpg" />
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <h3 class="uk-card-title no-selection"><?php echo $desarrollodecamp; ?></h3>
                                        </div>
                                    </div>
                                    <div style="display: none;">
                                        <a href="src/mock ups/lacuenta/lacuenta.jpg" data-fancybox="lacuenta" data-width="1500" data-height="1000"></a>

                                    </div>
                                </li>
                                <!--Fin Desarrollo de campañas-->

                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                        </div>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                    </div>
                </div>

                <!--Agregar mas arriba de esto-->
            </div>
        </div>
        <!--Fin Proyectos-->

    </section>

    <!-- Parallax Section -->
    <div id="parallax2">
        <div class="section-titlee text-center center">
            <div class="overlay2">
                <div class="textooo">
                    <div class="row">
                        <div class="col-xs|sm|md|lg|xl-1-12">
                            <center>
                                <h1 style="color:white;"><?php echo $calltoaction; ?></h1>
                                <a class="btn btn-common page-scroll" href="#contactanos"><?php echo $contactanos; ?></a>
                            </center>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">

        <?php


        require 'blog/admin/config.php';

        require 'blog/functions.php';

        $conexion = conexion($bd_config);

        if (!$conexion) {
            echo "No conectado";
        }

        // $post_uno = $conexion->lastInsertId();
        $posts = obtenerProductos(4, $conexion);


        ?>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-cards">
                    <div class="band">
                        
                        <?php foreach ($posts as $post) : ?>
                
                            <div class="item-2 wow fadeInLeftBig" data-wow-delay="0.4s">
                                <a href="<?php echo RUTA; ?>/single.php?id=<?php echo $post['blog_id']; ?>" class="card">
                                    <div class="thumb" style="background-image: url('<?php echo RUTA; ?>/src/post/<?php echo $post['blog_thumb']; ?>');"></div>
                                    <article>
                                        <h1><?php echo $post['blog_title']; ?></h1>
                                        <p><?php echo $post['blog_extracto']; ?></p>
                                        <!-- <span> <img src="src/team/enrique-2.jpg" alt="" srcset=""> Harry Brignull</span> -->
                                        <span><?php echo fecha($post['blog_fecha']); ?></span>
                                    </article>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                    
                </div>
            </div>
            <center><a href="<?php echo RUTA; ?>" class="btn btn-common">Ir al blog <i class="fas fa-arrow-right"></i></a></center>
        </div>
    </section>
    <!-- Blog Section End -->

    <div id="parallax3">
        <div class="section-titlee text-center center">
            <div class="overlay3">

            </div>
        </div>
    </div>

    <!-- Contact Us Section -->
    <section id="contactanos" class="section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title-header text-center">
                        <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s"><?php echo $experienciaimpulsa; ?></h1>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-xs-12">
                    <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="form-wrapper">
                            <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net" action="https://script.google.com/macros/s/AKfycbzj1p2JBuffZr5KXiWSfl348Tm0ldk7I4wcMtn39GJgT3n2uco/exec">
                                <!-- change the form action to your script url -->
                                <div class="row">
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-name" style="border-radius: 20px;" id="name" name="name" placeholder="<?php echo $nombrefrom; ?>" pattern="[A-Za-zÑñ ]+" required data-error="Por favor ingrese su nombre">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="email" class="form-control" style="border-radius: 20px;" id="email" name="email" placeholder="<?php echo $correofrom; ?>" required data-error="Por favor ingrese su E-mail">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" style="border-radius: 20px;" id="phone" name="phone" placeholder=<?php echo $telefonofrom; ?> pattern="[0-9+]+$" required data-error="Por favor ingrese su numero de contacto">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-line">
                                        <div class="form-group">
                                            <select type="tel" class="form-control" style="border-radius: 20px;" id="country" name="Pais" required data-error="Por favor ingrese su numero de contacto">
                                                <?php echo $paisesfrom; ?>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" style="border-radius: 20px;" rows="4" id="message" name="message" placeholder="<?php echo $mensajefrom; ?>" required data-error="Por favor ingresa un mensaje"></textarea>
                                        </div>
                                        <div class="form-submit">
                                            <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i><?php echo $btnSend; ?></button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Customise the Thankyou Message People See when they submit the form: -->
                                <div class="thankyou_message" style="display:none;">
                                    <?php echo $graciasfrom; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Contact Us Section End -->

    <?php require('Common/footer.php'); ?>

    <div id="barraaceptacion" style="display: block;">
        <div class="inner">
            <?php echo $cookies; ?> |
            <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a>
            <!-- <a href="https://politicadecookies.com" target="_blank" class="info">Más información</a>-->
        </div>
    </div>

    <script>
        var valor = true

        function FbotonOn() {
            var uno = document.getElementById('cambia');
            valor ? uno.innerText = "Mostrar menos" : uno.innerText = "Mostrar más";
            valor = !valor
        }
    </script>

    <script>
        window.addEventListener("load", function(event) {
            lazyload();
        });
    </script>

</body>

</html>