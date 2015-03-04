<?php get_header() ?>

<div class="container">

    <?php the_post() ?>

    <article class="post">
        <div class="top">
            <h1>222</h1>
            <span class="date">111</span>
        </div>

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
                <h3 class="more"><a href="#">More ..</a></h3>
            </li>
        </ul>
    </article>

    <?php comments_template() ?>

</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
