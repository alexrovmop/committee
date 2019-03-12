<?php
/**
 * The header for our theme.
 *
 * @package Square
 */

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="zh-CN">
<?php wp_head(); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>首页</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font_1063406_mivdt6i4c2n/iconfont.css">
    <link href="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/global.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/home.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/news.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css">
=======
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/organization.css">
>>>>>>> 7d4978a8c0d34a960575d85a197f9f41c1f2f7fb
</head>

<body>
    <div class="header">
        <div class="container">
            <nav class="navbar navpadding navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="<?php bloginfo('template_url'); ?>/img/logo.jpg" alt="">
                            <h1>国家卫生计生委抗菌药物临床应用与细菌耐药评价专家委员会</h1>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'primary',
                                'container'  => false,
                                'menu_class' => 'nav navbar-nav navbar-right nav-title',
                                'fallback_cb' => 'webriti_fallback_page_menu',
                                'walker' => new webriti_nav_walker()
                            )
                        );
                        ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <script src="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/js/jQury.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>

</html> 