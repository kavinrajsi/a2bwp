<?php
/*
Template Name: Contact
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

?>

 
      <div class="col-box">
      <h2 class="text-center page__title title__separator">Contact Us</h2>
      <p class="text-center">
        We greatly appreciate your feedback and welcome any input you may have.
      </p>
      <div class="space space-16"></div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/contact-us.png" alt="">
    </div>
    <div class="contact-form-area">
    <div class="col-box">
      <div class="contact-text">
      <div class="contact-text--title">
        <h2>Get In Touch</h2>
        <p>If you have questions/queries about our products, or if you’d like to place festive/bulk orders, please feel free to reach out to us. We're happy to assist you and would be delighted to connect with you.</p>
      </div>

      <div class="contact-text--address">
        <p class="section__title">ADDRESS</p>
          <address>
            No: 53, Ambattur Industrial Estate, 3rd st,<br />
            South phase, Ambattur, Chennai - 600058
          </address>
          <p class="section__title">Phone:</p>
          <p>
            <a href="tel:+9104442333333">+91-44-42333333</a> /
            <a href="tel:+9104440999999">40999999</a>
          </p>
          <p class="section__title">Email:</p>
          <p><a href="mailto:care@aabsweets.com">care@aabsweets.com</a></p>
      </div>
      </div>
      <div class="contact-form">
       <?php echo do_shortcode('[contact-form-7 id="366d70d" title="Contact form"]'); ?>
      </div>
    </div>
    </div> 

<?php
get_footer(); // Gets the footer.php file
?>