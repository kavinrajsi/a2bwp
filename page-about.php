<?php
/*
Template Name: About
*/

get_header(); // Gets the header.php file

$title = get_the_title();
$featured_img_url = get_the_post_thumbnail_url();

?>
 
      <div class="col-fluid">
        <div class="store-image">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-banner-store-2.png" alt="" />
      </div>
      </div>

      <div class="col-fluid">
        <div class="founder__data">
        <div class="col-box">
        <div class="founder__image-content">
          <div class="founder__content">
            <p class="text-center">
              Our journey is a testament to our unwavering spirit and dedication; a legacy that began with our beloved founder, the late K S Thirupathi Raja. Early in life, he embarked on a journey far from home, honing his culinary skills in Chennai and Mumbai. From humble beginnings as a table cleaner, he went on to master the art of sweet-making.
            </p>
            <p class="text-center">
              At one point, he had to return to Rajapalayam to take up farming on their ancestral property. All the hard work paid off  and success came knocking at his door. Soon, he made expansion plans. With borrowed funds and a heart full of hope, he leased adjacent farmlands expecting greater returns.
            </p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/a2b-founder.png" class="founder__image" alt="" />
            <p class="text-center">While farming was indeed flourishing, deep down, he still hadn’t given up on his dreams. In 1960, he started Guru Sweets, a small sweet shop, marking the beginning of his entrepreneurial pursuits. However, his life took an unexpected turn when a rare and devastating dust storm swept through their farmlands, leaving them completely destroyed. All the expansion he’d undertaken was on borrowed funds, crop failure due to the unforeseen disaster left him under a mountain of debt.</p>
            <p class="text-center">In the mid-1970s, he made the courageous decision to relocate to Bengaluru. With the unwavering support of his loving wife and two sons, who postponed their education to help run the shop, he founded Srinivasa Sweets.</p>
            <p class="text-center">His journey was defined by resilience and hard work. The family of four lived modestly, building their business brick by brick. Our founder crafted sweets, his wife assisted, and his two sons managed various aspects of the shop. Despite facing multiple challenges , their determination bore fruit, granting them a fresh start in Bengaluru.</p>
            <p class="text-center">In 1979, our beloved founder, along with his sons K T Venkatesan and K T Srinivasa Raja, opened their first shop in Washermanpet, Chennai. They named it Sri Ananda Bhavan. Business thrived, and soon a second outlet was set up in Adyar. The humongous success of the Adyar outlet soon became a part of the identity. And thus was born Adyar Ananda Bhavan.</p>
            <p class="text-center">Soon we expanded across Chennai, introducing a delectable range of sweets from different regions of India. Our steadfast commitment to quality and tradition set Adyar Ananda Bhavan apart in the sweets industry.</p>
            <p class="text-center">In 2005, we took a pivotal step by entering the restaurant business, launching A2B restaurants alongside Adyar Ananda Bhavan sweets. This decision not only bolstered revenue but also amplified our our visibility, building on our reputation for quality and tradition.</p>
            <p class="text-center">Today, Adyar Ananda Bhavan is a 1200 crore plus turnover company with over 12,000 employees and global branches in the USA, Malaysia, Singapore, Australia, Canada and the UK. As we reflect on this remarkable journey, we proudly uphold the values that have guided us all the way- the importance of family and trust, the dedication to quality, and a commitment to giving back to society. Because this is what grew a small sweets stall to evolve into a global brand, that stands for authentic traditions.</p>
          </div>
          </div>
        </div>
        </div>
      </div>

      <div class="col-fluid">
        <div class="founder__eye">
        <img src="<?php echo get_template_directory_uri(); ?>/images/about-us-store-2.png" alt="" />
        <div class="col-box">
        <div class="data__vision">
          <div class="title">Vision</div>
          <div class="content">
            To become one of the most trusted and favourite Indian Sweets,
            Snacks & Restaurant (QSR) brands across the globe by 2030.
          </div>
        </div>
        <div class="data__mission">
          <div class="title">Mission</div>
          <div class="content">
            Keep Quality, Service, and our employees' welfare at the epicentre
            of our operations and establish the brand presence across India and
            the globe to bring innovative & quality products to our customers.
          </div>
        </div>
        </div>
        </div>
      </div>

      <div class="col-fluid">
      <div class="whatwe-make-diff">
        <div class="col-box">
          <div class="title">Small, little details make all the difference</div>
          <div class="difference__card--list">
            <div class="difference__card">
              <div class="difference__card--image">
                <svg width="151" height="150" viewBox="0 0 151 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.754 84.834C30.857 82.983 29.747 81.198 29.108 79.263C27.926 75.687 28.211 72.051 29.567 68.556C31.22 64.293 34.127 61.068 38.288 59.163C39.932 58.41 41.807 58.155 43.574 57.669C43.883 57.585 44.189 57.48 44.498 57.384C42.047 50.169 45.161 42.045 51.341 38.001C55.343 35.382 59.711 34.632 64.433 35.616C69.167 36.603 72.728 39.225 75.458 43.173C75.989 42.513 76.406 41.922 76.895 41.4C77.57 40.68 78.725 40.614 79.364 41.196C79.961 41.742 79.988 42.855 79.373 43.602C77.195 46.251 76.223 49.347 76.259 52.71C76.274 54.096 76.841 55.467 77.078 56.856C77.24 57.816 78.023 57.765 78.632 57.876C81.704 58.434 84.464 59.64 86.723 61.809C88.052 63.084 89.24 64.506 90.521 65.895C92.033 63.498 94.043 61.395 96.527 59.667C96.2 59.775 95.861 59.856 95.549 60C91.7 61.8 87.059 61.647 83.888 58.413C80.489 54.948 79.499 49.851 83.222 45.675C84.968 43.713 87.383 42.957 90.002 43.368C92.882 43.818 94.868 45.522 95.633 48.327C95.903 49.314 95.648 50.517 95.345 51.537C95.255 51.84 94.055 52.143 93.608 51.933C93.065 51.675 92.534 50.913 92.426 50.295C92.015 47.973 91.238 46.896 89.51 46.671C87.503 46.41 85.25 47.775 84.554 49.746C83.255 53.436 86.528 57.471 90.029 57.72C94.325 58.026 98.096 54.816 98.723 51.432C99.251 48.573 98.93 45.819 97.319 43.323C95.3 40.197 92.345 38.682 88.685 38.637C87.626 38.622 86.567 39.09 85.502 39.294C84.929 39.405 84.29 39.588 83.774 39.435C83.354 39.309 82.892 38.775 82.772 38.334C82.559 37.551 82.757 36.681 83.618 36.381C86.405 35.418 89.222 35.025 92.222 35.388C96.551 35.913 100.043 37.83 102.92 40.959C105.161 43.395 106.502 46.293 106.997 49.602C107.372 52.119 107.285 54.573 106.556 57.009C106.508 57.174 106.568 57.372 106.577 57.57C113.165 58.317 118.082 61.524 120.875 67.566C123.671 73.611 122.81 79.41 119.063 85.047C121.319 85.047 123.461 84.996 125.603 85.068C126.725 85.104 127.883 85.209 128.945 85.542C131.012 86.193 132.185 87.777 132.809 89.802C132.857 89.955 132.953 90.093 133.028 90.24V92.709C132.725 93.273 132.458 93.855 132.116 94.392C130.781 96.486 128.852 97.557 126.374 97.647C126.005 97.659 125.639 97.647 125.195 97.647C124.94 101.205 123.887 104.439 121.799 107.289C118.934 111.198 115.106 113.61 110.342 114.474C109.115 114.696 107.846 114.759 106.595 114.759C85.838 114.777 65.078 114.729 44.321 114.807C40.478 114.822 37.028 113.91 33.875 111.798C29.294 108.729 26.582 104.484 25.916 98.973C25.865 98.55 25.712 98.139 25.667 97.959C24.191 97.59 22.736 97.452 21.491 96.873C18.47 95.466 17.573 92.655 18.134 90.009C18.755 87.072 20.72 85.209 24.113 85.071C26.651 84.969 29.198 85.023 31.739 85.008C31.793 85.005 31.847 85.002 31.901 84.999C31.853 84.945 31.808 84.894 31.76 84.84L31.754 84.834ZM110.573 85.014C112.568 85.008 114.731 85.62 116.039 83.319C116.756 82.059 117.572 80.859 118.346 79.629C118.232 79.533 118.118 79.437 118.004 79.341C115.976 82.032 113.309 83.736 110.126 84.642C108.626 84.708 107.126 84.774 105.629 84.837C103.151 84.165 100.916 83.103 99.122 81.171C95.363 77.127 95.147 71.196 99.101 67.17C102.728 63.477 108.701 63.945 111.686 67.866C114.26 71.247 113.123 76.302 109.292 78.141C108.398 78.57 107.405 78.303 107.006 77.526C106.601 76.737 106.898 75.654 107.693 75.204C109.064 74.43 109.847 73.359 109.676 71.712C109.517 70.167 108.584 69.144 107.306 68.505C105.458 67.578 103.61 67.764 101.987 69.081C99.995 70.698 99.047 72.888 99.671 75.348C100.841 79.962 105.593 82.719 110.252 81.024C113.99 79.665 116.297 77.019 117.092 73.074C117.842 69.36 116.993 66.21 113.915 63.846C109.184 60.213 101.843 59.838 96.932 63.711C93.671 66.282 91.871 69.618 91.505 73.683C91.199 77.076 92.201 80.202 94.244 82.905C94.904 83.778 95.366 85.068 96.857 85.05C99.773 85.014 102.692 85.023 105.611 85.014C107.264 85.014 108.917 85.014 110.57 85.014H110.573ZM117.023 107.526C115.583 106.908 114.044 106.338 112.586 105.606C109.55 104.082 106.592 103.848 103.553 105.633C101.597 106.779 99.464 107.475 97.157 107.532C94.658 107.595 92.567 106.431 90.383 105.459C89.18 104.925 87.848 104.598 86.54 104.412C84.266 104.088 82.391 105.315 80.474 106.281C78.854 107.097 77.135 107.496 75.332 107.523C72.857 107.562 70.724 106.491 68.594 105.408C65.882 104.025 63.203 104.04 60.434 105.387C58.694 106.236 56.843 106.92 54.974 107.424C54.035 107.676 52.922 107.463 51.923 107.277C50.981 107.1 50.501 106.329 50.633 105.393C50.762 104.484 51.341 104.049 52.358 104.139C54.566 104.334 56.567 103.68 58.505 102.621C60.212 101.691 62.021 101.034 64.055 100.977C66.842 100.899 69.227 101.952 71.669 103.071C72.923 103.647 74.384 104.139 75.716 104.064C77.162 103.983 78.617 103.302 79.982 102.693C81.842 101.865 83.651 101.043 85.757 100.983C88.334 100.911 90.593 101.73 92.828 102.891C94.637 103.83 96.572 104.658 98.675 103.908C100.199 103.365 101.666 102.66 103.148 102.006C105.752 100.86 108.446 100.578 111.143 101.478C113.105 102.132 114.938 103.167 116.903 103.812C117.806 104.109 118.925 104.055 119.858 103.812C120.272 103.704 120.473 102.747 120.749 102.165C120.92 101.805 121.109 101.439 121.193 101.055C121.445 99.909 121.649 98.754 121.865 97.641H29.045C29.144 98.025 29.204 98.307 29.288 98.586C29.765 100.203 30.248 101.82 30.725 103.44C30.902 104.034 31.298 104.295 31.895 104.148C33.188 103.83 34.58 103.692 35.741 103.098C38.702 101.586 41.657 100.422 45.071 101.217C46.163 101.472 46.922 102.138 46.79 102.987C46.634 103.98 45.386 104.682 44.375 104.562C43.298 104.436 42.104 104.274 41.117 104.598C38.663 105.405 36.296 106.479 33.734 107.511C34.112 107.832 34.409 108.114 34.739 108.357C37.487 110.37 40.511 111.423 43.973 111.417C65.006 111.375 86.042 111.405 107.075 111.378C108.344 111.378 109.637 111.183 110.879 110.91C113.306 110.376 115.352 109.095 117.029 107.529L117.023 107.526ZM75.404 94.17V94.179C92.171 94.179 108.935 94.179 125.702 94.173C126.257 94.173 126.842 94.197 127.364 94.044C129.374 93.45 130.043 91.728 129.182 89.892C128.576 88.602 127.379 88.419 126.116 88.419C92.396 88.419 58.676 88.419 24.959 88.419C24.623 88.419 24.284 88.416 23.948 88.437C22.709 88.518 21.161 89.769 21.407 91.683C21.587 93.084 22.709 94.17 24.206 94.167C41.27 94.167 58.337 94.167 75.401 94.167L75.404 94.17ZM69.812 85.068C69.554 84.645 69.404 84.372 69.227 84.114C69.101 83.931 68.936 83.778 68.792 83.607C67.103 81.624 66.224 79.308 66.119 76.728C65.987 73.521 67.061 70.77 69.2 68.328C71.063 66.201 73.424 65.235 76.079 65.139C77.975 65.07 79.859 65.583 81.557 66.636C84.215 68.283 85.613 70.656 85.613 73.734C85.613 76.227 84.593 78.39 82.571 79.914C79.568 82.176 76.484 81.879 73.733 79.539C72.911 78.84 72.83 77.676 73.436 76.98C73.979 76.356 75.086 76.341 75.905 77.028C77.507 78.375 79.532 78.042 80.48 77.298C81.992 76.113 82.643 73.962 81.878 71.895C80.864 69.162 77.123 67.917 74.417 68.817C71.402 69.822 69.893 72.261 69.521 75.219C68.921 79.974 72.308 83.7 76.4 84.774C79.808 85.668 83.237 85.308 86.216 83.019C87.38 82.125 88.79 79.182 88.511 78.012C88.073 76.17 87.914 74.325 88.31 72.438C88.475 71.643 88.616 70.713 88.361 69.984C86.069 63.417 79.43 59.784 72.335 61.29C65.825 62.673 62.195 67.983 61.649 73.737C61.322 77.169 62.471 80.307 64.499 83.067C65.072 83.847 65.849 84.666 66.71 84.996C67.577 85.326 68.666 85.068 69.812 85.068ZM54.992 64.86C56.798 67.767 57.182 71.037 56.585 74.181C55.478 80.01 50.777 83.469 45.197 83.688C42.335 83.799 39.929 82.566 37.979 80.427C34.133 76.206 34.682 68.898 40.526 66.516C44.342 64.962 49.721 66.615 50.39 72.249C50.507 73.23 49.817 74.211 48.971 74.295C47.705 74.424 47.267 73.908 46.982 72.678C46.766 71.748 46.361 70.614 45.656 70.092C43.319 68.358 40.112 69.588 39.188 72.339C38.489 74.421 38.933 76.452 40.403 78.075C41.966 79.8 43.88 80.784 46.355 80.148C50.945 78.969 52.802 76.917 53.312 72.297C53.741 68.418 51.467 64.605 48.065 62.697C46.226 61.665 44.231 60.876 42.041 61.422C35.507 63.048 31.85 68.775 31.793 74.883C31.763 78.054 32.981 80.925 34.949 83.433C35.834 84.561 36.875 85.134 38.459 85.092C43.43 84.96 48.41 84.984 53.384 85.083C54.704 85.11 55.448 84.51 56.171 83.634C56.357 83.409 56.531 83.172 56.684 82.923C57.743 81.213 59.186 79.644 58.496 77.337C58.289 76.647 58.229 75.879 58.271 75.156C58.352 73.734 58.763 72.3 58.655 70.902C58.46 68.346 56.939 66.459 54.998 64.86H54.992ZM66.872 40.131C66.842 40.191 66.809 40.254 66.779 40.314C67.202 40.656 67.682 40.947 68.039 41.349C70.847 44.508 71.771 48.213 70.814 52.275C69.503 57.84 64.217 61.416 58.787 60.126C53.447 58.854 50.552 53.574 52.601 48.726C54.578 44.04 59.594 43.335 63.086 45.6C64.115 46.266 64.382 47.349 63.794 48.162C63.242 48.924 62.132 49.065 61.22 48.402C59.96 47.487 57.827 47.634 56.876 48.381C55.739 49.272 54.974 51.504 55.376 52.875C56.516 56.772 61.007 58.071 64.193 56.1C66.635 54.588 67.775 52.257 67.808 49.503C67.835 47.34 67.172 45.327 65.528 43.692C63.83 42 61.823 41.004 59.507 40.689C56.507 40.281 53.651 40.764 51.26 42.786C47.219 46.203 45.989 52.173 47.942 57.084C48.071 57.405 48.413 57.819 48.713 57.87C52.835 58.572 56.198 60.558 58.841 63.774C59.432 64.494 59.975 65.253 60.599 66.075C63.629 61.11 68.039 58.314 73.742 57.54C72.701 54.249 72.56 51.102 73.505 47.931C73.601 47.61 73.652 47.193 73.529 46.908C72.32 44.106 70.4 41.916 67.751 40.389C67.496 40.242 67.169 40.218 66.878 40.134L66.872 40.131ZM97.652 59.049C99.317 58.59 100.985 58.137 102.644 57.651C102.779 57.612 102.86 57.342 102.935 57.165C104.054 54.612 104.063 51.951 103.547 49.287C103.325 48.141 102.785 47.055 102.389 45.942C102.287 45.972 102.185 46.002 102.08 46.032C102.311 48.405 102.563 50.793 101.786 53.097C101 55.434 99.551 57.339 97.652 59.046V59.049ZM90.404 83.235C90.014 83.823 89.633 84.402 89.258 84.963H91.55C91.154 84.369 90.836 83.889 90.401 83.235H90.404ZM60.542 83.202C60.17 83.796 59.828 84.348 59.417 85.005H61.706C61.298 84.372 60.953 83.838 60.542 83.202Z" fill="#FFD280"/>
                  <path d="M31.7539 84.834C31.8019 84.888 31.8469 84.939 31.8949 84.993C31.8409 84.996 31.7869 84.999 31.7329 85.002C31.7029 84.942 31.7089 84.885 31.7539 84.834Z" fill="#FFD280"/>
                  </svg>
              </div>
              <div class="difference__card--title">Quality Ingredients</div>
              <div class="difference__card--content">Only the purest and the freshest
                ingredients</div>
            </div>
            <div class="difference__card">
              <div class="difference__card--image">
                <svg width="151" height="150" viewBox="0 0 151 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M57.8563 124.997C56.8085 124.286 56.6693 123.299 56.8965 122.144C58.2823 115.16 61.9768 109.616 67.5682 105.239C67.9146 104.967 68.3633 104.809 68.6501 104.309C66.7645 103.957 64.9329 103.62 63.1524 103.089C58.5634 101.717 54.2556 99.8387 50.882 96.3104C50.7116 96.1333 50.5355 95.9562 50.3907 95.7594C49.8171 94.9807 49.8824 94.0839 50.5384 93.4766C51.2 92.8638 52.1542 92.816 52.8414 93.4851C60.0401 100.48 69.059 101.669 78.5124 101.278C83.3996 101.076 88.0879 99.8836 92.4895 97.6992C94.5 96.7012 96.3231 95.4586 97.8424 93.7943C98.6886 92.8666 99.6796 92.7682 100.446 93.4626C101.213 94.1598 101.188 95.1325 100.344 96.063C97.6237 99.0712 94.1337 100.882 90.3824 102.27C87.9914 103.156 85.5208 103.76 83.002 104.177C82.8004 104.21 82.5675 104.168 82.417 104.399C82.5391 104.758 82.9111 104.851 83.1752 105.048C88.5877 109.113 92.1516 114.398 93.8582 120.907C93.9747 121.345 94.0173 121.804 94.1195 122.248C94.3779 123.372 94.1422 124.317 93.1455 125H91.8704C91.5382 124.696 91.0867 124.716 90.6919 124.595C84.4588 122.681 79.4609 119.209 76.306 113.417C76.0447 112.939 75.8204 112.439 75.5165 111.821C75.3774 112.059 75.3007 112.163 75.2496 112.279C72.6967 117.958 68.1815 121.528 62.5248 123.85C61.4259 124.303 60.2701 124.62 59.1399 125H57.8648L57.8563 124.997ZM77.51 105.647C78.0325 112.352 84.6746 120.131 90.3455 120.755C88.0993 114.053 84.0726 108.908 77.51 105.647ZM73.4833 105.799C68.2497 107.53 61.0027 116.175 60.8437 120.806C67.7442 118.261 72.745 112.875 73.4833 105.799Z" fill="#FFD280"/>
                  <path d="M56.4779 57.7515C57.2545 58.7626 57.9623 59.6707 58.6528 60.5899C58.9279 60.9548 59.2689 60.8295 59.6214 60.7793C65.8251 59.927 72.0604 59.5481 78.3243 59.7013C83.2587 59.8211 88.1644 60.2584 93.0414 60.9994C93.5285 61.0746 93.838 61.03 94.1274 60.6206C94.6346 59.9075 95.1704 59.2083 95.7321 58.537C96.1819 57.9994 95.967 57.8517 95.3796 57.8016C95.0272 57.771 94.6747 57.6958 94.328 57.6178C93.1159 57.3476 92.4941 56.5426 92.7348 55.5676C92.964 54.6289 93.8523 54.1442 94.9985 54.3726C98.1563 55.0022 101.208 54.6735 104.056 53.2139C108.776 50.7932 111.249 46.9242 111.564 41.757C111.647 40.381 112.286 39.6066 113.381 39.6651C114.438 39.7208 115.02 40.498 115 41.8294C114.885 49.2501 109.18 55.9882 101.632 57.5732C100.884 57.7292 100.345 58.0217 99.9128 58.6428C99.1964 59.6707 98.397 60.6456 97.5545 61.7431C99.3024 62.1275 100.933 62.4757 102.555 62.849C104.801 63.3671 105.174 64.1637 104.134 66.1944C103.179 68.0579 102.231 69.9242 101.262 71.7821C100.669 72.9214 100.082 73.1944 98.8325 72.8768C92.1416 71.1777 85.3476 70.147 78.4418 69.7849C73.0948 69.5036 67.808 70.0635 62.5356 70.81C59.0712 71.3002 55.6584 72.0412 52.2657 72.8768C51.0078 73.186 50.4203 72.927 49.83 71.7961C48.7813 69.7849 47.744 67.7682 46.7239 65.7431C45.9903 64.2863 46.4603 63.3726 48.1079 62.9827C49.2512 62.7125 50.3945 62.4367 51.5465 62.1888C52.6583 61.9492 53.7758 61.7403 55.0624 61.4841C54.1913 60.3559 53.3832 59.3141 52.5809 58.2668C52.3001 57.8991 51.876 57.9882 51.5006 57.9353C43.9358 56.8629 38.7894 52.8768 36.7205 45.6957C34.8522 39.2083 36.6431 33.4339 41.7924 28.9576C47.0419 24.3921 53.1769 23.4896 59.7704 25.9464C60.5183 26.225 60.8163 26.1358 61.2547 25.4896C67.9513 15.5843 82.869 15.4812 89.7002 25.3169C90.3106 26.1971 90.7375 26.1832 91.6172 25.8406C100.417 22.4255 110.461 26.7096 113.853 35.2863C114.085 35.874 114.315 36.459 113.971 37.0885C113.658 37.6567 113.197 37.9799 112.529 38.0133C111.862 38.0467 111.34 37.7821 110.999 37.2361C110.816 36.9436 110.701 36.6066 110.567 36.2863C107.423 28.8712 98.4772 25.7988 91.2619 29.6511C89.3306 30.6818 88.8234 30.4896 87.7575 28.5871C85.1212 23.8823 81.015 21.3336 75.5104 21.3559C70.0087 21.3782 65.9168 23.9353 63.3178 28.6679C62.3407 30.4478 61.7361 30.6651 59.9595 29.7069C54.7959 26.9241 48.4575 27.5954 44.0934 31.3893C39.7808 35.1358 38.3538 41.1331 40.5316 46.3336C42.7495 51.6317 48.1136 54.9492 54.005 54.6484C54.6097 54.6178 55.2143 54.5258 55.8132 54.4311C57.2831 54.1971 58.1399 54.5815 58.3692 55.601C58.5869 56.5648 57.9995 57.2863 56.4951 57.757L56.4779 57.7515ZM98.3683 69.3253C98.6405 69.4117 98.8039 69.1164 98.9701 68.7793C99.3254 68.0607 99.6406 67.3114 100.085 66.6456C100.606 65.8629 100.248 65.6986 99.5116 65.5481C94.8581 64.6011 90.173 63.874 85.4393 63.4479C74.7998 62.4896 64.2434 63.1331 53.7672 65.1247C52.7385 65.3197 51.6697 65.4005 50.7155 65.888C51.1539 66.7933 51.6267 67.6874 52.0193 68.6122C52.2972 69.2668 52.6927 69.3587 53.3574 69.1916C57.1628 68.2362 61.034 67.615 64.9254 67.0858C73.4645 65.9214 81.9549 66.2891 90.4252 67.6846C93.0299 68.1136 95.6174 68.6289 98.3712 69.3225L98.3683 69.3253Z" fill="#FFD280"/>
                  <path d="M94.9925 76.2339C94.9246 87.6023 85.7407 96.4566 74.511 95.9818C64.4887 95.5563 56.1811 86.9518 56.0102 76.8076C55.9993 76.1928 55.9966 75.5752 56.0047 74.9604C56.021 73.7445 56.6288 73.0117 57.6109 73.0007C58.5958 72.9898 59.2632 73.7281 59.2442 74.9275C59.2089 77.1314 59.3772 79.297 60.0609 81.4076C62.3914 88.6014 69.4863 93.3688 76.8389 92.669C84.5361 91.9361 90.5673 86.1147 91.5929 78.4681C91.753 77.2714 91.7231 76.0802 91.7503 74.8836C91.7747 73.739 92.3797 73.0254 93.3293 73.0007C94.3196 72.9733 94.968 73.7116 94.9952 74.9028C95.006 75.3474 94.9952 75.7921 94.9952 76.2367L94.9925 76.2339Z" fill="#FFD280"/>
                  <path d="M43.0013 40.8694C43.1287 35.6239 48.1056 31.0663 53.7753 31.0003C55.1174 30.9831 55.981 31.6367 55.9997 32.6801C56.0183 33.6804 55.2385 34.3426 53.9493 34.4257C49.8143 34.6952 46.9934 37.2864 46.7138 41.0701C46.6237 42.3055 45.8501 43.0594 44.7379 42.9963C43.6164 42.9333 42.9671 42.1393 43.0013 40.8723V40.8694Z" fill="#FFD280"/>
                  </svg>
              </div>
              <div class="difference__card--title">Culinary Excellence</div>
              <div class="difference__card--content">Only the most passionate chefs and confectioners</div>
            </div>
            <div class="difference__card">
              <div class="difference__card--image">
                <svg width="151" height="150" viewBox="0 0 151 150" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M53.4021 79.269C53.4021 78.657 53.4021 78.405 53.4021 78.153C53.4021 65.577 53.4381 53.001 53.3811 40.428C53.3631 36.75 54.7401 33.753 57.6441 31.686C60.9891 29.307 64.5861 29.52 68.1501 31.641C69.7881 27.447 72.6531 24.639 77.3481 24.714C81.8901 24.786 84.7611 27.465 86.3391 31.617C92.6601 27.555 101.522 31.542 101.327 41.7C101.468 41.7 101.639 41.754 101.744 41.691C103.133 40.86 104.66 40.881 106.217 40.797C110.681 40.551 114.428 44.448 115.175 48.222C115.472 49.725 115.607 51.282 115.631 52.818C115.691 56.898 115.658 60.978 115.649 65.055C115.646 66.561 114.686 67.662 113.339 67.773C111.935 67.887 110.927 67.02 110.915 65.568C110.882 61.752 110.933 57.933 110.87 54.117C110.843 52.425 110.819 50.691 110.435 49.059C109.838 46.503 107.588 45.105 105.014 45.579C102.992 45.951 101.372 47.898 101.315 50.388C101.243 53.568 101.3 56.751 101.276 59.931C101.261 62.055 100.412 62.856 98.3181 62.973C97.6521 63.009 96.5871 61.851 96.5631 61.05C96.5211 59.667 96.5211 58.281 96.5181 56.898C96.5151 51.51 96.5421 46.119 96.5031 40.731C96.4881 38.574 95.8281 36.522 93.8421 35.496C91.2441 34.152 88.4001 34.89 87.1401 38.421C86.9871 38.853 86.9331 39.342 86.9301 39.804C86.9151 48.711 86.8851 57.618 86.9301 66.525C86.9391 68.022 85.6251 69.588 84.1551 69.363C83.1561 69.21 82.2801 68.502 82.1811 67.5C82.1331 67.017 82.1421 66.528 82.1421 66.042C82.1421 55.899 82.1421 45.756 82.1391 35.613C82.1391 33.879 81.6921 32.292 80.5131 30.972C79.2711 29.577 77.6271 29.286 75.9621 29.697C74.2521 30.117 73.2411 31.479 72.7881 33.138C72.5601 33.972 72.5451 34.884 72.5451 35.76C72.5301 47.7 72.5361 59.637 72.5331 71.577C72.5331 72.75 72.3591 73.833 71.1411 74.439C69.5121 75.249 67.8231 74.322 67.8021 72.504C67.7571 68.538 67.7751 64.569 67.7721 60.603C67.7721 54.015 67.7811 47.43 67.7661 40.842C67.7601 38.676 67.1241 36.63 65.1981 35.538C62.7771 34.167 59.6841 34.743 58.3941 38.418C58.2531 38.817 58.1871 39.264 58.1871 39.69C58.1721 54.81 58.1691 69.93 58.1631 85.05C58.1631 86.472 57.4941 87.573 56.4171 87.942C55.3131 88.323 54.3861 87.819 53.3661 86.523C52.3161 85.188 51.1371 83.958 50.0271 82.668C47.8131 80.094 45.6291 77.493 43.3941 74.937C42.2361 73.614 41.1201 72.21 39.7701 71.106C36.8271 68.694 33.5121 70.638 32.5791 73.806C31.8891 76.143 32.5911 78.162 34.1031 80.013C36.0771 82.431 37.9731 84.912 39.8901 87.378C41.8911 89.955 43.9311 92.502 45.8571 95.136C48.5901 98.877 51.2511 102.672 53.9121 106.467C56.7531 110.514 60.1281 113.991 64.4271 116.499C67.9971 118.581 71.8041 119.973 75.9531 120.318C77.1291 120.417 78.3081 120.507 79.4901 120.54C81.0831 120.585 81.9561 121.368 81.9591 122.826C81.9621 124.299 81.0081 125.214 79.5051 125.268C72.4311 125.532 66.0531 123.345 60.2301 119.535C55.4211 116.388 51.7821 112.083 48.7191 107.223C46.9101 104.352 44.7801 101.682 42.7371 98.967C40.0911 95.448 37.4001 91.965 34.7061 88.482C32.9991 86.277 31.1571 84.174 29.5431 81.906C26.0631 77.016 27.2451 69.981 32.2251 66.66C35.1351 64.719 39.4251 64.686 42.4281 67.059C44.1741 68.439 45.5871 70.248 47.0961 71.913C48.3321 73.281 49.4841 74.724 50.6811 76.128C51.5061 77.094 52.3461 78.051 53.4021 79.272V79.269Z" fill="#FFD280"/>
                  <path d="M123.284 87.102C123.284 90.348 123.512 93.615 123.233 96.84C122.747 102.462 120.86 107.649 117.527 112.263C115.22 115.458 112.346 118.062 109.148 120.327C107.783 121.293 106.499 122.4 105.05 123.216C102.569 124.617 100.019 124.524 97.7241 122.778C94.8081 120.561 91.7781 118.431 89.1741 115.878C84.7281 111.522 81.9261 106.149 80.8611 99.975C80.5251 98.022 80.3871 96.015 80.3541 94.032C80.2821 89.43 80.3271 84.825 80.3331 80.223C80.3331 78.315 80.6751 77.868 82.5411 77.388C88.3161 75.9 94.0941 74.427 99.8721 72.954C101.783 72.468 103.625 72.999 105.446 73.452C110.687 74.748 115.913 76.11 121.151 77.424C122.825 77.844 123.425 78.51 123.443 80.253C123.464 82.536 123.449 84.819 123.449 87.102C123.395 87.102 123.341 87.102 123.287 87.102H123.284ZM85.1031 81.651C85.1031 85.098 85.0461 88.575 85.1241 92.052C85.1751 94.41 85.2561 96.786 85.6011 99.111C86.3811 104.361 88.8861 108.837 92.5731 112.539C94.7271 114.702 97.3761 116.37 99.7371 118.335C100.574 119.034 101.438 119.442 102.452 119.133C103.085 118.938 103.646 118.464 104.198 118.059C107.411 115.71 110.627 113.364 113.105 110.175C116.474 105.837 118.262 100.881 118.523 95.448C118.73 91.155 118.58 86.844 118.634 82.542C118.643 81.831 118.343 81.612 117.728 81.462C113.639 80.457 109.565 79.38 105.464 78.417C103.88 78.045 102.179 77.505 100.64 77.745C97.6281 78.216 94.6911 79.179 91.7241 79.941C89.5551 80.499 87.3891 81.06 85.1001 81.651H85.1031Z" fill="#FFD280"/>
                  <path d="M92.948 97.449C93.089 96.204 93.593 95.541 94.622 95.133C95.612 94.74 96.425 94.971 97.124 95.646C98.471 96.942 99.812 98.253 101.087 99.618C101.687 100.263 102.059 100.161 102.617 99.588C104.549 97.605 106.523 95.664 108.479 93.702C109.463 92.712 110.867 92.679 111.929 93.558C112.649 94.155 112.694 96.27 111.929 97.008C109.082 99.768 106.322 102.618 103.493 105.399C102.38 106.494 101.228 106.44 100.133 105.351C98.087 103.32 96.029 101.307 94.028 99.234C93.557 98.745 93.302 98.049 92.948 97.449Z" fill="#FFD280"/>
                  </svg>
              </div>
              <div class="difference__card--title">Supreme Standards</div>
              <div class="difference__card--content">Only the highest standards of hygiene and safety</div>
            </div>
          </div>
        </div>
        </div>
      </div>


      <div class="col-box">
        <div class="awards__area">
          <div class="title">Awards</div>
          <div class="awards__lists">
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-1.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-2.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-3.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-4.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-5.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-6.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-7.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-8.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-9.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-10.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-11.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-12.png" alt=""></div>
<div class="awards__list"><img src="<?php echo get_template_directory_uri(); ?>/images/awards-13.png" alt=""></div>
          </div>
        </div>
      </div>

 

<?php
get_footer(); // Gets the footer.php file
?>