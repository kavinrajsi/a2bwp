<?php
/*
Template Name: Sweets
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
            Adyar Ananda Bhavan Sweets & Sacks
          </h2>
          <p class="text-center">
            Whether you’re at any of our outlets or visiting our online store, you can be sure to expect only the best. That’s because we have always believed that quality is foremost. The strikingly distinct taste of Adyar Ananda Bhavan sweets and savouries are the result of quality ingredients and  sheer meticulousness. Because, to us you're more than just a customer. You're special. And the reason we exist.
          </p>
        </div>
      </div>

      <div class="what_we--offer pad-top-62">
        <div class="col-box">
          <h2 class="page__title title__separator text-center">
            What We Offer
          </h2>
          <p class="text-center">
            Sweets and savouries are an inseparable part of our Indian tradition. They help us express our love, gratitude and happiness to our loved ones. Spread your happiness this festive season by choosing from our enormous fare of sweets, savouries, instant foods and food grains.
          </p>
        </div>
      </div>

      <div class="col-box page__sweet">
        <div class="product__service--box image__text">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sweets-confections.png" alt="" />
          </div>
          <div class="text">
            <h3>Sweets & Confections</h3>
            <p>
              Traditional sweets are a perfect blend of delicious taste and high nutritional value. Explore pure milk and ghee sweets, dry fruit sweets, and a variety of traditional sweets in our repertoire.
            </p>

            <a href="https://onlineorder.aabsweets.com/" class="text-center button block-center" target="_blank">
             Visit our online store
            </a>
          </div>
        </div>
        <div class="product__service--box text__image">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ser-savouries.png" alt="" />
          </div>
          <div class="text">
            <h3>Savouries</h3>
            <p>
              Savouries are the perfect accompaniment. From crunchy kara-sevs to traditional ellu murukkus, we have an entire range that will tickle your taste buds and add joy to your day.
            </p>
            <a href="https://onlineorder.aabsweets.com/" class="text-center button block-center" target="_blank">
             Visit our online store
            </a>
          </div>
        </div>
        <div class="product__service--box image__text">

        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/exotic-sweet.png" alt="" />
          </div>
          <div class="text">
            <h3>Exotic Sweet Confections</h3>
            <p>
              Savour the exotic specialities, including speialities from the Middle East. Experience the perfect balance honey-kissed sweetness and nutty creaminess made to authentic perfection .with our veritable collection of Baklavas and dry-fruit sweets.
            </p>
            <a href="https://onlineorder.aabsweets.com/" class="text-center button block-center" target="_blank">
             Visit our online store
            </a>
          </div>
        </div>
      </div>


<?php
get_footer(); // Gets the footer.php file
?>