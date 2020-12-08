<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><? bloginfo('name'); echo " | "; bloginfo('description')?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <link rel="shortcut icon" href="<? echo bloginfo('template_url');?>/assets/img/favicon.ico" type="image/x-icon">

    <?
    wp_head();
    ?>

</head>

<body>
    <header>
        <nav>


            <? the_custom_logo(); ?>


           <?
                wp_nav_menu( [

                	'menu'            => 'Main',
                	'container'       => false,
                	'menu_class'      => 'menu',
                	'menu_id'         => 'menu',
                	'echo'            => true,
                	'fallback_cb'     => 'wp_page_menu',
                	'items_wrap'      => '<ul class="menu">%3$s</ul>',
                	'depth'           => 1,

                ] );
           ?>
                        <div class='menu-btn'>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                        </div>


            <div class="menu-overlay"></div>
        </nav>
 </header>

