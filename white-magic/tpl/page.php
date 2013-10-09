<?php while ( have_posts() ) : the_post(); ?>
<div>
<?php
    if(is_page("top")) {
        get_template_part( 'tpl/top' );
    } else {
    ?><div id="contentMain"><div class="entry-content"><?php
        the_content();
    ?></div></div><?php
    }
?>
</div>
<?php endwhile; ?>
