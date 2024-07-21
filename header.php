<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>

    <link rel='stylesheet' id='google-fonts-css'
          href='https://fonts.googleapis.com/css?family=Roboto+Condensed%3A300%2C400%2C500%2C700' type='text/css'
          media='all' />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/main.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/global.css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/custom.css" />
</head>
<body class="home blog">
<div id="dt_contenedor">
    <?php include_once THEME_URL.'/templates/header.php' ?>
    <div id="contenedor">
        <div id="top_addd" style="width: 600px;"></div>
        <div class="module">


