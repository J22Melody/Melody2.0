<?php get_header() ?>

<div id="title" class="row">
    <h1><?php bloginfo('name'); ?></h1>
    <nav>
        <a href="<?php bloginfo('url'); ?>">首页</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=225">关于我</a>
        <a href="<?php bloginfo('url'); ?>/?page_id=372">所有文章</a>
    </nav>
</div>

<p id="description">
    <?php bloginfo('description'); ?>
</p>

<section id="latest-wrapper">
    <h3>Latest</h3>

    <?php query_posts(array("showposts" => 5)); ?>

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

</section>

<footer>
    <p>© Powered by Wordpress and Melody, ZifanJiang 2014 with help from <a href="http://www.bootcss.com/">Twitter Bootstrap</a></p>
</footer>

<?php get_footer() ?>


    