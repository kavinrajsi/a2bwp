<?php
/*
Template Name: Restaurant
*/

get_header(); // Gets the header.php file
$title = get_the_title();
?>
 
      <div class="col-fluid">
        <div class="store-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/restaurant.png" alt="" />
        </div>
      </div>
      <div
        class="coe-intro pattern__blue pad-top-62 pad-bottom-62"
        style="background-color: #0073bb"
      >
        <div class="col-box">
          <h2 class="page__title title__separator text-center">
            Welcome to A2B Veg Restaurant: Where Taste Meets Tradition!
          </h2>
          <p class="text-center">
            A2B is a tribute to our rich culinary heritage through authentic recipes. Our menu is a carefully curated journey that will captivate your senses and keep you coming back for more. Explore our wide selection at our fine dining restaurants.
          </p>
        </div>
      </div>
      <div class="col-box">
        <div class="product__service--box image__text">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/south-indian-classics.png" alt="South Indian Classics" />
          </div>
          <div class="text">
            <h3>South Indian Classics</h3>
            <p>
              Relish the authenticity of time-honoured South Indian fare. From the crispy dosas to the fluffy idlis, accompanied by an array of flavorful chutneys and sambar.
            </p>
          </div>
        </div>

        <div class="product__service--box text__image">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/tandoori-delights.png" alt="North-Indian & Tandoori Delights" />
          </div>
          <div class="text">
            <h3>North-Indian & Tandoori Delights</h3>
            <p>
              Our menu is a beautiful reflection of our cultural diversity. Our selection of Tandoori and North Indian delicacies are among the most authentic and finest: Fluffy, flavourful butter naan and creamy paneer butter masala; stuffed kulcha with mutter paneer are sure to take you to the Khao Gullys of North India.
            </p>
          </div>
        </div>

        <div class="product__service--box image__text">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/indo-chiness.png" alt="Vegetarian Indo-Chinese Combos" />
          </div>
          <div class="text">
            <h3>Vegetarian Indo-Chinese Combos</h3>
            <p>
              Experience the excitement with our Indo-Chinese combos. From irresistible Szechuan noodles to the delectable gobi manchurian, you can taste the pure magic in every bite.
            </p>
          </div>
        </div>
        <div class="product__service--box text__image">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sandwitch.png" alt="Vegetarian Indo-Chinese Combos" />
          </div>
          <div class="text">
            <h3>On the Go Quick-Bites</h3>
            <p>
              Experience a delightful fusion of flavours and health with our on-the-go quick bites. Whether you're a sandwich lover, a pizza addict, or a chaat connoisseur, A2B is your ultimate destination.
            </p>
          </div>
        </div>
        <div class="product__service--box image__text">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/desserts-sweets.png" alt="Sumptuous Desserts and Sweets" />
          </div>
          <div class="text">
            <h3>Sumptuous Desserts and Sweets</h3>
            <p>
              End on a sweet note with our exquisite dessert selection that’s as wide as the horizon. From the traditional ‘payasam’ to the heavenly ‘gulab jamuns’ our desserts are an ultimate celebration of indulgence.
            </p>
          </div>
        </div>

        <div class="product__service--box text__image">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/coffee.png" alt="Refreshing Beverages" />
          </div>
          <div class="text">
            <h3>Refreshing Beverages</h3>
            <p>
              Our wide selection of juices, shakes and beverages quench more
              than just thirst. Discover the refreshing taste in every sip and
              experience the flavours to the fullest.
            </p>
            <p>
              Discover the refreshing powers of filter coffee and milk teas. Our
              hot beverages are the perfect way to end a fulfilling meal.
            </p>
          </div>
        </div>
      </div>
      <div class="explore--ambience pattern__blue">
        <div class="col-box">
          <div class="page__title">Experience Our Ambience</div>
          <p>
            Every A2B restaurant provides an inviting atmosphere that
            complements your dining experience. The plush seating, the ambient
            lighting and piped music add a touch of class to the dining
            experience.
          </p>
        </div>
      </div>
      <div class="explore--ambience--image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ambience-image-1.png" alt="" />
      </div>
      <div class="explore-restaurant">
        <div class="col-box">
        <div class="title">Visit our restaurants</div>
        <p>
          Discover a whole new world of flavours at a nearby A2B Veg Restaurant
          near you. Locate the A2B outlets that are in your neighbourhood.
        </p>
        <a href="./stores" class="button">GET DIRECTIONS</a></div>
      </div> 
<?php
get_footer(); // Gets the footer.php file
?>