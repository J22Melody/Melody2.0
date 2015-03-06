<?php get_header() ?>

<div class="container">
    <div class="inner">
        <div class="top">
            <h1>归档</h1>
            <ul class="meta">
                <li><a href="/archives/all">All</a></li>
                <li><a href="/archives/life">Life</a></li>
                <li><a href="/archives/thinking">Thinking</a></li>
                <li><a href="/archives/tech">Tech</a></li>
                <li><a href="/archives/travel">Travel</a></li>
                <li><a href="/archives/poetry">Poetry</a></li>
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
