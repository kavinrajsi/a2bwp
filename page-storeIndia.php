<?php
/*
Template Name: Location / India
*/

get_header(); // Gets the header.php file
$title = get_the_title();
?>
<!-- define symbol in hidden svg document -->
<svg style="display: none" xmlns="http://www.w3.org/2000/svg"  version="2.0">
    <symbol id="googleMap" viewBox="0 0 32 32">
      <g clip-path="url(#clip0_1671_5337)">
        <path
          d="M14.4762 17.5238L27.338 3.14884C27.1255 3.08308 26.9 3.04761 26.6667 3.04761H2.28571C1.02857 3.04761 0 4.07618 0 5.33332V29.7143C0 29.9476 0.0354745 30.1731 0.101236 30.3856L14.4762 17.5238Z"
          fill="#0F9D58"
        />
        <path
          d="M14.4762 17.5238L1.61438 31.8988C1.82687 31.9645 2.05234 32 2.2857 32H26.6667C26.9 32 27.1255 31.9645 27.338 31.8988L14.4762 17.5238Z"
          fill="#4285F4"
        />
        <path
          d="M14.4762 17.5238L28.8511 30.3856C28.9169 30.1731 28.9524 29.9476 28.9524 29.7143V5.33331C28.9524 5.09995 28.9169 4.87448 28.8511 4.66199L14.4762 17.5238Z"
          fill="#D2D2D2"
        />
        <path
          d="M28.9524 29.7143L15.2381 16L12.5714 18.2857L26.2857 32H26.6666C27.9238 32 28.9524 30.9714 28.9524 29.7143Z"
          fill="#F1F1F1"
        />
        <path
          d="M26.6667 3.04761L0 29.7143C0 30.9714 1.02857 32 2.28571 32H2.66667L28.9524 5.71428V5.33332C28.9524 4.07618 27.9238 3.04761 26.6667 3.04761Z"
          fill="#FFDE48"
        />
        <path
          d="M26.6667 3.04761H2.28571C1.02857 3.04761 0 4.07618 0 5.33332V5.5238C0 4.26665 1.02857 3.23808 2.28571 3.23808H26.6667C27.9238 3.23808 28.9524 4.26665 28.9524 5.5238V5.33332C28.9524 4.07618 27.9238 3.04761 26.6667 3.04761Z"
          fill="white"
          fill-opacity="0.2"
        />
        <path
          d="M26.6667 31.8095H2.28571C1.02857 31.8095 0 30.781 0 29.5238V29.7143C0 30.9714 1.02857 32 2.28571 32H26.6667C27.9238 32 28.9524 30.9714 28.9524 29.7143V29.5238C28.9524 30.781 27.9238 31.8095 26.6667 31.8095Z"
          fill="#263238"
          fill-opacity="0.1"
        />
        <path
          d="M6.47618 8.76194V10.3848H8.73142C8.55237 11.3486 7.70665 12.0496 6.47618 12.0496C5.10856 12.0496 3.99618 10.8915 3.99618 9.52766C3.99618 8.16385 5.10856 7.00575 6.47618 7.00575C7.09332 7.00575 7.64189 7.21909 8.07999 7.63052L9.27999 6.43052C8.55237 5.74861 7.60761 5.33337 6.47618 5.33337C4.15999 5.33337 2.28571 7.20766 2.28571 9.52385C2.28571 11.84 4.15999 13.7143 6.47618 13.7143C8.89523 13.7143 10.499 12.0115 10.499 9.61909C10.499 9.32195 10.4724 9.03623 10.4229 8.76195L6.47618 8.76194Z"
          fill="#EEEEEE"
        />
        <mask
          id="mask0_1671_5337"
          style="mask-type: luminance"
          maskUnits="userSpaceOnUse"
          x="0"
          y="0"
          width="32"
          height="32"
        >
          <path
            d="M24.3809 0C21.8895 0 19.6762 1.19619 18.2857 3.04762H2.28571C1.02857 3.04762 0 4.07619 0 5.33333V29.7143C0 30.9714 1.02857 32 2.28571 32H26.6667C27.9238 32 28.9524 30.9714 28.9524 29.7143V14.7924C30.5524 12.4533 32 10.3467 32 7.61905C32 3.40952 28.5905 0 24.3809 0Z"
            fill="white"
          />
        </mask>
        <g mask="url(#mask0_1671_5337)">
          <g opacity="0.25" filter="url(#filter0_f_1671_5337)">
            <path
              d="M24.381 0C20.1714 0 16.7619 3.40952 16.7619 7.61905C16.7619 13.36 23.1733 16.3505 23.9314 24.5448C23.9543 24.7733 24.1486 24.9524 24.3809 24.9524C24.6133 24.9524 24.8114 24.7733 24.8305 24.5448C25.5886 16.3505 32 13.36 32 7.61905C32 3.40952 28.5905 0 24.381 0Z"
              fill="#DB4437"
            />
          </g>
        </g>
        <path
          d="M24.381 0C20.1714 0 16.7619 3.40952 16.7619 7.61905C16.7619 13.36 23.1733 16.3505 23.9314 24.5448C23.9543 24.7733 24.1486 24.9524 24.3809 24.9524C24.6133 24.9524 24.8114 24.7733 24.8305 24.5448C25.5886 16.3505 32 13.36 32 7.61905C32 3.40952 28.5905 0 24.381 0Z"
          fill="#DB4437"
        />
        <path
          d="M24.381 10.2857C25.8537 10.2857 27.0476 9.09182 27.0476 7.61906C27.0476 6.1463 25.8537 4.95239 24.381 4.95239C22.9082 4.95239 21.7143 6.1463 21.7143 7.61906C21.7143 9.09182 22.9082 10.2857 24.381 10.2857Z"
          fill="#7B231E"
        />
        <path
          d="M24.3809 0.190475C28.5524 0.190475 31.939 3.54285 31.9962 7.69905C31.9962 7.67238 32 7.64571 32 7.61905C32 3.40952 28.5905 0 24.3809 0C20.1714 0 16.7619 3.40952 16.7619 7.61905C16.7619 7.64571 16.7657 7.67238 16.7657 7.69905C16.8229 3.54286 20.2095 0.190475 24.3809 0.190475Z"
          fill="white"
          fill-opacity="0.2"
        />
        <path
          d="M24.8305 24.3543C24.8114 24.5828 24.6133 24.7619 24.3809 24.7619C24.1486 24.7619 23.9505 24.5828 23.9314 24.3543C23.1809 16.1981 16.8267 13.1962 16.7657 7.50854C16.7657 7.54664 16.7619 7.58093 16.7619 7.61902C16.7619 13.36 23.1733 16.3505 23.9314 24.5447C23.9543 24.7733 24.1486 24.9524 24.381 24.9524C24.6133 24.9524 24.8114 24.7733 24.8305 24.5447C25.5886 16.3504 32 13.36 32 7.61902C32 7.58093 31.9962 7.54664 31.9962 7.50854C31.9352 13.1962 25.5848 16.2019 24.8305 24.3543Z"
          fill="#3E2723"
          fill-opacity="0.2"
        />
        <path
          d="M24.3809 0C21.8895 0 19.6762 1.19619 18.2857 3.04762H2.28571C1.02857 3.04762 0 4.07619 0 5.33333V29.7143C0 30.9714 1.02857 32 2.28571 32H26.6667C27.9238 32 28.9524 30.9714 28.9524 29.7143V14.7924C30.5524 12.4533 32 10.3467 32 7.61905C32 3.40952 28.5905 0 24.3809 0Z"
          fill="url(#paint0_radial_1671_5337)"
        />
      </g>
      <defs>
        <filter
          id="filter0_f_1671_5337"
          x="-1183.24"
          y="-1200"
          width="2415.24"
          height="2424.95"
          filterUnits="userSpaceOnUse"
          color-interpolation-filters="sRGB"
        >
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feBlend
            mode="normal"
            in="SourceGraphic"
            in2="BackgroundImageFix"
            result="shape"
          />
          <feGaussianBlur
            stdDeviation="600"
            result="effect1_foregroundBlur_1671_5337"
          />
        </filter>
        <radialGradient
          id="paint0_radial_1671_5337"
          cx="0"
          cy="0"
          r="1"
          gradientUnits="userSpaceOnUse"
          gradientTransform="translate(0.794286 3.67847) scale(39.027)"
        >
          <stop stop-color="white" stop-opacity="0.1" />
          <stop offset="1" stop-color="white" stop-opacity="0" />
        </radialGradient>
        <clipPath id="clip0_1671_5337">
          <rect width="32" height="32" fill="white" />
        </clipPath>
      </defs>
    </symbol>
    <symbol id="google360Map" viewBox="0 0 33 32">
      <g clip-path="url(#clip0_1657_5031)">
        <path
          d="M16.6493 31.9653C25.4667 31.9653 32.6146 24.8174 32.6146 16C32.6146 7.18258 25.4667 0.034668 16.6493 0.034668C7.83187 0.034668 0.68396 7.18258 0.68396 16C0.68396 24.8174 7.83187 31.9653 16.6493 31.9653Z"
          fill="#40A459"
        />
        <path
          d="M16.6493 0.034668C16.5278 0.034668 16.4069 0.036543 16.286 0.0392305C16.2553 0.039918 16.2246 0.0406055 16.1939 0.041543C16.0787 0.0447305 15.9638 0.0489805 15.8493 0.0546055C15.8196 0.056043 15.7902 0.0581055 15.7606 0.059668C15.6735 0.0644805 15.5866 0.0699805 15.4998 0.076168C15.4561 0.079293 15.4125 0.082293 15.3689 0.0857305C15.2683 0.0937305 15.1678 0.102605 15.0676 0.11248C15.0158 0.117605 14.9643 0.123293 14.9127 0.128855C14.8508 0.135605 14.789 0.142668 14.7272 0.150105C14.6737 0.156543 14.6201 0.16273 14.5668 0.169668C22.4001 1.19011 28.4496 7.88829 28.4496 15.9998C28.4496 24.1113 22.4002 30.8095 14.5668 31.83C14.6202 31.8369 14.6737 31.8432 14.7273 31.8495C14.789 31.857 14.8508 31.864 14.9128 31.8708C14.9644 31.8764 15.016 31.8821 15.0677 31.8872C15.1679 31.897 15.2683 31.9059 15.369 31.9139C15.4125 31.9174 15.4561 31.9204 15.4998 31.9235C15.5866 31.9297 15.6735 31.9352 15.7607 31.94C15.7903 31.9417 15.8198 31.9436 15.8493 31.945C15.9639 31.9507 16.0788 31.9549 16.194 31.9581C16.2246 31.959 16.2553 31.9597 16.2861 31.9604C16.4068 31.9631 16.5278 31.965 16.6493 31.965C25.4668 31.965 32.6146 24.817 32.6146 15.9997C32.6146 7.18229 25.4667 0.034668 16.6493 0.034668Z"
          fill="#378B4E"
        />
        <path
          d="M14.5668 14.6117L21.227 10.7897C21.227 10.7897 28.5125 12.3415 30.194 9.27323L30.7243 8.30554L31.1855 9.30804C32.1431 11.3895 32.6493 13.7036 32.6493 16C32.6493 21.2932 30.0274 26.2395 25.6357 29.2314L25.1826 29.5402L14.5668 14.6117Z"
          fill="#898790"
        />
        <path
          d="M32.6146 16C32.6146 13.241 31.9147 10.6455 30.6828 8.38135L30.1941 9.27316C29.6034 10.351 28.8261 11.453 28.0513 12.4445C28.3114 13.5879 28.4497 14.7778 28.4497 16C28.4497 20.4585 26.6217 24.4896 23.6747 27.386L25.1654 29.5526C29.6441 26.7248 32.6146 21.6882 32.6146 16Z"
          fill="#7A797F"
        />
        <path
          d="M16.6492 32C11.1833 32 6.14862 29.2449 3.1815 24.6302L2.89856 24.1902L11.7902 16.6941L22.024 31.0767L21.3719 31.2883C19.8462 31.7605 18.2574 32 16.6492 32Z"
          fill="#3D9AE3"
        />
        <path
          d="M22.0887 31.0516L21.0064 29.502C19.0958 30.7103 16.9048 31.5591 14.5603 31.8645C15.2419 31.9533 15.9434 31.9653 16.6493 31.9653C18.5523 31.9653 20.3963 31.6625 22.0887 31.0516Z"
          fill="#1D81CE"
        />
        <path
          d="M11.7903 16.6941L14.5668 14.6117L25.2422 29.5041L24.7233 29.8086C23.9902 30.2388 23.2187 30.6124 22.4302 30.9189L22.024 31.0769L11.7903 16.6941Z"
          fill="white"
        />
        <path
          d="M22.024 31.0768C23.1615 30.6721 24.2401 30.1428 25.2422 29.504L23.7037 27.3579C22.8665 28.1849 21.9382 28.9199 20.9354 29.5468L22.024 31.0768Z"
          fill="#E0E0E3"
        />
        <path
          d="M2.62728 23.6993C2.18916 22.9044 1.81703 22.0672 1.52128 21.211L1.38928 20.7073L20.12 7.67029L22.8965 9.75273L2.89866 24.1902L2.62728 23.6993Z"
          fill="#FFCE00"
        />
        <path
          d="M24.5778 15.6385C23.5957 14.6129 18.6969 9.34144 18.6969 6.282C18.6969 2.81806 21.515 0 24.9789 0C28.4428 0 31.2609 2.81806 31.2609 6.282C31.2609 9.33937 26.362 14.6124 25.38 15.6385C25.1614 15.8669 24.7964 15.8669 24.5778 15.6385Z"
          fill="#CD2900"
        />
        <path
          d="M24.979 8.39911C23.4288 8.39911 22.1677 7.13799 22.1677 5.58786C22.1677 4.03774 23.4289 2.77661 24.979 2.77661C26.5292 2.77661 27.7902 4.03774 27.7902 5.58786C27.7902 7.13799 26.5292 8.39911 24.979 8.39911Z"
          fill="#891D00"
        />
        <path
          d="M9.70777 11.6616C11.5258 11.6616 13.005 10.1825 13.005 8.36444C13.005 8.07694 12.7719 7.84382 12.4843 7.84382H10.4019C10.1144 7.84382 9.88127 8.07688 9.88127 8.36444C9.88127 8.65194 10.1143 8.88507 10.4019 8.88507H11.903C11.6675 9.87888 10.7725 10.6204 9.70771 10.6204C8.46384 10.6204 7.45177 9.60838 7.45177 8.36451C7.45177 7.12063 8.46384 6.10857 9.70771 6.10857C10.2577 6.10857 10.7874 6.3087 11.1993 6.67201C11.415 6.86226 11.744 6.84157 11.9341 6.62601C12.1243 6.41038 12.1036 6.08138 11.8881 5.8912C11.2858 5.35995 10.5115 5.06738 9.70771 5.06738C7.88971 5.06738 6.41052 6.54651 6.41052 8.36457C6.41052 10.1826 7.88971 11.6616 9.70777 11.6616Z"
          fill="white"
        />
      </g>
      <defs>
        <clipPath id="clip0_1657_5031">
          <rect
            width="32"
            height="32"
            fill="white"
            transform="translate(0.666626)"
          />
        </clipPath>
      </defs>
    </symbol>
    <symbol id="matterPort360" viewBox="0 0 33 32">
      <circle cx="16.6666" cy="16" r="16" fill="white" />
      <path
        d="M23.6612 6.20605L16.751 8.14797L9.84082 6.20605L7.06665 6.98787V24.8182L9.84082 25.6L16.751 23.6581L23.6612 25.6L26.4354 24.8182V6.98787L23.6612 6.20605ZM20.887 19.5221L16.751 18.3619L12.615 19.5221V12.284L16.751 13.4441L20.887 12.284V19.5221Z"
        fill="#B7BABB"
      />
      <path
        d="M16.7259 9.71164V13.4442L9.84094 11.5275V25.6L7.06677 24.8182V6.98792L16.7259 9.71164Z"
        fill="black"
      />
      <path
        d="M20.8872 21.0606L16.726 19.9005V23.6583L23.6614 25.6002V11.5276L20.8872 12.2842V21.0606Z"
        fill="black"
      />
      <path
        d="M23.6612 6.20605L26.4102 6.98787L16.7258 9.71159L7.06665 6.98787L9.84082 6.20605L16.7258 8.14797L23.6612 6.20605Z"
        fill="#999999"
      />
      <path
        d="M16.7259 18.3621L20.8871 19.5222V21.0606L16.7259 19.9005L12.5898 21.0606V19.5222L16.7259 18.3621Z"
        fill="#999999"
      />
    </symbol>
</svg>


      <div class="page__header--band">
         <img src="<?php echo get_template_directory_uri(); ?>/images/outlet-image-2.png" alt="" />
        <!-- <h2 style="color: #fff">Indian Outlets</h2> -->
      </div>
      <div class="regional__outlets">
        <div class="col-box page__content">
          <div class="gifting__delight--tab">
            <div class="action--list">
              <ul class="tabs">
                <li class="tab active" data-tab="tab1">Tamil Nadu</li>
                <li class="tab" data-tab="tab2">Pondicherry</li>
                <li class="tab" data-tab="tab3">Karnataka</li>
                <li class="tab" data-tab="tab4">Andhra Pradesh</li>
                <li class="tab" data-tab="tab5">Delhi</li>
              </ul>
              <div class="custom-dropdown" id="tab-selector">
                <div class="dropdown-label">Tamil Nadu</div>
                <div class="dropdown-options">
                  <div class="dropdown-option active" mobile-tab="tab1">
                    Tamil Nadu
                  </div>
                  <div class="dropdown-option" mobile-tab="tab2">
                  Pondicherry
                  </div>
                  <div class="dropdown-option" mobile-tab="tab3">Karnataka</div>
                  <div class="dropdown-option" mobile-tab="tab4">Andhra Pradesh</div>
                  <div class="dropdown-option" mobile-tab="tab5">Delhi</div>
                </div>
              </div>
            </div>
            <div class="tab-content active" id="tab1">
            <div class="store__locations">
            <div class="store__location">
  <address>
    <strong>AATHUR</strong> <br />
    No: 82/6, A2, Thulakanoor Village, Attur Taluk, Salem, Tamil Nadu 636141
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.591559211742918,78.6270629421917" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ADYAR</strong> <br />
    No: 9, LB Road, Near Adyar Manere, Shastri Nagar, Adyar, Chennai, Tamil Nadu 600020
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.006048324371186,80.25752607716024" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/tAwWUog5JnzqfYpp7" target="_blank">
      <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=6io2GCHXpYm" target="_blank">
      <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>ANNA NAGAR</strong> <br />
    Shop No: C 42, 12th Main Road, Anna Nagar, AF Block, Anna Nagar, Chennai, Tamil Nadu 600040
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.08503586097372,80.20349633703066" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/re3GQTSVrkKEhjzt9" target="_blank">
      <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=GzqWD8gWEJZ" target="_blank">
      <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>ARCOT</strong> <br />
    No: 64/1, 2nd Street, Buransemedu Apollo Hospital Bengaluru - Chennai Highway, Next to K.H, Arcot, Tamil Nadu 632503
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.912777123240996,79.2952734057305" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>ARIYANUR-SALEM</strong> <br />
    No: SF/24/1A 1, Part-C, Nallarayampatti, NH47, Coimbatore-Salem Highway, Ariyanur, Salem, Tamil Nadu 636308
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.589979117856661,78.07037106135908" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ASHOK NAGAR METRO </strong> <br />
    Metro Station, Jawaharlal Nehru Road, Ashok Nagar, Opposite Udhayam Cinema
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0352749157,80.2108249068" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>AVADI</strong> <br />
    No: 245, New Military Road, Tirumalairajapuram, Avadi, Chennai, Tamil Nadu 600071
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.117771683626389,80.09527379722793" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>AYANAMBAKKAM</strong> <br />
    Church, Tank, Ayanambakkam Road, Ambattur, Chennai, Tamil Nadu 600053
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.097190038421386,80.14666266417598" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CBE-GANDHIPURAM</strong> <br />
    No: 313, Bharathiyar Road, New Siddhapudur, Coimbatore, Tamil Nadu 641044
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.016337608912927,76.97118034007514" target="_blank">
      <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>CBE-NAVAKARAI</strong> <br />
    S F No: 218/3A3, Door No: 2/285 A-Palakkad National Highways, Navakarai, Mavuthampathi Village, Madukkarai, Coimbatore, Tamil Nadu 641105
  </address>
  <div class="store___direcitons  ">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.855693602378754,76.86232490313631" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CENTRAL RAIL STATION</strong> <br />
    Ground Floor, Gate No: 4 & 5, Chennai Central Railway Station, Chennai, Tamil Nadu 600003
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.08265494909221,80.27500876721756" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/Tne6vyE4Db1RUjAh9" target="_blank">
      <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=UDTY9dEBzKi" target="_blank">
      <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CHEPAUK </strong> <br />
    No: 4/353, Quaide Milleth Road, Triplicane High Road, Chepauk, Chennai, Tamil Nadu 600005
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0662152580,80.2737478539" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CHIDAMBARAM </strong> <br />
    No: 17 & 18, East Car Street, Chidambaram, Tamil Nadu 608001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.4014530000,79.6960450000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CHINNAR</strong> <br />
    NH44, NHAI-Way Side Amenities Complex, Chinnar, Tamil Nadu 635117
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.63861968499825,78.065275016491" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CHROMPET</strong> <br />
    No: 367, Chennai-Theni Highway, Chromepet, Chennai, Tamil Nadu 600044
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.957485227205686,80.14333056715496" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/8rJGkH9hLDLq7kqf6" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=4f3CvroWAhf" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>CMRL-AIRPORT-2</strong> <br />
    Unit No: 89, Chennai International Airport, Grand Southern Trunk Road, Meenambakkam, Chennai, Tamil Nadu 600016
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.981154932261711,80.16477001878448" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CMRL-CMBT</strong> <br />
    Unit No:3693, CR5, CMBT Passenger Way, Koyambedu, Chennai, Tamil Nadu 600107
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.068654365035464,80.2045999223886" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>CUDDALORE </strong> <br />
    No: 3H, Bharathi Road, Manjakuppam, Cuddalore, Tamil Nadu 607001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.7505326000,79.7606373000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>DINDIGUL </strong> <br />
    708/1A/1B, Thomaiyarpuram, Begampur Post, Madurai-Dindigul Bypass Road, Dindigul, Tamil Nadu
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.336679491110125,77.95701581952353" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>ECR-PANAIYUR </strong> <br />
    No: 13 & 43, East Coast Road, Panaiyur, Chennai, Tamil Nadu 600119
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.8810095215,80.2445291196" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>EKKATUTHANGAL </strong> <br />
    No: 2, Jawaharlal Nehru Road, Balaji Nagar, Ekkatuthangal, Chennai, Tamil Nadu 600032
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0222697000,80.2061254000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ERODE </strong> <br />
    No: 154, Parimalam Complex, Mettur Road, Erode, Tamil Nadu 638011
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.343931015735352,77.7180993632803" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>GEORGE TOWN</strong> <br />
    No: 210, NSC Bose Road, Badri Garden, George Town, Chennai, Tamil Nadu 600001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.088666581164889,80.2850194630767" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>GERUGAMBAKKAM</strong> <br />
    VGN Apartment, Plot No: 1, Shop No: 2, Gerugambakkam, Tamil Nadu 600128
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.010870666563967,80.13928824731143" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>GUDUVANCHERY </strong> <br />
    No: 2, GST Road, Thailavaram Village, Maraimalai Nagar, Chennai-Trichy Highway, Guduvanchery, Tamil Nadu 603202
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.8330380553,80.0477204472" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>HOSUR BAGALUR ROAD </strong> <br />
    Survey No: 527/2A, Saptagiri Nagar, Teachers Colony, Bagalur Road, Hosur, Hosur MPTY, Krishnagiri, Tamil Nadu-635109
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.742800053523796,77.8333433889982" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>HOSUR </strong> <br />
    No: 181 & 182, SIPCOT Industrial Area, Mukandapalli, Bangalore Highway, Hosur, Tamil Nadu
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.7472410000,77.8106040000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KANCHIPURAM SHOP-II</strong> <br />
    No: 68, Near Kanchipuram Bus Stand, Nellukara Street, Kanchipuram, Tamil Nadu 631501
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.8381311000,79.7029622000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KARUR </strong> <br />
    123, Jawahar Bazaar Road Madavilagam, KVR Building, Karur, Tamil Nadu 639001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.9593712000,78.0763635000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KOLATHUR</strong> <br />
    No: 23, 70 Feet Road S1 & S2, Ground Floor, Jawahar Campus, Jawahar Road, Kolathur, Chennai, Tamil Nadu 600082
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.113241059783883,80.22736251609258" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KOYEMBEDU METRO </strong> <br />
    CMRL, Koyambedu Market East Road, Koyembedu Metro Station, Koyambedu, Chennai, Tamil Nadu 600107
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0735530998,80.1951457188" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KOYEMBEDU </strong> <br />
    No: 221, Jawaharlal Nehru Road, Opp. To CMBT Stand, Koyambedu, Jai Nagar, Arumbakkam, Chennai, Tamil Nadu 600107
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.071374748505162,80.20345548925562" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>MADIPAKKAM </strong> <br />
    No: 4, Medavakkam Main Road, Ganesh Nagar, Chennai, Tamil Nadu 600091
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.9619309032,80.1873706654" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/3rZoPFJtLtcsdxab6" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=wdp2urnBPhA" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MADURAI- OTHAKADAI</strong> <br />
    BPCL, OSTS Othakkadai, Kodikulam Village, Madurai Melur Road, NH 45B, Madurai, Tamil Nadu 625104
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/9.973662668252304,78.2162834394143" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MADURAI VILLAKUTHOON</strong> <br />
    NO 285, KAMARAJAR SALAI, VILAKKUTHOON, MADURAI - 625001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/9.91773841777996,78.12389544738105" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MADURAI-VADIPATTI</strong> <br />
    T-Vadipatti Village, Madurai Dindigul Road, NH7, Madurai, Tamil Nadu 625218
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.058933568102042,77.98525822566769" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MAMALLAPURAM</strong> <br />
    Shop No: 78, Nehru Illam, E.C.R, Mada Koil Street, Mahabalipuram, Salavankuppam, Tamil Nadu 603104
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.626814246723997,80.19406539024017" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>METTUPALAYAM</strong> <br />
    S F No: 550/2A, Ooty Main Road, Odandurai Village, Mettupalayam, Coimbatore, Tamil Nadu 641301
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.32166075702776,76.9161004075845" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>MOGAPPAIR EAST </strong> <br />
    No: 1J, Pari Road, JJ Nagar, Mogappair East, Chennai, Tamil Nadu 600037
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0805935389,80.1812431589" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MYLAPORE </strong> <br />
    No: 70, Ramakrishna Mutt Road, Mylapore, Chennai, Tamil Nadu 600004
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.03394476158401,80.26774369269216" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>NAMAKKAL </strong> <br />
    66/214, SALEM MAIN ROAD, OPP K.S. THEATRE, Namakkal, Tamil Nadu-637001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.2265791000,78.1644699000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>NANDAMBAKKAM </strong> <br />
    No: 38, Mount Poonamalle High Road, Poonthottam Colony, Nandambakkam, Tamil Nadu 600089
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0149360571,80.1922422275" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>NANGANALLUR</strong> <br />
    No: 6, 6th Main Road, Nanganallur, Chennai, Tamil Nadu 600061
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.980607447137455,80.19038805833983" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/aZAV7qQRFhd9rrUS7" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=pGN1vRB5mLP" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>NUNGAMBAKKAM</strong> <br />
    No: 1/9 & 1/10, Wheatcrofts Road, Seetha Nagar, Nungambakkam, Chennai, Tamil Nadu 600034
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.064724510261035,80.24333027563227" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>OOTY</strong> <br />
    No: 49/58, Commercial Road, Ooty-623001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.410811786673998,76.70738938155915" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>


<div class="store__location">
  <address>
    <strong>PALLIKARANAI</strong> <br />
    No: 69/2, 200 Feet Radial Road, Pallikaranai, Chennai, Tamil Nadu 600129
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.948144188277322,80.20372506617942" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/JDoQytVSetPHqFqSA" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=RR1yq6W4A4N" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PAMMAL </strong> <br />
    No: 196, Pammal Main Road, Chennai, Tamil Nadu 600075
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.9756291365,80.1325563714" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PERAMBUR SHOP [NEAR RAILWAY]</strong> <br />
    Shop No: 79, Perambur High Road, Perambur, Chennai, Tamil Nadu 600039
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.1079865686,80.2451685816" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PERAMBUR SHOP 2</strong> <br />
    No: 2 & 1, Siruvallur High Road, Jagannathan Colony, Perambur, Chennai, Tamil Nadu 600011
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.108373284698883,80.24191183457071" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PERIYAMET</strong> <br />
    Shop No: 60, Ground Floor, Raja Muthiah Road, 51-151, Vepery High Road, Periyamet, Chennai, Tamil Nadu 600007
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.084266622300419,80.27025535334911" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PERUNDURAI</strong> <br />
    NH 47, Kovai To Salem Road, Solipalayam, Perundurai.
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.301967016538274,77.60004366741872" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>PONDY BAZAAR </strong> <br />
    No: 87, Sir Theagaraya Road, Pondy Bazaar, Parthsarathi Puram, T. Nagar, Chennai, Tamil Nadu 600017
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0407858658,80.2376396209" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PORUR</strong> <br />
    S& S SOLITAIRE BUILDING, PORUR HIGH ROAD, Tamil Nadu-600116
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.032072393502338,80.16352053918239" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/nytAzeiZxmxdmDx9A" target="_blank">
      <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=dZvfoLNU5q7" target="_blank">
      <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>PURASAIWAKKAM </strong> <br />
    No: 50, 51 & 52, Purasaiwakkam High Road, Purasaiwakkam, Chennai, Tamil Nadu 600007
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.085349317309406,80.25371449881007" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/MdAsDSR2ztnLvACw6" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=1kHDnjXotBM" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RAILWAY SHOP - CBE</strong> <br />
    No :18 & 19, State Bank Road, Near Railway Station, Race Course, Coimbatore
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.9992613082,76.9681364670" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RASIPURAM</strong> <br />
    No: 301, Brindavan Garden, Salem-Madurai Road, Athanur, Tamil Nadu 637401
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.49220429767161,78.15369037441204" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ROYAPURAM </strong> <br />
    No: 110, M S Koil Street, Royapuram, Chennai, Tamil Nadu 600013
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.1083405380,80.2913381159" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SAIDAPET</strong> <br />
    No: 1, Anna Salai, Anna Nagar, Saidapet, Chennai, Tamil Nadu 600015
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.015151723880713,80.22499937375788" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>SALEM- NEIKARAPATTI</strong> <br />
    No: 3/2-2 & 3/2-3, NH47, Coimbatore Main Road, Neikkarapatti, Salem, Tamil Nadu 636010
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.618557288622332,78.10713613492912" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SALEM RAILWAY</strong> <br />
    Platform No: 1, Salem Junction, IRCTC Food Plaza, Salem Railway Station, Salem, Tamil Nadu 636005
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.670694565981465,78.11381489683511" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SENOY NAGAR METRO</strong> <br />
    Shop No: 12, Pulla Avenue, Shenoy Nagar, Chennai, Tamil Nadu 600030
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.077577120348245,80.22515509154351" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SHASTRI NAGAR</strong> <br />
    No: 11, Plot No: 57, Mahatma Gandhi Road, Shastri Nagar, Adyar, Chennai, Tamil Nadu 600020
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.997164605326386,80.25823900293214" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/nKRzyZn1HMH6UGKHA" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=A9uUmntkL68" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SHOLAVARAM </strong> <br />
    Shop No: 604/2, B1A, Bypass Road, Cholavaram, Chennai, Tamil Nadu 600067
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.23124,80.16043" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SINGAPERUMAL KOVIL </strong> <br />
    No: 2, GST Road, S.P Kovil, Next To Fortune Hotel, Chennai, Tamil Nadu 603204
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.7642286000,80.0026662000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>T.H.ROAD</strong> <br />
    Shop No: 748, No: 545 & 546, T.H Road, Old Washermanpet, Washermanpet, Chennai, Tamil Nadu 600021
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.118251868827366,80.28457208238463" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>T.NAGAR</strong> <br />
    No: 94, Usman Road, T. Nagar, Chennai, Tamil Nadu 600017
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.036384933131647,80.23049714009251" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TAMBARAM</strong> <br />
    No: 313, Muthuranga Mudali Street, Near Deepam Hospital, West Tambaram, Chennai, Tamil Nadu 600045
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.928796438768098,80.1174537440172" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/VGe4VShZDskkcVUg7" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=srQiFM6Nfg2" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TAMBARAM CAMP ROAD </strong> <br />
    No: 172/173, Velachery-Tambaram Main Road, Aarthi Nagar, Selaiyur, Chennai, Tamil Nadu 600059
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.9227146225,80.1372002810" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/ESvh71doWnui6C5q7" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=km3RnmHwKNu" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THALAMBUR-OMR </strong> <br />
    Shop No: 12, Old Mahabalipuram Road, Egattur, Tamil Nadu 603103
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.8328635000,80.2270395000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THANJAVUR CHOLAN NAGAR </strong> <br />
    NO:1, CHOZHAN NAGAR, TANJORE - TRICHY HIGHWAYS, OPP:RTO OFFICE, Thanjavur, Tamil Nadu-613001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.7312030000,79.0879310000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THANJAVUR THOMAS NAGAR </strong> <br />
    NO.6. DANIEL THOMAS NAGAR, OLD HOUSING UNIT TRICHY MAIN ROAD, Thanjavur, Tamil Nadu-613007
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.7662970000,79.1263800000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>THIRUMULLAIVOYAL</strong> <br />
    Shop No: 58, Madras Thiruvallur High Road, 88-46, NH 716, Vivekananda Nagar, Thirumullaivoyal, Chennai, Tamil Nadu 600109
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.1288157888146,80.13945682793104" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THIRUVANNAMALAI-VENGI </strong> <br />
    No: 2, Polur Road, Mathalangulam, Tiruvannamalai, Tamil Nadu 606601
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.2587398000,79.0679619000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THIRUVOTTIYUR </strong> <br />
    NO:915, THIRUVOTTRIYUR HIGH ROAD (OLD SBI BUILDING) THIRUVOTTRIYUR CHENNAI, Tamil Nadu-600019
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.1582983382,80.3021470830" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>THOPPUR</strong> <br />
    NH 47, near BPCL petrol pump, Thombarambakkam Village, Thoppur, Tamil Nadu 636807
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.016843533569523,78.08925361471267" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TINDIVANAM</strong> <br />
    Shop No: 56, Chennai-Trichy Highway, Nallathur, Tamil Nadu 604307
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.298100168791711,79.73351944110298" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TIRUPUR PALLADAM ROAD </strong> <br />
    NO:375A-SAK.COMPLEX, PALLADAM ROAD, TIRUPUR, Tamil Nadu-641604
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.0923460000,77.3475280000" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TIRUPUR PN ROAD </strong> <br />
    No: 208/650, KRBS Tower, PN Road, Tiruppur
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.1199613506,77.3401257374" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>TRICHY ANNAMALAI NAGAR </strong> <br />
    NO:14, TWIN TOWERS, KARUR BYPASS ROAD, ANNAMALAi NAGAR Trichy, Tiruchirappalli(Tamil Nadu) -620018
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.8301229443,78.6857590824" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TRICHY RAILWAY STATION </strong> <br />
    Shop No: 25, Bharathiyar Salai, IRCTC Food Plaza, Railway Station, Sangillyandapuram, Tiruchirappalli, Tamil Nadu 620001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.794359666062919,78.68540744407538" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TRICHY- SAMAYAPURAM</strong> <br />
    BPCL, OSTS BP-Trichy, Bharat Petroleum Corp.Ltd, NH45, Sanamangalam Village, Manachanallur Taluk, Trichy, Tamil Nadu 621109
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.03209588914415,78.8080171865053" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TRICHY-THILAINAGAR</strong> <br />
    NO:C-41,SASTRI ROAD,THILLAINAGAR, 7th CROSS CORNER,THILLAINAGAR, Tiruchirappalli, Tamil Nadu-620018
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.8223723359,78.6874150112" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>TRIPLICANE </strong> <br />
    No: 47, Bharathi Salai, Narayana Krishnaraja Puram, Triplicane, Chennai, Tamil Nadu 600005
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0583856566,80.2768095955" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ULUNDURPET</strong> <br />
    NH45 Highway Road, BPCL, Chennai-Theni Highway, Sengurichi, Ulundurpet, Tamil Nadu 606107
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/11.718845572065275,79.33609162447678" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>VADAPALANI METRO </strong> <br />
    Shop No: 67, Vadapalani Metro Station, 100 Feet Road, Near SIMS Hospital, Dharan Singh Colony, Vadapalani, Chennai, Tamil Nadu 600026
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.050874088021214,80.21185825746223" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VADAPALANI </strong> <br />
    No: 1/B, Arcot Road, Vadapalani, Chennai, Tamil Nadu 600026
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.0483308864,80.2057655901" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/RgXQZDo4XNjNCPjy6" target="_blank">
        <svg class="icon"><use xlink:href="#google360Map" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=e2tj6cfAPsU" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VANIYAMBADI </strong> <br />
    Shop No: 36B/3, Nh-46, Bengaluru-Chennai Highway, Vaniyambadi, Tamil Nadu 635751
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.655215058107437,78.60254219997547" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VELACHERRY</strong> <br />
    No: 37F, Velachery Main Road, Vijayanagar, Velachery, Chennai, Tamil Nadu 600042
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.973319187795928,80.22026649595229" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://goo.gl/maps/wy5cdsubaAJ4u58B6" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
      <a href="https://my.matterport.com/show/?m=rGV7oU7Xp7s" target="_blank">
        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VELLAKOVIL- THENNELAI</strong> <br />
    Thennilai, Tenbagam NH67, Vellakovil, Karur, Tamil Nadu 641602
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/10.956685088791115,77.85186614413719" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>VETTUVANKENI</strong> <br />
    Shop No: 3, 243B, SH 49, Vettuvankeni, Chennai, Tamil Nadu 600115
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.936129462978622,80.25250547805861" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VIKKIRAVANDI</strong> <br />
    No: 5, Chennai‐Trichy Highway, Mundiyambakkam Service Road, Mundiyam, Tamil Nadu 606107
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.008130171255187,79.52680047085265" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VIKKIRAVANDI TOLL PLAZA</strong> <br />
    SF No: 1/1, NH45, Near Vikravandi Toll Plaza, Villupuram, MKT Nagar, Vikravandi, Tamil Nadu 605652
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.022107074293865,79.53729187306368" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>WASHERMENPET</strong> <br />
    No: 99, Maniyakkar Choultry Road, Washermanpet, Chennai, Tamil Nadu 600021
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.1181898744958,80.28471198351995" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<!-- -->
            </div>
           </div>
            <div class="tab-content" id="tab2">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> PONDICHERRY </strong>
                    <br />
                    No: 11, Jawahar Lal Nehru Street, Near Mankula Vinayagar Temple, White Town, Pondicherry, Puducherry 605001
                  </address>
                  <div class="store___direcitons">
                    <span class="store__directions--text">Get Directions:</span>
                    <span class="store__directions--icon">
                      <a href="https://google.com/maps/place/11.935280672145025,79.83299530270706" target="_blank">
                        <svg class="icon"><use xlink:href="#googleMap" /></svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab3">
              <div class="store__locations">
              <div class="store__location">
  <address>
    <strong>AIRPORT ROAD</strong> <br />
    Sy No: 37/2, New International Airport Road
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.151987,77.620876" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ATTIBELE</strong> <br />
    No: 368/2, Hosur Main Road, Attibele Village, Hobli Anekal Taluk, Anekal, Bangalore Urban, Karnataka 560105
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.781455,77.764232" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BAGMANE TECHPARK </strong> <br />
    No: 61 & 63, Doddanekundi Village, Situated at Mahadevapura, KR Puram, Hobli, Bangalore, Karnataka 560048
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.98610071354185,77.69432339360169" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BANASHANKARI- KITCHEN</strong> <br />
    2nd, 3 Road Floor, Municipal No:193, M.H Chandrappa, Near Gowri Apartments, New Bel Road, Mathikere, Bangalore., Yeshwanthapura, B.B.M.P North, Karnataka 560054
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.927063,77.547963" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BANNERGHATTA</strong> <br />
    No-154/10, Bilekahalli Village, Bannerughatta Main Road, Bangalore, Bommanahalli, B.B.M.P South, Karnataka 560076
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.892991,77.598602" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>BASHYAM CIRCLE</strong> <br />
    No: 19/747, 60th Cross, 5th Block, Rajaji Nagar, Rajajinagara B.B.M.P West, Bangalore, Karnataka 560010
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.984387,77.553987" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BATTARAHALLI</strong> <br />
    No:247/195-15 to 250/198-18, R.M.S Colony, Bhattarahalli Village, Old Madras Road, K.R.Puram, Karnataka
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.019845,77.709884" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BEL ROAD-KITCHEN</strong> <br />
    2nd, 3 Road Floor, Municipal No:193, M.H. Chandrappa, Near Gowri Apartments, New Bel Road, Mathikere, Bangalore, Yeshwanthapura, B.B.M.P North, Karnataka 560054
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.038990,77.564124" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BELLANDUR </strong> <br />
    No: 626,  Sai Sobagu 3 Road Main Road, Green Glen Layout, Bellandur, Bangalore, Karnataka 560103
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.927425325154319,77.67173191922184" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>BOMMASANDRA</strong> <br />
    No: 254/B, Bommasandra, Near Narayana Hrudayalaya
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.807449,77.697782" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>BTM LAYOUT</strong> <br />
    No: 3, 100ft Road, 16th Main Road, BTM Layout, 1st Stage, Bangalore, Karnataka 560078
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.916800,77.609562" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ELECTRONIC CITY</strong> <br />
    No: 287/288, 1st Cross Street, Neeladri Nagar, Doddathoguru Village, Bangalore, Karnataka 560100
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.839053,77.650595" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>EMBASSY TECH</strong> <br />
    Survey No: 8/1 to 55/6, Devarabeesanahalli Village, Varthur Hobli, Bangalore, Mahadevapura , B.B.M.P East, Karnataka 560103
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.9280287,77.6924444" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>GANDHIBAZAAR</strong> <br />
    No: 200, Gandhi Bazaar Main Road, Near Canara Bank, Basavanagudi, Bangalore, Basavanagudi, B.B.M.P South, Karnataka 560004
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.944339,77.572948" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>GANGA NAGAR</strong> <br />
    No: 34, Bellary Main Road, Ganganagar, Bangalore, Hebbala R.B.M.P North, Karnataka 560032
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.022782,77.584863" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>HASSAN</strong> <br />
    No: 378/2, Baldari Village, NH75, BM Road, Udaypura, Hassan, Karnataka 573116
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.961254950571263,76.32976536441124" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>HEBBAL</strong> <br />
    No: 11/2A/31, Ward No: 19, Near Bhadrappa Layout, Ring Road, Nagashetty Halli Village, Kasaba Hobli, Bangalore.
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.047922,77.578496" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>HOODI</strong> <br />
    No 63/1, Ayyappa Nagar, Hoodi, K R Puram Main Road, Bangalore, Karnataka 560036
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.003112122011085,77.71296133068888" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>HSR LAYOUT</strong> <br />
    BDA Complex, No: 27, 14th Main Road, Sector 6, HSR Layout, Bengaluru, Karnataka 560102
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.913751,77.637398" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>INDIRA NAGAR</strong> <br />
    No: 12, CMH Road, Indra Nagar, Karnataka
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.978211,77.639508" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>JPNAGAR-KITCHEN</strong> <br />
    No:35/4, 24th Main Road, JP Nagar 7th Phase, Puttenahalli, Bangalore, Bommanahalli, B.B.M.P South, Karnataka 560078
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.893408,77.586307" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KAMMANA HALLI</strong> <br />
    No: 421,  2nd Street, 4th Cross Road, Kammanahalli, Bengaluru, Karnataka 560043
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.022153,77.638582" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>KANAKAPURA</strong> <br />
    No: 61/2 -A, 63 & 64, Doddakallasandra Village
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.883713,77.548644" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>KORAMANGLA</strong> <br />
    No: 344, BPCL Petrol Bunk, 7th Block, 80 ft Road, Koramangala, Bangalore, BTM Layout, B.B.M.P South, Karnataka 560034
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.935791,77.614884" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MAHADEVAPURA- KITCHEN</strong> <br />
    No: 66/2 & 67/1, Garudacharpalya, Whitefield Main Road, Mahadevapura, B.B.M.P East, Karnataka 560048
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.993810,77.699265" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MALLESWARAM</strong> <br />
    No: 57, 6th Cross, Sampige Road, Malleshwaram, Bangalore, Malleshwaram B.B.M.P North, Karnataka 560003
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.997713,77.571157" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MARATHAHALLI</strong> <br />
    No: 135, Situated at Munnekolala, Hal Main Road, Varthur Hobli, Marathalli, Bangalore, Mahadevapura B.B.M.P East, Karnataka 560066
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.956669,77.702104" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>MYSORE</strong> <br />
    Multi Functional Complex East, Mysore Railway Station, Mysore, South Western Railway, Karnataka 570001
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.315150,76.644898" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>NAGAVARA</strong> <br />
    No 141, Thanisandra Main Road, 5th Block, MS Ramaiah North City, Manayata Tech Park, Nagawara, Bengaluru, Karnataka 560045
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.041038,77.624201" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RMZ ECOWORLD [BELLANDUR]</strong> <br />
    RMZ Eco World (Food Court), No: 4A, ORR, Bellandur, Bangalore, Mahadevapura, B.B.M.P East, Karnataka 560037
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.924440,77.688348" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RMZ INFINITY-BLR</strong> <br />
    RMZ Infinity, Swamy Vivekanada Road, Bennigana Halli, Bangalore, Sarvagna Nagar, B.B.M.P East, Karnataka 560033
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.994062993089397,77.66132913815171" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RMZ-ECOSPACE [BELLANDUR-II]</strong> <br />
    The Market Place, RMZ Eco Space, Devara Bisanahalli, Sarjapur Road, ORR Bellandur Bangalore, Mahadevapura , B.B.M.P East, Karnataka 560037
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.926310,77.680001" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>RMZ-ECOWORLD [ADHARSH]</strong> <br />
    The Bay(Adarsh), SY No: 72/1, Dodda Kannalli Village, Varthur Hobli, Bangalore, Mahadevapura , B.B.M.P East, Karnataka 560035
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.9200302,77.6845604" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SARJAPURA ROAD</strong> <br />
    No: 28/29, RR Mansion Ground Floor Sarjapura Main Road, Bangalore, Karnataka 562125
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.919006773444563,77.67092246129758" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>SARJAPURA-KITCHEN</strong> <br />
    No: 53/2, SL. No: 319, Doddakannelli Village, Varthur Hobli, Bangalore, Mahadevapura, B.B.M.P East, Karnataka 560035
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.911003,77.687073" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SATELLITE</strong> <br />
    No: 153, Ward No: 41, Mysore Road, Satellite Bus Station
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.953752,77.543849" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>SHANTHI NAGAR</strong> <br />
    Ground Floor, TTMC Shanthi Nagar, BMTC Bus Stand.
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.954423,77.593025" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>T.C.PALYA</strong> <br />
    No:128/2, TC Palya Main Road, Next to Lotus Convention Centre, Sir M.V. Nagar, Ramamurthy Nagar Extension, Bangalore, KR Puram, B.B.M.P East, Karnataka
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.017485,77.668555" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>ULSOOR</strong> <br />
    NOS, Meeanee Avenue Road, 5 & 6 Tank Road, Civil Station, Bangalore, Shivajinagara, B.B.M.P East, Karnataka 560042
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.987950,77.618545" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>VIDYARANYAPURAM</strong> <br />
    No: 669/2349/70, Vidyaranyapura Main Road, 5th Block, HMT Layout, Vidyaranyapura, Bangalore, Yelahanka B.B.M.P North, Karnataka 560097
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.079778,77.559154" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>
<div class="store__location">
  <address>
    <strong>WHITEFIELD</strong> <br />
    No: 12/2 & 13/1B, Pattandur Agrahara Village
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.983539,77.752105" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>WHITEFIELD-KITCHEN</strong> <br />
    No: 710, Varthur Main Road, Thubarahalli, Whitefield, Bangalore, Mahadevapura, B.B.M.P East, Karnataka 560066
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/12.956186,77.721770" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

<div class="store__location">
  <address>
    <strong>YELAHANKA-KITCHEN</strong> <br />
    2nd Floor, SY No: 5/1, Prestige Plaza, Vignana Kendra, Yelahanka
  </address>
  <div class="store___direcitons">
    <span class="store__directions--text">Get Directions:</span>
    <span class="store__directions--icon">
      <a href="https://google.com/maps/place/13.098361,77.573343" target="_blank">
        <svg class="icon"><use xlink:href="#googleMap" /></svg>
      </a>
    </span>
  </div>
</div>

              </div>
            </div>
            <div class="tab-content" id="tab4">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> NELLORE </strong>
                    <br />
                    W23/S, D.R Mall, GNT Road, Near AC Market, Nellore, Andhra Pradesh 524003
                  </address>
                  <div class="store___direcitons">
                    <span class="store__directions--text">Get Directions:</span>
                    <span class="store__directions--icon">
                      <a href="https://google.com/maps/place/13.14.4451320000,79.9794682000" target="_blank">
                        <svg class="icon"><use xlink:href="#googleMap" /></svg>
                      </a>
                    </span>
                  </div>
                </div>
                <div class="store__location">
                  <address>
                    <strong> TIRUPATHI </strong>
                    <br />
                    Unit No: 694/1, Ground Floor, Tirumala Bypass Road, Near Nandhi Cir, Jeevakona, Tirupati, Andhra Pradesh 517507
                  </address>
                  <div class="store___direcitons">
                    <span class="store__directions--text">Get Directions:</span>
                    <span class="store__directions--icon">
                      <a href="https://google.com/maps/place/13.653023600759248,79.42152133918333" target="_blank">
                        <svg class="icon"><use xlink:href="#googleMap" /></svg>
                      </a>
                      <a href="https://goo.gl/maps/YqxvRYiguDNtAztC6" target="_blank">
                        <svg class="icon"><use xlink:href="#google360Map" /></svg>
                      </a>
                      <a href="https://my.matterport.com/show/?m=91qoWEURGyc" target="_blank">
                        <svg class="icon"><use xlink:href="#matterPort360" /></svg>
                      </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-content" id="tab5">
              <div class="store__locations">
                <div class="store__location">
                  <address>
                    <strong> GREEN PARK </strong>
                    <br />
                    S-18, Main Market, Green Park, New Delhi
                  </address>
                  <div class="store___direcitons">
                    <span class="store__directions--text">Get Directions:</span>
                    <span class="store__directions--icon">
                      <a href="https://google.com/maps/place/13.28.5572714207,77.2025078908" target="_blank">
                        <svg class="icon"><use xlink:href="#googleMap" /></svg>
                      </a>
                    </span>
                  </div>
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