<?php
/**
 * The template for displaying archive pages.
 *
 * @package Square
 */

get_header(); ?>
<div class="contentC">
    <div class="container">
        <div class="content row">
            <div class="content-menus col-md-2">
                <ul>

                    <?php 
                    global $wp_query;
                    $cat_ID = get_query_var('cat');
                    $categories = get_categories("hide_empty=0&child_of=$cat_ID");
                    ?>
                    <?php 
                    if (count($categories) === 0) {
                        $category = get_category($cat_ID);
                        wp_list_categories("orderby=name&child_of={$category->parent}&hide_empty=0&title_li&depth=1&");
                    } else {
                        wp_list_categories("orderby=name&child_of={$cat_ID}&hide_empty=0&title_li&depth=1&");
                    }

                    ?>
                </ul>
            </div>
            <div id="member" class="contetn-exhibition col-md-10">
           
                <div class="contetn-exhibition-header">
                    <ol class="breadcrumb">
                        <li> <i class="glyphicon glyphicon-map-marker"></i> 您当前的位置</li>
                        <li><?php single_cat_title(); ?></li>
                    </ol>
                </div>
                <div class="newsList">
                    <ul class="list">
                        <?php if (have_posts()) : ?>

                        <?php  /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <?php

                        /*
* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
                        get_template_part('template-parts/content', 'summary');
                        ?>

                        <?php endwhile; ?>

                        <?php the_posts_pagination(); ?>

                        <?php else : ?>

                        <?php get_template_part('template-parts/content', 'none'); ?>

                        <?php endif; ?>
                    </ul>
                </div>
                <!-- <div class="pageTurning"> -->
                <!-- <nav aria-label="...">
                                <ul class="pager">
                                    <li class="previous"><a class="bgButton" href="#"><span aria-hidden="true" class="iconfont icon-jiantou_qiehuanzuo_o"></span>
                                        </a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next"><a class="bgButton nextButton" href="#"> <span aria-hidden="true" class="iconfont icon-jiantou_qiehuanzuo_o"></span></a></li>
                                </ul>
							</nav> -->

            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?> 