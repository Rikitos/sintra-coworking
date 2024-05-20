
<?php
get_header();
?>

<?php
if(is_page('reservation')) {
  get_template_part('template-parts/content-reservation');
  ?> 
  <?php
} else {
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      ?> <h3><?php the_title(); ?> </h3> 
      <div><?php the_content(); ?> dsadas </div> <?php
    }
  }
}?>

<?php
get_footer();
?>