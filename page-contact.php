<?php
/*
Template Name: Contact
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

?>





<main>

        <div class="custom-template-content">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
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
                <form class="" action="#">
                    <div class="from__input--area form__type--row">
                        <label for="name"> Name </label>
                        <input class="form__input" id="name" name="name" type="text" placeholder="" />
                    </div>
                    <div class="from__input--area form__type--row">
                        <label for="email"> Email Address </label>
                        <input class="form__input" id="email" name="email" type="email" placeholder="" />
                    </div>
                    <div class="from__input--area form__type--row">
                        <label for="phonenumber"> Phone Number </label>
                        <input class="form__input" id="phonenumber" name="phonenumber" type="tel" placeholder="" />
                    </div>
                    <div class="from__input--area form__type--row">
                        <label for="message"> Message </label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form__input--area form__type--grid">
                        <input type="checkbox" id="comment" name="comment" value="save-data" />
                        <label for="comment">
                            Save my name, email, and website in this browser for the next time I
                            comment.</label>
                    </div>
                    <div class="form__input--area form__type--row">
                        <button class="form__action" type="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<?php
get_footer(); // Gets the footer.php file
?>