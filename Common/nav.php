<nav class="navbar navbar-expand-lg fixed-top scrolling-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
                <span class="icon-menu"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="src/iconos/impulsapeque.png" style="margin-bottom: 0;" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="#header-wrap">
                        <?php echo $inicio; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">
                        <?php echo $impulsores; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#quehacemos">
                        <?php echo $quehacemos; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">
                        <?php echo $proyectos; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">
                        <?php echo $blog; ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactanos">
                        <?php echo $contactanos; ?>
                    </a>
                </li>
                <li class="nav-item">

                    <a class="nav-link idioma" href="changelanguage.php?language=es">
                        <?php echo $spanish; ?></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link idioma" href="changelanguage.php?language=en">
                        <?php echo $english; ?>
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- Mobile Menu Start -->
    <ul class="mobile-menu">
        <li>
            <a class="page-scrool" href="#header-wrap"><?php echo $inicio; ?></a>
        </li>
        <li>
            <a class="page-scrool" href="#about"><?php echo $impulsores; ?></a>
        </li>
        <li>
            <a class="page-scroll" href="#quehacemos"><?php echo $quehacemos; ?></a>
        </li>
        <li>
            <a class="page-scroll" href="#gallery"><?php echo $proyectos; ?></a>
        </li>
        <li>
            <a class="page-scroll" href="#blog"><?php echo $blog; ?></a>
        </li>
        <li>
            <a class="page-scroll" href="#contactanos"><?php echo $contactanos; ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link idioma" href="changelanguage.php?language=es">
                <?php echo $spanish; ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link idioma" href="changelanguage.php?language=en">
                <?php echo $english; ?>
            </a>
        </li>
    </ul>
    <!-- Mobile Menu End -->

</nav> 