<?php get_header() ?>

<?php the_post(); ?>

<div id="title">
    <h1><?php the_title(); ?></h1>
    <nav>
        <a href="<?php bloginfo('url'); ?>">首页</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=225">关于我</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=372">所有文章</a>
    </nav>
</div>

<div style="line-height:2.0;">
    <?php the_content(); ?>
</div>

<?php get_footer() ?>