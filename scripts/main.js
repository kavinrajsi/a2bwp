console.log('\'Allo \'Allo!');


window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  if (window.scrollY > 0) {
      header.classList.add('scroll-active');
  } else {
      header.classList.remove('scroll-active');
  }
});


//
const menuIcon = document.getElementById('menuIcon');
const menuItem = document.querySelector('.header__menu');
let isOpen = false;

menuIcon.addEventListener('click', () => {
  isOpen = !isOpen;
  menuIcon.classList.toggle('menu-icon--open', isOpen);
  menuItem.classList.toggle('menu--open', isOpen);
  document.body.classList.toggle('menu-open', isOpen);
});
//

document.addEventListener('DOMContentLoaded', function () {
  const menuItemsWithSubMenu = document.querySelectorAll('.with-submenu');

  menuItemsWithSubMenu.forEach(function (menuItem) {
      menuItem.addEventListener('click', function () {
          this.querySelector('.submenu').classList.toggle('show');
      });
  });
});


// footer
const accordionHeaders = document.querySelectorAll('.footer__navigation--list .section__title');

accordionHeaders.forEach(header => {
  header.addEventListener('click', () => {
    header.parentElement.classList.toggle('active');
  });
});

// career
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');
  const content = item.querySelector('.accordion-content');

  header.addEventListener('click', () => {
    content.style.display = content.style.display === 'none' ? 'block' : 'none';
  });
});
