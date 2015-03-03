<?php get_header() ?>

<div class="container">

    <?php the_post() ?>

    <article class="post">
        <div class="top">
            <h1><?php the_title(); ?></h1>
            <span class="date"><?php the_date('F j, Y'); ?></span>
        </div>

        <div class="content"><?php the_content(); ?></div>
    </article>

    <?php comments_template() ?>

</div>

<footer class="footer">powered by WordPress and <a href="http://duoshuo.com/" target="_blank">多说</a></footer>

<?php get_footer() ?>
