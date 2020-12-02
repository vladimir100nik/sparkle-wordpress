<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? bloginfo('name'); echo " | "; bloginfo('description')?></title>
    <link rel="shortcut icon" href="<? echo bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon">

    <?
    wp_head();
    ?>

</head>

<body>
    <header>
        <nav>
            <? the_custom_logo(); ?>

            <div class='menu-btn'>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul id='menu'>
                <li><a href="assets/pages/ideja.html">Ideja</a></li>
                <li><a href="assets/pages/dreams.html">Piesaki Sapni</a></li>
                <li><a href="assets/pages/commercial.html">Uzņēmējiem</a></li>
                <li><a href="assets/pages/dreambank.html">Sapņu banka</a></li>
                <li><a href="assets/pages/support.html">Sapņus atbalsta</a></li>
                <li><a href="assets/pages/99stories.html">99 Iedvesmas stāsti</a></li>
                <li><a href="#">LV</a></li>
            </ul>

            <div class="menu-overlay"></div>
        </nav>

        <div class="section video-container">
            <img class='video-thumb' src="<? echo bloginfo('template_url');?>/assets/img/video-thumb.svg" alt="Video thumbnail">
            <img class='play-btn' src="<? echo bloginfo('template_url');?>/assets/img/play-button.svg" alt="Play video">
        </div>
    </header>