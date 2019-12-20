<?php require 'views/header.php'; ?>
<br>


    <!-- Header Area wrapper Starts -->


        <div id="post-header" class="page-header">
            <div class="background-img" style="background-image: url('<?php echo RUTA; ?>/src/post/<?php echo $post['blog_thumb']; ?>');">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 overlay">
                        <h1><?php echo $post['blog_title']; ?> </h1>
                        <div class="post-meta">
                            <span class="post-date">Impulsa Talks - <?php echo fecha($post['blog_fecha']); ?>  </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <br>
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Post content -->
                <div class="col-md-12">
                    <div class="section-row sticky-container text">
                        <div class="main-post">
                            <div class="videoWrapper">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/JSIkOwK6U5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <?php echo $post['blog_texto']; ?> 
                        </div>

                    </div>



                </div>
                <!-- /Post content -->
                
                <!-- aside -->

            </div>

        </div>
        <!-- /container -->
    </div>
    <!-- /section -->







<?php require 'views/footer.php'; ?>