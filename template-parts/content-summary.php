<?php
/**
 * Template part for displaying posts.
 *
 * @package Square
 */

?>

<li class="row itemEssay">
    <a class="itemLink" href="<?php the_permalink(); ?>">
        <div class="essayDate col-md-2 text-center col-xs-3">
            <h2><?php echo get_the_time('d') ?></h2>
            <div class="dateYear"><?php echo get_the_time('Y-m') ?></div>
        </div>
        <div class="essayContent col-md-10 text-left col-xs-9">
            <?php the_title(sprintf('<h3 class="entry-title">', esc_url(get_permalink())), '</h3>'); ?>
            <div>
                <?php if (has_excerpt()) {
                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                } else {
                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 60, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                } ?>
            </div>
        </div>
    </a>
</li> 
