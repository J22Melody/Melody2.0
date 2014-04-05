<?php get_header() ?>

<?php the_post() ?>

<div id="title">
    <h1><?php the_title(); ?></h1>
    <nav>
        <a href="<?php bloginfo('url'); ?>">首页</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=225">关于我</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=372">所有文章</a>
    </nav>
</div>

<div class="post-content"><?php the_content(); ?></div>  

<div class="clearfix">
    <p class="create-time pull-right"><?php the_date(); ?></p>
</div>

<div class="post-navigation">
    <div class="pull-left"><?php previous_post_link( '%link', '&laquo; 上一篇：%title' ) ?></div>
    <div class="pull-right"><?php next_post_link( '%link', '下一篇：%title &raquo;' ) ?></div>
</div>

<?php comments_template() ?>

<?php get_footer() ?>


    