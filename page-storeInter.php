<?php
/*
Template Name: Location / International
*/

get_header(); // Gets the header.php file
$title = get_the_title();
?> 
      <div class="page__header--band">
         <img src="<?php echo get_template_directory_uri(); ?>/images/outlet-image-2.png" alt="" />
        <!-- <h2 style="color: #fff;">International Outlets</h2> -->
      </div>
      <div class="regional__outlets">
        <div class="col-box page__content">
          <div class="gifting__delight--tab">
            <div class="action--list">
              <ul class="tabs">
                <li class="tab active" data-tab="tab1">USA</li>
                <li class="tab" data-tab="tab2">Malaysia</li>
                <li class="tab" data-tab="tab3">Singapore</li>
                <li class="tab" data-tab="tab4">Australia</li>
                <li class="tab" data-tab="tab5">Canada</li>
                <li class="tab" data-tab="tab7">United Kingdom</li>
              </ul>

              <div class="custom-dropdown" id="tab-selector">
                <div class="dropdown-label">USA</div>
                <div class="dropdown-options">
                  <div class="dropdown-option active" mobile-tab="tab1">
                    USA
                  </div>
                  <div class="dropdown-option" mobile-tab="tab2">
                    Malaysia
                  </div>
                  <div class="dropdown-option" mobile-tab="tab3">Singapore</div>
                  <div class="dropdown-option" mobile-tab="tab4">Australia</div>
                  <div class="dropdown-option" mobile-tab="tab5">Canada</div>
                  <div class="dropdown-option" mobile-tab="tab7">United Kingdom</div>
                </div>
              </div>
            </div>

            <div class="tab-content active" id="tab1">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> Dallas </strong>
                    <br /> No.2429 Preston Road, #100 Frisco Tx 75034, Dallas
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> New Jersey </strong>
                    <br /> 6400, Hadley Road, South Plainfield, Nj-07080, New Jersey
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> New Jersey - Parsippany </strong>
                    <br /> 3159, Us-46, Parsippany, New Jersey - 07054, New Jersey- Parsippany.
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> New Jersey - Princeton </strong>
                    <br /> 3817, Us-1 Princeton,New Jersey - Princeton.
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> California - USA </strong>
                    <br /> 55 River Oaks Pl Suite 90 San Jose Ca 95134,California - USA
                  </address>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab2">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> Masjid India - Kuala Lumbpur </strong>
                    <br /> 141, Jalan Bunus, Jalan Masjid India, City Centre, 50100 Kuala Lumpur, Malaysia
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> Brick Fields - Kuala Lumbpur </strong>
                    <br /> 254, Jalan Tun Sambanthan, Brickfields, 50470 Kuala Lumpur, Wilayah Persekutuan Kuala Lumpur, Malaysia
                  </address>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab3">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> Singapore 1 </strong>
                    <br /> 1 Dalhousie Lane, Singapore 209664,Singapore 1
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> Singapore 2 </strong>
                    <br />276 & 278 Serangoon Road, Singapore 218106,Singapore 2
                  </address>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab4">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> Sydney </strong>
                    <br /> 116, Wigram Street, Harris Park, Sydney, Nsw - 2150, Australia Sydney
                  </address>
                </div>
                <div class="store__location">
                  <address>
                    <strong> Melbourne </strong>
                    <br /> Shop No: 7, 754 - 768 Princes Highway, Springvale, Vic -3171, Australia Melbourne
                  </address>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab5">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> Canada </strong>
                    <br /> A2b Restaurants 8215 Financial Dr, Brampton, Ontario, Canada, Canada
                  </address>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab7">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> London </strong>
                    <br /> 233-235, High Street North, London E6 1jg, United Kingdom, London.
                  </address>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <script>
      // service select
      const dropdown = document.getElementById("tab-selector");
      const dropdownLabel = dropdown.querySelector(".dropdown-label");
      const dropdownOptions = dropdown.querySelector(".dropdown-options");
      const tabContents = document.querySelectorAll(".tab-content");
      const tabs = document.querySelectorAll(".tab");

      dropdownLabel.addEventListener("click", () => {
        dropdown.classList.toggle("active");
      });

      dropdownOptions.addEventListener("click", (event) => {
        const selectedMobileTab = event.target.getAttribute("mobile-tab");

        // Hide all tab contents and deactivate all tabs
        tabContents.forEach(content => {
          content.classList.remove("active");
        });

        tabs.forEach(tab => {
          tab.classList.remove("active");
        });

        // Show the selected tab content and activate the corresponding tab
        const selectedContent = document.getElementById(selectedMobileTab);
        selectedContent.classList.add("active");

        const correspondingTab = document.querySelector(`[data-tab="${selectedMobileTab.replace('mobile-', '')}"]`);
        correspondingTab.classList.add("active");

        // Update the dropdown label
        dropdownLabel.textContent = event.target.textContent;
        dropdown.classList.remove("active"); // Hide dropdown options
      });


      // desktop
      tabs.forEach(tab => {
        tab.addEventListener("click", () => {
          const selectedTab = tab.getAttribute("data-tab");

          // Hide all tab contents and deactivate all tabs
          tabContents.forEach(content => {
            content.classList.remove("active");
          });

          tabs.forEach(tab => {
            tab.classList.remove("active");
          });

          // Show the selected tab content and activate the tab
          const selectedContent = document.getElementById(selectedTab);
          selectedContent.classList.add("active");

          tab.classList.add("active");

          // Update the dropdown label
          dropdownLabel.textContent = tab.textContent;
        });
      });
      </script>
<?php
get_footer(); // Gets the footer.php file
?>