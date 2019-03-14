<?php
/**
 * Template part for displaying posts.
 *
 * @package Square
 */

?>

<li class="row itemEssay">
    <a href="<?php the_permalink(); ?>">
        <div class="essayDate col-md-2 text-center">
            <h2><?php echo get_the_time('d') ?></h2>
            <p><?php echo get_the_time('Y-m') ?></p>
        </div>
        <div class="essayContent col-md-10 text-left">
            <?php the_title(sprintf('<h3 class="entry-title">', esc_url(get_permalink())), '</h3>'); ?>
            <p>
                <?php if (has_excerpt()) {
                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                } else {
                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 60, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                } ?>
            </p>
        </div>
    </a>
</li> 