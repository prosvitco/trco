<header data-spy="affix" role="banner" class="header-section section-dark navbar-fixed-top affix-top" data-offset-top="60">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">
                        <?= __('Toggle navigation', 'sage'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>           
                    <?php 
                    $logo_image = get_field('logo_image', 'option');
                    ?>
                    <a class="navbar-logo navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                        <img src="<?php echo $logo_image; ?>" alt="" class="img-responsive">
                    </a>

                </div>
                <nav id="navigation" class="navigation navbar-collapse collapse navbar-right">

                    <?php if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' =>
                        'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-center menu-nav']);
                        endif; ?>

                        <div class="social-icons hidden-xs">
                        </nav>
                    </div>
                </div>

            </header>