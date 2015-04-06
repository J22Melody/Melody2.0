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

        <div class="content about-content">
            <section>
                理想主义者，
                <br>悲观主义者，
                <br>享乐主义者。
            </section>

            <section>
                希腊神话说，人啊，认识你自己。关于我是一个什么样的人，这亦是我一生所要探寻的东西。
                <br>我最近的一份工作是在知乎，担任前端开发。而现在我已经回到学校，处理一些闲杂的事情，以及筹划一场毕业旅行。
                <br>哦，如果顺利的话，我将于 2015 夏天毕业于南京大学。
            </section>

            <section>
                订阅蒋子凡的博客：
                <br><?php echo do_shortcode("[jetpack_subscription_form]"); ?>
            </section>

            <section>
                <h3>EXPERIENCE</h3>
                <ul>
                    <li>知乎，前端工程师，2014.7 ~ 2015.3</li>
                    <li><a href="http://mydocumate.com" target="_blank">MyDocumate</a>，前端工程师，2013.12 ~ 2014.5</li>
                    <li>聚划算，前端工程师，2013.7 ~ 2013.9</li>
                    <li><a href="http://lilystudio.org" target="_blank">小百合工作室</a>，美工组组长，2012 ~ 2013</li>
                </ul>
            </section>

            <section>
                <h3>PROJECTS</h3>
                <ul>
                    <li>仙林软件奇侠传，背景为南大的 RPG 游戏，Based on Java Swing</li>
                    <li><a href="http://douya.jzf.life" target="_blank">豆芽</a>，仿豆瓣足迹的旅行网站，Powered by Django</li>
                    <li><a href="http://classic.lilystudio.org" target="_blank">ClassIC</a>，课程分享网站，<a href="http://jzf.life/archive/500" target="_blank">《ClassIC I See》</a>，Powered by Yii</li>
                </ul>
            </section>
        </div>
    </div>
</div>

<?php include '_footer.php' ?>

<?php get_footer() ?>
