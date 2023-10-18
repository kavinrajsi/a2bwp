<?php
/*
Template Name: Retail
*/

get_header(); // Gets the header.php file
$title = get_the_title();
?> 
      <div class="col-fluid">
        <div class="store-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/sweets.png" alt="" />
        </div>
      </div>
      <div class="coe-intro pattern__blue pad-top-62 pad-bottom-62" style="background-color: #00378C;">
        <div class="col-box">
          <h2 class="page__title title__separator text-center">
            A2B Retail: Taste the Tradition, Anywhere, Everywhere
          </h2>
          <p class="text-center">
            We believe that the joy of authentic flavours should be available to everyone, everywhere. That's how our delightful range of retail products is readily available in stores across Tamil Nadu.
          </p>
        </div>
      </div>

      <div class="col-box page__sweet">
  <div class="product__service--box image__text">
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-1.png" alt="" />
    </div>
    <div class="text">
      <h3>Sweets & Confections</h3>
      <p>
        Whether it's a special celebration or a spontaneous craving, reach out
        for our delectable range of sweets. From the melt-in-your-mouth Soan
        Papadi to the irresistible Gulab Jamuns and Rasgullas, it’s hard to
        resist the temptation.
      </p>
    </div>
  </div>
  <div class="product__service--box text__image">
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-2.png" alt="" />
    </div>
    <div class="text">
      <h3>Savouries</h3>
      <p>
        Our tasty range of savouries make the perfect companion for your
        travels, office breaks and all the munchy moments. Pick from wide
        selection of high-quality savouries available in convenient bite size
        packs.
      </p>
    </div>
  </div>
  <div class="product__service--box image__text">
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-3.png" alt="" />
    </div>
    <div class="text">
      <h3>Masalas</h3>
      <p>
        Our authentic masala mixes are the enchanting secret to enhance your
        cooking experience. From sambar powder to vegetable curry masala, rasam
        powder and Bisibelle Bath Mix, we’ve got you authentically covered.
      </p>
    </div>
  </div>
  <div class="product__service--box text__image">
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-4.png" alt="" />
    </div>
    <div class="text">
      <h3>Rice Mixes / Paste / Instant Powders</h3>
      <p>
        Our ready-to-cook range brings health and flavour to your meals. From
        instant vatha kuzhambu paste to flavorful spice mixes, we have it all.
        Don't forget to try our health mix maavu, filter coffee powder, and
        badam milk. Your family will love you for it.
      </p>
    </div>
  </div>
  <div class="product__service--box image__text">
  <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-5.png" alt="" />
    </div>
    <div class="text">
      <h3>Pickles</h3>
      <p>
        Featuring everything from the tangy Mango pickle to the fiery Garlic
        pickle. We offer a diverse range of options, ensuring there's something
        to tantalise every palate and make your dining experience truly
        exceptional.
      </p>
    </div>
  </div>
  <div class="product__service--box text__image">
    <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-6.png" alt="" />
    </div>
    <div class="text">
      <h3>Ghee</h3>
      <p>
        Introducing the masterpiece- A2B Cow Ghee. It is the epitome of purity
        and quality, delivering an unparalleled richness in every drop.
      </p>
    </div>
  </div>
  <div class="product__service--box image__text">
  <div class="image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/retail-7.png" alt="" />
    </div>
    <div class="text">
      <h3>Saffron</h3>
      <p>
        Our saffron is carefully sourced to ensure exceptional quality. It
        infuses a delightful aroma and a hint of opulence into your sweets and
        beverages.
      </p>
    </div>
  </div>
</div>

<?php
get_footer(); // Gets the footer.php file
?>