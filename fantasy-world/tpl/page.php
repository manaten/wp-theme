<?php while ( have_posts() ) : the_post(); ?>
<div>
<?php
    if(is_page("top")) {
        get_template_part( 'tpl/top' );
    } else {
        the_content();
    }
?>
</div>
<?php endwhile; ?>
