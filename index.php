<?php get_header() ?>

<div class="wrapper">
    <div class="container">
        <header class="header">
            <h1>蒋子凡 <span>Blog</span></h1>
            <a href="/about">关于</a>
        </header>

        <div class="index-main">
            <a href="#" class="posts-link">Posts</a>

            <?php query_posts(array("showposts" => 5)); ?>

            <ul class="reset posts">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php endwhile; ?>
                <?php endif; ?>
            </ul>

        </div>
    </div>

    <footer class="footer">powered by WordPress and <a href="http://duoshuo.com/" target="_blank">多说</a></footer>
</div>

<?php get_footer() ?>
