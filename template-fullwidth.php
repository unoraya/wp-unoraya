<?php
/*
Template Name: Full Width
*/
?>

<?php get_header(); ?>

  <ul id="pagna2">
        <li class="paginados">
          <a class="volverini visible-desktop" href="<?php echo home_url(); ?>" title="volver">
            <img src="<?php echo get_template_directory_uri(); ?>/images/volver.png" alt="volver"/>
        </a>
        <div id="social" class="visible-desktop">
            <img src="<?php echo get_template_directory_uri(); ?>/images/iconos.jpg" class="social-btn" data-socialu="<?php echo get_permalink($post->ID); ?>" alt="botones-social-unoraya">
            <img src="<?php echo get_template_directory_uri(); ?>/images/busca.jpg" class="buscador-btn" alt="buscador-unoraya">
        </div>
      <div class="container">
        <h2><?php the_title(); ?></h2>
        <div id="contenido-maso">


                <?php query_posts('cat=3&posts_per_page=200'); ?>
                <?php
                    if (have_posts()) : while ( have_posts() ) : the_post();
                        $imaid_fine=get_post_thumbnail_id($post->ID);
                        $image = wp_get_attachment_image_src($imaid_fine, 'folio-image');

                                                    $width = $image[1];
                                                    $height = $image[2];
                                                    $height2=((270*$height)/$width)+4;

                    echo do_shortcode('[listpro3 tiutlo="'.get_the_title().'" src="'.get_template_directory_uri().'/js/timthumb.php?src='.$image[0].'&amp;w=270" href="'.get_permalink($post->ID).'" width="span3 box" class="span3" height="'.$height2.'" /]');
                    endwhile;

                    else: endif;
                    wp_reset_query(); 
                ?>

        </div>
      </div>
        </li>
        <li class="backtop">
            <img class="cierra-tr" src="<?php echo get_template_directory_uri(); ?>/images/close.png" alt="cerrar">

            <form id="buscador" action="<?php echo home_url(); ?>" method="get" class="searchformhead">
                <div class="ausu-suggest">
                    <span class="add-on bb1"></span><input type="text" class="bbc" size="16" placeholder="Escriba aquí lo que desea buscar..." autocomplete="off" id="s" name="s">
                </div>
            </form>
            <div id="twitter-wid">
                <?php //get_sidebar(); ?>
                <div id="socialall">
                    <div class="shareme" data-text="Unoraya.com Agencia creativa" ></div>
                </div>
            </div>
        </li>
    </ul>
<script type="text/javascript">
  
$container = $('#contenido-maso');
$(".box",$container).css("height","auto");
$(".listprovent",$container).css("height","auto");

</script>
<?php get_footer(); ?>
