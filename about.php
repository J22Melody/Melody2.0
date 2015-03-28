<?php
/*
Template Name: About
*/
?>

<?php get_header() ?>

<div class="container">

    <div class="inner">
        <a href="<?php echo get_site_url(); ?>" class="home-link">Home</a>

        <div class="top">
            <h1>关于</h1>
        </div>

        <div class="content">
            <p>
                蒋子凡
            </p>
            <br>
            <p>
                理想主义者，
            </p>
            <p>
                悲观主义者，
            </p>
            <p>
                享乐主义者。
            </p>
            <br>
            <p>
                希腊神话说，人啊，认识你自己。关于我是一个什么样的人，这亦是我一生所要探寻的东西。
            </p>
            <p>
                我最近的一份工作是在知乎，担任前端开发。而现在我已经回到学校，处理一些闲杂的事情，以及筹划一场毕业旅行。
            </p>
            <p>
                哦，如果顺利的话，我将于 2015 夏天毕业于南京大学。
            </p>
            <br>
            <p>
                订阅蒋子凡的博客：
            </p>
            <?php echo do_shortcode("[jetpack_subscription_form]"); ?>
        </div>
    </div>
</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
