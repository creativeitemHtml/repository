<?php

$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page_title = !empty($page_title) ? $page_title : 'Creativeitem';

if (!isset($meta_description) && !empty($meta_description) == '')
	$meta_description = $page_title;

if (!isset($og_image) || $og_image == '')
	$og_image = url('/') . '/public/assets/img/socialmedia/open-graph-img.png';

?>


    <meta property="og:locale"             content="en_US" />
    <meta property="og:type"               content="website" />
    <meta property="og:url"                content="{{ $current_url }}" />
    <meta property="og:title"              content="{{ $page_title }}" />
    <meta property="og:description"        content="{{ $meta_description }}" />
    <meta property="og:image"              content="{{ $og_image }}" />
    <meta property="og:image:width"        content="1200">