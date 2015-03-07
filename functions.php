<?php

function category_link($slug) {
    $cat = get_category_by_slug($slug);
	echo sprintf("<a href=\"%s/archives/%s\">%s</a>", get_site_url(), $slug, $cat->name);
}
