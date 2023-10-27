<?php
/*
Template Name: Blank Canvas
*/

get_header(); // Gets the header.php file
?>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
<?php
get_footer(); // Gets the footer.php file
?>