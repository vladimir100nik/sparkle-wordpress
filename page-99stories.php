<?
/*
Template Name: 99stories
*/
?>
<?
get_header();
?>



<div class="section page_title">
    <h2 class="page_title">99 IEDVESMAS STĀSTI</h2>

    <h3 class="about">Atklāj kādu no 99 aizraujošajiem stāstiem</h3>
</div>

<div id="gallery" class="section gallery_stories">
<?
$posts = get_posts( array(
    	'numberposts' => 18,
    	'category_name'    => "gallery",
    	'orderby'     => 'date',
    	'order'       => 'ASC',
    	'post_type'   => 'post',
    	'suppress_filters' => true,
    ) );

    foreach( $posts as $post ){
    	setup_postdata($post);

        ?>
            <div>
                    <a data-fancybox="gallery" href="<? the_field('video_link');?>"><img src="<? the_field('video_img');?>"></a>
            </div>
    <?
    }
    wp_reset_postdata(); // сброс
    ?>

</div>
<button id="show_all" class="btn show_all">Skatīt vairāk</button>


<div class="section team">
    <h2 class="page_title">SPARKLE HEART KOMANDA</h2>
    <h3 class="about">Radošā komanda, kura strādā ar projektu 99 un starptautiskām Sparkle Heart īsfilmām.</h3>
    <div class="team_img">
    <?
    $posts = get_posts( array(
    	'numberposts' => 3,
    	'category_name'    => "team",
    	'orderby'     => 'date',
    	'order'       => 'DESC',
    	'post_type'   => 'post',
    	'suppress_filters' => true,
    ) );

    foreach( $posts as $post ){
    	setup_postdata($post);

        ?>
            <img src="<? the_field('team_img'); ?>" alt="Juris Gogulis">
    <?
    }

    wp_reset_postdata(); // сброс
    ?>

    </div>
</div>






  <?
  get_footer();
  ?>