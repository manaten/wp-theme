<?php if ( have_posts() ) the_post(); ?>
<h1 class="page-title"><?php echo ManatenWp::getPageName(); ?></h1>
<?php
rewind_posts();
get_template_part( 'tpl/loop' );
?>