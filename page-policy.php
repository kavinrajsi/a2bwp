<?php
/*
Template Name: Policy / P8
*/

get_header(); // Gets the header.php file
$title = get_the_title();
?>

    <div class="custom-template-content">
    <h2 class="page__title"><?php echo $title; ?></h2>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>

<?php
get_footer(); // Gets the footer.php file
?>