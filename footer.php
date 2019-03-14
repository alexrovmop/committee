<?php
/**
 * The header for our theme.
 *
 * @package Square
 */

?>

<footer class="footer">
        <div class="container">
          <div class="footer-top row">
            <div class="footer-nav col-md-9 row hidden-xs">
                <ul class="footerLinks">
                    <?php 
                    global $wp_query;
                    $cat_ID = get_query_var('cat');
                    $categories = get_categories("hide_empty=0&child_of=$cat_ID");
                    ?>
                    <?php 
                    wp_list_categories("orderby=name&hide_empty=0&title_li&depth=2&");
                    ?>
                  <?php if ( have_posts() ) : ?>
                  <?php /* Start the Loop */ ?>
                  <?php while ( have_posts() ) : the_post(); ?>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif; ?>
                </ul>
            </div>
            <!-- <div class="wx col-md-2">
                <img class="wxCode" src="<?php bloginfo('template_url'); ?>/img/QRcode.png" alt="">
                <p>关注微信公众号</p>
            </div> -->
            <div class="relation col-md-3">
                <h4>办公室联系人</h4>
                <p>北京协和医院徐英春</p>
                <p class="telephone">010-69159766</p>
                <p> <i class="glyphicon glyphicon-map-marker"></i> 北京市东城区帅府园一号 北京协和医院</p>
            </div>
        </div>
        <div class="footer-bottom">
            <!-- <div class="share">
                <img src="<?php bloginfo('template_url'); ?>/img/wx.png" alt="">
                <img src="<?php bloginfo('template_url'); ?>/img/sina.png" alt="">
            </div> -->
            <p>&copy;2018 北京协和医院 京IPC备00001345号</p>
        </div>
    </div>
</footer>
<!-- <script src="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/js/jQury.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
<script src="<?php bloginfo('template_url'); ?>/bootstrap-3.3.7-dist/js/sosh.js"></script>
<script>
    sosh('.datasetconfig', {
        sites: ['weixin,', 'weibo', 'yixin', 'qzone']
        })
</script>
