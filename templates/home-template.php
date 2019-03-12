<?php
/**
 * Template Name: Home Page
 *
 * @package square
 */

get_header(); ?>

 <div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active" style="background-image: url('<?php bloginfo('template_url'); ?>/img/banner.jpg')">
                <div class="container">
                    <div class="bannerMsg">
                        <h1>加强 临床应用</h1>
                        <p>加强抗菌药物临床应用与细菌耐药综合评价，遏制细菌耐药</p>
                        <!-- <a href="http://kangnaiyao.mpf.org.cn/category/industrynews/"> <span>查看详情</span>
                            <i class="iconfont icon-jiantou_qiehuanzuo_o transform"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url('<?php bloginfo('template_url'); ?>/img/banner.jpg')">
                <div class="container">
                    <div class="bannerMsg">
                        <h1>加强 临床应用</h1>
                        <p>加强抗菌药物临床应用与细菌耐药综合评价，遏制细菌耐药</p>
                        <!-- <a href="http://kangnaiyao.mpf.org.cn/category/industrynews/"> <span>查看详情</span>
                            <i class="iconfont icon-jiantou_qiehuanzuo_o transform"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="emphasisProject ">
    <div class="container">
        <h1 class="title">重点项目</h1>
        <div class="projectContent row">
            <?php
            $args = array(
                'cat' => 15,
                'posts_per_page' => 3,
            );
            query_posts($args);
            if (have_posts()) : while (have_posts()) : the_post();
                    ?>
            <a href="<?php the_permalink(); ?>" class="col-md-4 project" href="">
                <div class="project-photo" style="background-image: url(<?php bloginfo('template_url'); ?>/img/project1.png);">
                    <div class="blue">
                        <div class="arrow"><i class="iconfont icon-jiantou_qiehuanzuo_o"></i></div>
                    </div>
                </div>
                <div class="project-title"><?php the_title(); ?></div>
            </a><?php endwhile;
        endif;
        wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="aboutSpecialist">
    <div class="container">
        <h1 class="title">关于专家委员会</h1>
        <div class="SpecialistBox">
            <div class="top row">
                <div class="left col-md-6">
                    <img src="<?php bloginfo('template_url'); ?>/img/committee1.png" alt="">
                </div>
                <div class="center left col-md-3">
                    <a href="http://wordpress.local/?cat=18">专家委员会成员</a>
                    <p>钟南山、 赵玉沛、马小军、刘正印等</p>
                </div>
                <div class="right left col-md-3">
                    <img src="<?php bloginfo('template_url'); ?>/img/committee2.png" alt="">
                </div>
            </div>
            <div class="bottom row">
                <div class="left col-md-6">
                    <a href="http://kangnaiyao.mpf.org.cn/category/organization/committeeintroduction/">专家委员会简介<i class="iconfont icon-jiantou_qiehuanzuo_o transform"></i></a>
                    <p>对我国细菌耐药和抗菌药物应用的相关性进行研究，提出政策建议…</p>
                </div>
                <div class="center col-md-3">
                    <a  href="">查看更多成员</a>
                    <a class="boxA" href="http://kangnaiyao.mpf.org.cn/category/organization/committmenber/"><i class="iconfont icon-jiantou_qiehuanzuo_o transform"></i></a>
                </div>
                <div class="right col-md-3">
                    <a href="http://kangnaiyao.mpf.org.cn/category/organization/officeinformation/">联系我们<i class="iconfont icon-jiantou_qiehuanzuo_o transform"></i></a>
                    <p>办公室联系人：北京协和医院 徐英春</p>
                    <p>电话：010-69159766</p>
                    <p>电子邮箱：xycpumch@139.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="news">
    <div class="container">
        <h1 class="title">新闻动态</h1>
        <div>
            <ul class="nav nav-tabs newsButton" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">工作动态</a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">行业新闻</a></li>
                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">政策法规</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="newsDetails row">
                        <div class="left news-top col-md-6">
                            <?php
                            $args = array(
                                'cat' => 1,
                                'posts_per_page' => 1,
                            );
                            query_posts($args);
                            if (have_posts()) : while (have_posts()) : the_post();
                                    ?>
                            <h3><?php echo date('M.d',get_the_time('U')) ?></h3>
                            <?php if (get_the_post_thumbnail($post_id) != '') {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                the_post_thumbnail();
                                echo '</a>';
                            } else {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                echo '<div class="thumbnail" style="background-image: url(';
                                echo catch_that_image();
                                echo ');" ></div>';
                                echo '</a>';
                            } ?>
                            <a class="newsTitle" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php if (has_excerpt()) {
                                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                                } else {
                                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                } ?></p>
                            <?php endwhile;
                    endif;
                    wp_reset_query(); ?>
                        </div>
                        <div class="right col-md-6">
                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 1,
                                    'posts_per_page' => 4,
                                    'orderby' => 'date',
                                    'offset' => 1
                                );
                                query_posts($args);
                                if (have_posts()) : while (have_posts()) : the_post();
                                        ?>
                                <li>
                                    <div>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                            <span class="col-md-10 articleTitle"><?php the_title(); ?></span>
                                            <span class="col-md-2 text-right date"><?php echo get_the_time('m.d') ?></span>
                                        </a>
                                    </div>
                                    <p><?php if (has_excerpt()) {
                                            echo $description = get_the_excerpt(); //文章编辑中的摘要
                                        } else {
                                            echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                        } ?>
                                    </p>
                                </li>
                                <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                            </ul>
                        </div>
                        <a class="more" href="http://kangnaiyao.mpf.org.cn/category/works/">查看更多</a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="newsDetails row">
                        <div class="left news-top col-md-6">
                            <?php
                            $args = array(
                                'cat' => 8,
                                'posts_per_page' => 1,
                            );
                            query_posts($args);
                            if (have_posts()) : while (have_posts()) : the_post();
                                    ?>
                            <h3><?php echo get_the_time('m.d') ?></h3>
                            <?php if (get_the_post_thumbnail($post_id) != '') {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                the_post_thumbnail();
                                echo '</a>';
                            } else {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                echo '<img class="thumbnail" src="';
                                echo catch_that_image();
                                echo '" alt="" />';
                                echo '</a>';
                            } ?>
                            <a class="newsTitle" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php if (has_excerpt()) {
                                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                                } else {
                                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                } ?></p>
                            <?php endwhile;
                    endif;
                    wp_reset_query(); ?>
                        </div>

                        <div class="right col-md-6">
                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 8,
                                    'posts_per_page' => 4,
                                    'orderby' => 'date',
                                    'offset' => 1
                                );
                                query_posts($args);
                                if (have_posts()) : while (have_posts()) : the_post();
                                        ?>
                                <li>
                                    <div>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                            <span class="col-md-10 articleTitle"><?php the_title(); ?></span>
                                            <span class="col-md-2 text-right date"><?php echo get_the_time('m.d') ?></span>
                                        </a>
                                    </div>
                                    <p><?php if (has_excerpt()) {
                                            echo $description = get_the_excerpt(); //文章编辑中的摘要
                                        } else {
                                            echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                        } ?>
                                    </p>
                                </li>
                                <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                            </ul>
                        </div>
                        <a class="more" href="http://kangnaiyao.mpf.org.cn/category/industrynews/">查看更多</a>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="newsDetails row">
                        <div class="left news-top col-md-6">
                            <?php
                            $args = array(
                                'cat' => 7,
                                'posts_per_page' => 1,
                            );
                            query_posts($args);
                            if (have_posts()) : while (have_posts()) : the_post();
                                    ?>
                            <h3><?php echo get_the_time('m.d') ?></h3>
                            <?php if (get_the_post_thumbnail($post_id) != '') {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                the_post_thumbnail();
                                echo '</a>';
                            } else {
                                echo '<a href="';
                                the_permalink();
                                echo '" class="thumbnail-wrapper">';
                                echo '<img class="thumbnail" src="';
                                echo catch_that_image();
                                echo '" alt="" />';
                                echo '</a>';
                            } ?>
                            <a class="newsTitle" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php if (has_excerpt()) {
                                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                                } else {
                                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                } ?></p>
                            <?php endwhile;
                    endif;
                    wp_reset_query(); ?>
                        </div>

                        <div class="right col-md-6">
                            <ul>
                                <?php
                                $args = array(
                                    'cat' => 7,
                                    'posts_per_page' => 4,
                                    'orderby' => 'date',
                                    'offset' => 1
                                );
                                query_posts($args);
                                if (have_posts()) : while (have_posts()) : the_post();
                                        ?>
                                <li>
                                    <div>
                                        <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                            <span class="col-md-10 articleTitle"><?php the_title(); ?></span>
                                            <span class="col-md-2 text-right date"><?php echo get_the_time('m.d') ?></span>
                                        </a>
                                    </div>
                                    <p><?php if (has_excerpt()) {
                                            echo $description = get_the_excerpt(); //文章编辑中的摘要
                                        } else {
                                            echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                        } ?>
                                    </p>
                                </li>

                                <?php endwhile;
                        endif;
                        wp_reset_query(); ?>
                            </ul>
                        </div>
                        <a class="more" href="http://kangnaiyao.mpf.org.cn/category/policys/">查看更多</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<?php get_footer();
