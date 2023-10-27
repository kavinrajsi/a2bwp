<?php
/*
Template Name: Contact
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

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