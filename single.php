<?php get_header() ?>

<div class="container">

    <?php the_post() ?>

    <article class="inner">
        <a href="<?php echo get_site_url(); ?>" class="home-link">Home</a>

        <div class="top">
            <h1><?php the_title(); ?></h1>
            <span class="meta"><?php the_date('F j, Y'); ?></span>
        </div>

        <div class="content"><?php the_content(); ?></div>

        <div class="source">
            Archived in :
            <?php
            $categories = get_the_category();
            foreach ($categories as $cat) {
                category_link($cat->slug);
                if (end($categories) !== $cat){
                    echo " | ";
                }
            }
            ?>
        </div>
    </article>

    <?php comments_template() ?>

</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
