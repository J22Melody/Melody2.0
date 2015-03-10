<?php get_header() ?>

<div class="container">

    <div class="inner">
        <a href="<?php echo get_site_url(); ?>" class="home-link">Home</a>

        <div class="top">
            <h1><a href="<?php echo get_site_url(); ?>/archives/all">归档</a></h1>
            <ul class="meta">
                <li><?php category_link('all') ?></li>
                <li><?php category_link('life') ?></li>
                <li><?php category_link('thinking') ?></li>
                <li><?php category_link('tech') ?></li>
                <li><?php category_link('travel') ?></li>
                <li><?php category_link('poetry') ?></li>
            </ul>
        </div>

        <div class="content">
            <ul class="archives">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <li>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span class="meta"><?php the_date('F j, Y'); ?></span>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
