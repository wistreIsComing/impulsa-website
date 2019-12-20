<?php require 'views/header.php'; ?>
<br>

<section class="section-padding">
    <div class="container section-blog">
        <h1>Articulos</h1>
        <div class="blog-cards">
            <div class="band">

                <!-- <div class="item-1">
                    <a href="article.html" class="card">
                        <div class="thumb" style="background-image: url(<?php echo RUTA; ?>/src/post/<?php echo $post_uno['blog_thumb']; ?>);">
                            <div class="etiqueta">

                                <h2>Nuevo</h2>

                            </div>
                        </div>
                        <article>
                            <h1><?php echo $post_uno['blog_title']; ?></h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia est ipsa maxime fuga dolorum magnam quam magni tempore natus.</p>
                            <div class="row">
                                <span class="col-md-9"> <img src="src/team/andrea-1.jpg" alt="" srcset=""> Mary Winkler</span>
                                <span class="col-md-3">23/08/2018</span>
                            </div>
                        </article>
                    </a>
                </div> -->

                <?php foreach ($posts as $post) : ?>
                    <div class="">
                        <a href="<?php echo RUTA; ?>/single.php?id=<?php echo $post['blog_id']; ?>" class="card">
                            <div class="thumb" style="background-image: url(<?php echo RUTA; ?>/src/post/<?php echo $post['blog_thumb']; ?>);"></div>
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
        <?php require 'paginacion.php'; ?>
    </div>
</section>


<?php require 'views/footer.php'; ?>