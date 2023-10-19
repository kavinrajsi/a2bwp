<?php
/*
Template Name: COE
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

?>

      <div class="col-fluid">
        <div class="store-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/coe.png" alt="" />
      </div>
      </div>
      <div class="coe__box">
        <div class="col-box">
          <h2 class="page__title title__separator text-center">
            Center Of Excellence
          </h2>
          <p class="text-center">As part of our thought leadership and pursuit of excellence, we are working to create a CoE in Chennai. This initiative will bring together talent from across domains in the food industry in a hi-tech expansive space.</p>
          <p class="text-center">By the end of 2023, we aim to create an inclusive ecosystem for aspiring entrepreneurs, food scientists, food researchers, food process machinery manufacturers, FMCG marketers, industry experts, large corporations, governments organizations, start-ups, NGOs, trusts, IT professionals, and blockchain developers converge in their pursuit of excellence . By doing so we aim to identify and address challenges across the board, covering sourcing and procuring raw materials, optimizing logistics, enhancing supply chain management, automating quality control, devising effective marketing strategies, and maximizing customer satisfaction and retention.</p>
          <p class="text-center">We are already actively working on some of these goals. While some of them are in the verge of completion, some are are awaiting patent, copyright and trademark approvals.</p>
          <ul>
            <li>Food Process Engineering & Automation </li>
              <li>Internet of Things (IoTs) </li>
              <li>Food Retail Automation with Visual Computing (Front-End & Back-End Operations) </li>
              <li>Multi-Entity - Single POS with ERP Integration (Patent & Trademark ™ Application in progress) </li>
              <li>Global Vegetarian Menu Development </li>
              <li>Farm to Kitchen & Factory Door to Door using Digitized Sourcing & Payments </li>
              <li>Advanced Food Packing Solutions </li>
              <li>Low Carbon Logistics Solutions </li>
              <li>Food & Beverages Entrepreneurs Incubation </li>
              <li>Metric-Based Human Capital Utilization </li>
              <li>Blockchain, ML & AI-Infused ERP Solutions </li>
              <li>Data Democratization for Decision Making (3DM) (Trademark ™ Application in progress)</li>
              <li>Blockchain-Enabled Metaverse to explore the future of Marketing & Sales</li>
          </ul>
          <p class="text-center">If you are interested in learning more about this initiative; or if you wish to contribute your skills and expertise, please do not hesitate to reach out to us. We welcome collaboration and look forward to making a positive impact on the food industry together as one.</p>
          <p class="text-center">For further details and collaborations please feel free to reach out to us at <a href="mailto:COE@aabsweets.com">COE@aabsweets.com</a></p>
        </div>
      </div>




<?php
get_footer(); // Gets the footer.php file
?>