
<?php
get_header();
?>

<?php
if(is_page('reservation')) {
  get_template_part('template-parts/content-reservation');
} elseif(is_page('contact')) {
  get_template_part('template-parts/content-contact');
} elseif(is_page('regulamin-hot-desk')) {
  get_template_part('template-parts/content-rules');
} else {
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      ?> <div class="sector"><h3><?php the_title(); ?> </h3> 
      <?php the_content(); ?> </div> <?php
    }
  }
}?>

<?php
get_footer();
?>