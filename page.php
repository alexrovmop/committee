<?php
/**
 * The template for displaying all pages.
 *
 * @package Square
 */

get_header(); ?>

<div class="contentC">
    <div class="container">
        <div class="content row">
            <div class="content-menus col-md-2">
                <ul class="nav nav-tabs " role="tablist">
                    <li class="active" role="presentation"><a href="#relation" aria-controls="relation" role="tab" data-toggle="tab">办公室联系方式</a></li>
                    <li role="presentation"><a href="#introduction" aria-controls="introduction" role="tab" data-toggle="tab">委员会简介</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">委员会成员</a></li>
                </ul>
            </div>
            <div class="tab-content contetn-exhibition col-md-10">
                <div role="tabpanel" class="tab-pane active" id="relation">
                    <div class="contetn-exhibition-header">
                        <ol class="breadcrumb">
                            <li> <i class="glyphicon glyphicon-map-marker"></i> 您当前的位置</li>
                            <li>首页</li>
                            <li>机构介绍</li>
                            <li class="blue">办公室联系方式</li>
                        </ol>
                    </div>
                    <div id="relation" class="relation">
                        <h2>联系我们</h2>
                        <p class="shareLinks text-right"><span class="share">分享:</span> <span style=" display: inline-block" class="datasetconfig" data-title="分享标题" data-sites="yixin,weibo,weixin,qzone"></span></p>
                        <div class="relationDetails">
                            <div class="relationWay">
                                <div class="col-md-4">
                                    <h3> <i class="glyphicon glyphicon-earphone"></i> 联系方式</h3>
                                    <p>电话:010-88312256</p>
                                    <p>电话:010-88312256</p>
                                    <p>邮政编码:100044</p>
                                </div>
                                <div class="col-md-4">
                                    <h3> <i class="glyphicon glyphicon-map-marker"></i> 办公地址</h3>
                                    <p>北京市西城区车公庄大街9号</p>
                                    <p>五栋大楼B1-1001</p>
                                </div>
                                <div class="col-md-4">
                                    <h3> <i class="glyphicon glyphicon-map-marker"></i> 通讯地址</h3>
                                    <p>北京市西城区车公庄大街9号</p>
                                    <p>五栋大楼B1-1001</p>
                                </div>
                            </div>
                            <div class="map text-center">
                                <iframe class="bdmap" src="<?php bloginfo('template_url'); ?>/baiduMap.html"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="introduction">
                    <div class="contetn-exhibition-header">
                        <ol class="breadcrumb">
                            <li> <i class="glyphicon glyphicon-map-marker"></i> 您当前的位置</li>
                            <li>首页</li>
                            <li>机构介绍</li>
                            <li class="blue">委员会简介</li>
                        </ol>
                    </div>
                    <div class="contetn-exhibition-content">

                        <div class="contentTitle">
                            <h1><?php
                                $article_id = 499; //页面的ID
                                echo get_post($article_id)->post_title;
                                ?></h1>
                            <p class="shareLinks"><span class="share">分享:</span> <span style=" display: inline-block" class="datasetconfig" data-title="分享标题" data-sites="yixin,weibo,weixin,qzone"></span></p>
                        </div>

                        <div class="contentText">
                            <?php 
                            $article_id = 499; //页面的ID
                            echo get_post($article_id)->post_content;
                            ?>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="contetn-exhibition-header">
                        <ol class="breadcrumb">
                            <li> <i class="glyphicon glyphicon-map-marker"></i> 您当前的位置</li>
                            <li>首页</li>
                            <li>机构介绍</li>
                            <li class="blue">委员会成员</li>
                        </ol>
                    </div>
                    <div id="memberList" class="memberList">
                        <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                            <ul id="myTabs" class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="dropdown active dropdownMenu">
                                    <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">专家小组 <span class="caret"></span></a>
                                    <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                                        <li class="active"><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="true">小组1</a></li>
                                        <li><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">小组2</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div role="tabpanel" class="list row tab-pane fade active in" id="dropdown1" aria-labelledby="dropdown1-tab">
                                    <?php
                                    $args = array(
                                        'cat' => 18,   // 分类ID
                                        'posts_per_page' => -1, // 显示篇数
                                    );
                                    query_posts($args);
                                    if (have_posts()) : while (have_posts()) : the_post();
                                            ?>
                                    <div class="col-md-4 memberItem">
                                        <a class="overall" href="<?php the_permalink(); ?>">
                                            <div class="headerImg">
                                                <img src="<?php bloginfo('template_url'); ?>/img/portrait.png" alt="">
                                                <div class="blueMask">
                                                    <i class="iconfont icon-yanjing"></i>
                                                </div>
                                            </div>
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php if (has_excerpt()) {
                                                    echo $description = get_the_excerpt(); //文章编辑中的摘要
                                                } else {
                                                    echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 50, "……"); //文章编辑中若无摘要，自定截取文章内容字数做为摘要
                                                } ?></p>
                                            <p class="finally">博士生研究生导师</p>
                                        </a>
                                    </div>
                                    <?php endwhile;
                            endif;
                            wp_reset_query(); ?>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="dropdown pullMenu">
                            <button class="btn btn-default dropdown-toggle group" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                专家XXXXX小组
                                <span class="caret"></span>
														</button> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?> 