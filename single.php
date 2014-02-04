<?php get_header() ?>

<?php the_post() ?>

<div id="title">
    <p class="create-time"><?php the_date(); ?></p>
    <h1><?php the_title(); ?></h1>
    <nav>
        <a href="<?php bloginfo('url'); ?>">首页</a>
        <a href="">关于我</a>
        <a href="">所有文章</a>
    </nav>

</div>

<div class="post-content"><?php the_content(); ?></div>  

<div class="post-navigation">
    <div class="pull-left"><?php previous_post_link( '%link', '&laquo; 上一篇：%title' ) ?></div>
    <div class="pull-right"><?php next_post_link( '%link', '下一篇：%title &raquo;' ) ?></div>
</div>

<?php comments_template() ?>

<?php get_footer() ?>


    