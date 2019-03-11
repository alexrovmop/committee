<?php get_header(); ?>

<header class="sq-main-header">
	<div class="sq-container">
		
	</div>
</header><!-- .entry-header -->
<div class="contentC">
        <div class="container content">
          <div class="row" style="width:100%">
                <div class="contetn-exhibition">
                <div class="contetn-exhibition-content">
                        <div class="contentTitle">
                            <?php the_title( '<h1>', '</h1>' ); ?>
                            <p>
                                <span><?php echo getPostViews(get_the_ID()); ?></span>
                                <span>发布时间：<?php echo get_the_time('Y-m-d G:H')?></span>
                               <span class="share">分享:<span style=" display: inline-block" class="datasetconfig" data-title="分享标题" data-sites="yixin,weibo,weixin,qzone"></span></span>     
                            </p>
                        </div>
                        <div class="contentText">
                            <p>
							<?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/content', 'single' ); ?>
                            <?php setPostViews(get_the_ID()); ?>
                            <?php endwhile; // End of the loop. ?>
							</p>
                        </div>
                    </div>
                <div class="contetn-exhibition-footer">
                <?php
                    $categories = get_the_category();
                    $categoryIDS = array();
                      foreach ($categories as $category) {
                      array_push($categoryIDS, $category->term_id);
                      }
                    $categoryIDS = implode(",", $categoryIDS);
                ?>
                    <p class="last">
                      <?php if (get_previous_post($categoryIDS)) { previous_post_link('上一篇: %link','%title',true);} else { echo "已是最后文章";} ?></p> 
                    <p class="next">
                    <?php if (get_next_post($categoryIDS)) { next_post_link('上一篇: %link','%title',true);} else { echo "已是最新文章";} ?></p>    
                </div>
            </div>
          </div>
        </div>
    </div>
<div class="sq-container sq-clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
