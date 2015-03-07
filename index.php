<?php get_header() ?>

<div class="wrapper">
    <div class="container">
        <header class="header">
            <h1><a href="<?php echo get_site_url(); ?>">蒋子凡 <span>Blog</span></a></h1>
            <a href="<?php echo get_site_url(); ?>/about" class="about">关于</a>
        </header>

        <div class="index-main">
            <a href="<?php echo get_site_url(); ?>/archives/all" class="posts-link">Posts</a>

            <?php query_posts(array("showposts" => 5)); ?>

            <ul class="reset posts">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
                <li>
                    <h3 class="more"><a href="<?php echo get_site_url(); ?>/archives/all">More ..</a></h3>
                </li>
            </ul>

        </div>
    </div>

    <?php include '_footer.php' ?>
</div>

<?php get_footer() ?>
