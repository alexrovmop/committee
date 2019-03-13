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
                <ul class="classifyMenu">
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
                        <li> <i class="glyphicon glyphicon-map-marker"></i>您当前的位置</li>
                        <li><a href="http://wordpress.local">首页</a></li>
                            <?php 
                            $categories = get_the_category();
                            echo '<li>';
                            foreach( $categories as $category ){
                                 if($category->parent != 0){
                                      $parent_category = get_term( $category->parent );
                                      echo '<a class="blue" href="' . esc_url( get_category_link($parent_category->term_id)) . '">' . esc_html($parent_category->name) . ' </a>';
                                      break;
                                 }
                            }
                            echo '</li>';
                            ?>
                            <!-- <?php 
                            echo '<li> ';
                            foreach( $categories as $category ){
                                 if($category->parent != 0){
                                      echo '<a href="' . esc_url( get_category_link($category->term_id)) . '">' . esc_html($category->name) . ' </a>';
                                 }
                            }
                            ?> -->
                    </ol>
                </div>
                <div class="newsList">
                    <ul class="list">
                        <?php if (have_posts()) : ?>

                        <?php  /* Start the Loop */ ?>
                        <?php while (have_posts()) : the_post(); ?>

                        <?php


                        get_template_part('template-parts/content', 'summary');
                        ?>

                        <?php endwhile; ?>

                        <?php the_posts_pagination(); ?>

                        <?php else : ?>

                        <?php get_template_part('template-parts/content', 'none'); ?>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?> 