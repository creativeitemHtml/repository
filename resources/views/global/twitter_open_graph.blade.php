<?php

$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$page_title = !empty($page_title) ? $page_title : 'Creativeitem';

if (!isset($meta_description) && !empty($meta_description) == '')
	$meta_description = $page_title;

if (!isset($twitter_image) || $twitter_image == '')
	$twitter_image = url('/') . '/public/assets/img/socialmedia/open-graph-img.png';

?>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:title" content="{{ $page_title }}" />
    <meta name="twitter:description" content="{{ $meta_description }}" />
    <meta name="twitter:image" content="{{ $twitter_image }}" />
    <meta name="twitter:site" content="@creativeitem">
    <meta name="twitter:creator" content="@creativeitem">