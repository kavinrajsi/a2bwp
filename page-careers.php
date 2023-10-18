<?php
/*
Template Name: Careers
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

?>

      <div class="col-fluid">
        <div class="career__hamper">
          <div class="career__hamper--image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/job-page.png" alt="" />
          </div>
          <div class="career__hamper--content">
            <div class="col-box">
              <h3
                class="text-center font__type--1 font__size--20 section__title-large"
              >
              Join our team at A2B
              </h3>
              <p
                class="text-center font__type--1 font__size--14 section__content"
              >
              Welcome to the Adyar Ananda Bhavan Careers page. We're delighted that you're considering joining our team. Explore the exciting career opportunities below and become a part of the Adyar Ananda Bhavan family.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-box">
        <div class="career__opening--list">
          <div class="title">Currrent Job Openings</div>
        </div>
        <div class="career__opening--content">
          <div class="accordion">
            <div class="accordion-item">
              <div class="accordion-header">
                Senior Executive Chef
                <span>Location: Chennai, India</span>
              </div>
              <div class="accordion-content" style="display: none;">
              <h3>Job Description:</h3>
                <p>Are you passionate about creating delectable dishes that tempt taste buds? Join our culinary team as a Senior Executive Chef. In this role, you'll lead the kitchen, create new dishes, and maintain our high-quality standards.</p>
                <h3>Qualifications:</h3>
                <ul>
                  <li>Minimum 5 years of experience as a Chef </li>
                    <li>
                    Culinary degree or equivalent certification </li>
                    <li>
                    Strong leadership and teamwork skills</li>
                </ul>
                <a href="#career__Form" class="button">APPLY NOW</a>
            </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header">
                Customer Service Associate
                <span>Location: Bangalore, India</span>
              </div>

              <div class="accordion-content" style="display: none;">
                <h3>Job Description:</h3>
                  <p>Are you passionate about creating delectable dishes that tempt taste buds? Join our culinary team as a Senior Executive Chef. In this role, you'll lead the kitchen, create new dishes, and maintain our high-quality standards.</p>
                  <h3>Qualifications:</h3>
                  <ul>
                    <li>Minimum 5 years of experience as a Chef </li>
                      <li>
                      Culinary degree or equivalent certification </li>
                      <li>
                      Strong leadership and teamwork skills</li>
                  </ul>
                <a href="#career__Form" class="button">APPLY NOW</a>
              </div>
            </div>
            <div class="accordion-item">
              <div class="accordion-header">
                Marketing Executive
                <span>Location: Bangalore, India</span>
              </div>

              <div class="accordion-content" style="display: none;">
                <h3>Job Description:</h3>
                  <p>Are you passionate about creating delectable dishes that tempt taste buds? Join our culinary team as a Senior Executive Chef. In this role, you'll lead the kitchen, create new dishes, and maintain our high-quality standards.</p>
                  <h3>Qualifications:</h3>
                  <ul>
                    <li>Minimum 5 years of experience as a Chef </li>
                      <li>
                      Culinary degree or equivalent certification </li>
                      <li>
                      Strong leadership and teamwork skills</li>
                  </ul>
                <a href="#career__Form" class="button">APPLY NOW</a>
              </div>
            </div>
          </div>

        </div>
      </div>

<div class="career__form" id="career__Form">
<div class="col-box">
  <div class="title">
    Your journey with us starts here
  </div>
  <p class="title__sub">Please contact us using the information below</p>

  <?php echo do_shortcode('[contact-form-7 id="c4412bc" title="Career Form"]'); ?>

  <div class="career__support--content">For any inquiries related to careers at Adyar Ananda Bhavan, please reach out to our HR department at <a href="mailto:hr@aabsweets.com">hr@aabsweets.com</a>.</div>
</div>
</div> 




<?php
get_footer(); // Gets the footer.php file
?>