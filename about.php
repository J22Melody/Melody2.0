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
                <br>目前的我刚刚从南京大学毕业，去向是北京，知乎，前端开发。
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

            <section>
                <h3>FOOTPRINTS</h3>
                <div id="map-canvas"></div>
            </section>
        </div>
    </div>
</div>

<?php include '_footer.php' ?>

<script src="http://ditu.google.cn/maps/api/js?&sensor=true"></script>

<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>

<script>

var map, infowindow;

var init_map = function () {
    var zoom = 4;
    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        zoom = 3;
    }
    var mapOptions = {
        center: new google.maps.LatLng(38.3446509602, 104.1075355397),
        zoom: zoom,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
};

var init_place = function () {
    $.ajax({
        url: '<?php bloginfo('template_url'); ?>/js/data.json',
        success: function (data) {
            var places = data.places;
            places.forEach(function(place) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(place.location.k, place.location.A),
                    title: place.name
                });
                marker.setMap(map);

                var contentString =
                '<div class="place-info">' +
                    '<div class="place-header">' +
                        '<h6 class="place-name">' + place.name + '</h6>' +
                        '<span class="place-time">' + (place.time || '') + '</span>' +
                    '</div>' +
                    '<div>' + (place.desc || '') + '</div>' +
                '</div>'

                google.maps.event.addListener(marker, 'click', function () {
                    if (infowindow) infowindow.close();

                    infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });

                    infowindow.open(map, marker);
                });
            });
        }
    });
};

$(document).ready(function(){
    init_map();
    init_place();
});

</script>

<?php get_footer() ?>
