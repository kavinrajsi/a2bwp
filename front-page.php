<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aab
 */

get_header();
?>
 
<div class="col-fluid">

  <div class="a2b-restaurant-slider">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner-1.png" class="" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner-2.png" class="" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner-3.png" class="" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home-banner-4.png" class="" alt="...">
        </div>
      </div>

    </div>
    <div class="col-box info__image-text">
    <div class="info__text">
      <div class="title">
        Adyar Ananda Bhavan
        <span>House of exclusive Indian Sweets</span>
      </div>
      <p>
        Everything that we bring you is pure, delicious and authentic. At Adyar Ananda Bhavan, we prepare only using the finest ingredients, following time-tested methods. Experience a perfect blend of timeless tradition and innovation in every bite.
      </p>
    </div>
    </div>
    </div>
</div>

<div class="col-fluid">
    <div class="what_we--service">
      <div class="col-box">
      <div class="service--list">
        <div class="service--list__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/aab-sweets-snack.png" alt="" />
      </div>
        <p class="text-center">
          Explore our wide range of sweets, from timeless Indian classics to our
          innovative creations, perfect for every occasion. Taste the love and
          passion of Adyar Ananda Bhavan in every bite.
        </p>
        <p>
        <a href="/sweets" class="text-center button block-center"> READ MORE </a>
       </p>
        <div class="image-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-sweets-snack-gallery-1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-sweets-snack-gallery-2.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-sweets-snack-gallery-3.png" alt="">
        </div>
      </div>
      <div class="service--list">
        <div class="service--list__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/aab-veg-restaurant.png" alt="" />
        </div>
        <p class="text-center">
          A2B restaurants have everything you would expect for a cosy meal time
          with your family. With an incredible menu covering the widest
          vegetarian fare across cuisines, you’re sure to be spoilt for choice.
        </p>
        <p>
        <a href="/restaurant" class="text-center button block-center"> READ MORE </a>
       </p>
        <div class="image-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-veg-restaurant-gallery-1.png" alt="" />
           <img src="<?php echo get_template_directory_uri(); ?>/images/aab-veg-restaurant-gallery-2.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/aab-veg-restaurant-gallery-3.png" alt="" />
        </div>
      </div>
      <div class="service--list">
        <div class="service--list__logo">
        <img src="<?php echo get_template_directory_uri(); ?>/images/aab-snack.png" alt="" />
        </div>
        <p class="text-center">
          We have an extensive collection of packaged foods ranging from sweets,
          savouries, pickles, instant food mixes, cooking masala found in
          shelves of every single supermarket and departmental store in the
          country.
        </p>
        <p>
          <a href="/retail" class="text-center button block-center"> READ MORE </a>
         </p>
        <div class="image-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-snack-gallery-1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-snack-gallery-2.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-snack-gallery-3.png" alt="">
        </div>
      </div>
      <div class="service--list">
        <div class="service--list__logo">
          <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/aab-greens.png" alt="" /> </a>
            <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/aab-backery.png" alt="" /> </a>
              <a href="#"> <img src="<?php echo get_template_directory_uri(); ?>/images/aab-residency.png" alt="" /> </a>
        </div>
        <p class="text-center">While our quest for excellence manifests in our restaurants and sweets, we are also pursuing new possibilities to bring alive the Adyar Ananda Bhavan experience. Discover A2B Greens for farm fresh produce, A2B Bakery for delightful bakes and pastries, and A2B Residency for top-notch hospitality in select locations.</p>
        <div class="image-gallery">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-greens-gallery-1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-backery-gallery-1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/aab-residency-gallery-1.png" alt="">
        </div>
      </div>
    </div>
  </div>
</div>


      <div class="col-fluid">
        <div class="gift__hamper">
          <div class="gift__hamper--image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home-page-gift-image.png" alt="" />
          </div>
          <div class="gift__hamper--content">
            <div class="col-box">
              <h3
                class="text-center font__type--1 font__size--20 section__title"
              >
                Gift Hampers
              </h3>
              <p
                class="text-center font__type--1 font__font__size--14 section__title-large"
              >
                Gifts for every occasion
              </p>
              <p
                class="text-center font__type--1 font__size--14 section__content"
              >
                Adyar Ananda Bhavan’s wide selection of traditional sweets and
                savouries are the most perfect gifts you can give someone.
                Whether it’s a personal gift for a festival or occasion, or a
                corporate hamper, you’re sure to find the most suitable gift
                boxes for every budget and need.
              </p>
              <a href="/gifting" class="text-center button block-center">
                DISCOVER MORE
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-fluid">
        <div class="we__offer">
          <div class="col-box">
          <p
            class="text-center font__type--1 font__size--20 section__title--pre-text"
          >
            What we offer is a step above Excellence
          </p>
          <h3 class="text-center font__type--2 font__size--48 section__title">
            Pure, Authentic & Sustainable
          </h3>
          <div class="image--list">
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/homepage-image-iso.png" alt="" />
            </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/homepage-image-since-1.svg" alt="" />
            </div>
            <div class="image">
              <img src="<?php echo get_template_directory_uri(); ?>/images/homepage-image-recycle-2.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-fluid">
      <div class="authentic__taste">
        <div class="col-box">
        <div class="authentic__taste--content">
          <p
            class="text-center font__type--1 font__size--20 section__title--pre-text"
          >
            About us
          </p>
          <h3 class="text-center font__type--2 font__size--48 section__title">
            A tradition of authentic taste
          </h3>
          <p
            class="text-center font__type--1 font__size--14 section__content"
          >
          Our beloved founder Late Sri. KS Thirupathi Raja was a man of remarkable discipline, hard work, and indomitable will. Throughout his life, he battled hardships, but he was unfazed by them. He held onto a singular belief that "hard work eventually pays." That belief is now what we call Adyar Ananda Bhavan
          </p>
          <a href="/about" class="text-center button block-center"> READ MORE </a>
        </div>
      </div>
    </div>
    </div>

    <div class="col-fluid">
      <div class="aab-goes-digital">
    <div class="col-box">
       <div class="image__left">
       <img src="<?php echo get_template_directory_uri(); ?>/images/laptop.png" class="" alt="...">
</div>
        <div class="info__text">
          <div class="title">
            A2B Goes Digital
          </div>
          <p>
            Discover a world of authentic, traditional flavours from where you are. Visit our online store to order your favourite sweets, savouries and desserts.
          </p>
          <a href="https://onlineorder.aabsweets.com/" target="_blank" class="text-center button block-center"> ORDER ONLINE </a>
      </div>

      <div class="image__right">
       <img src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" class="" alt="...">
</div>
</div>
      </div>
    </div>

    <div class="col-fluid">
      <div class="instagram__community">
        <h2 class="text-center h3 title__separator">
          Join our Instagram Community
        </h2>
        <div class="instagram__feed">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
      </div>
    </div>

<?php
get_footer();