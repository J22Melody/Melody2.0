<?php
/*
Template Name: Archives
*/
?>

<?php get_header() ?>

<div class="container">

    <div class="archives">
        <div class="top">
            <h1><?php the_title(); ?></h1>
            <span class="date"><?php the_date('F j, Y'); ?></span>
        </div>

        <div class="content">
            <?php query_posts(array()); ?>
            <ul class="">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                        <li>
                            <span class="date"><?php echo get_the_date(); ?></span> »
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                        </li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
