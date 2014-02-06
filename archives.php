<?php
/*
Template Name: Archives
*/
?>

<?php get_header() ?>

<div id="title">
    <h1>所有文章</h1>
    <nav>
        <a href="<?php bloginfo('url'); ?>">首页</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=2">关于我</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=20">所有文章</a>
    </nav>
</div>

<?php query_posts(array()); ?>
<ul id="latest">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <li>
            <span class="date"><?php echo get_the_date(); ?></span> » 
            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
        </li>
        <?php endwhile; ?>
    <?php else : ?>
        <p>暂无文章。</p>
    <?php endif; ?>
</ul>

<?php get_footer() ?>