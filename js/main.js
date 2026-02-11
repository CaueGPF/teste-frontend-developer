document.addEventListener('DOMContentLoaded', () => {
  // Lucide
  if (window.lucide) {
    lucide.createIcons();
  }

  initScrollAnimations();
  initHeaderScroll();
  initMobileMenu();
  initFAQAccordion();
  initContactForm();
});

// Animações
function initScrollAnimations() {
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px',
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, observerOptions);

  const animatedElements = document.querySelectorAll(
    '.scroll-animate, .scroll-animate-left, .scroll-animate-right, .scroll-animate-scale',
  );

  animatedElements.forEach((el) => observer.observe(el));
}

//header
function initHeaderScroll() {
  const header = document.getElementById('header');
  if (!header) return;

  const SCROLL_THRESHOLD = 50;

  function handleScroll() {
    if (window.scrollY > SCROLL_THRESHOLD) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }
  }

  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        handleScroll();
        ticking = false;
      });
      ticking = true;
    }
  });

  handleScroll();
}

//mobile menu
function initMobileMenu() {
  const toggleBtn = document.getElementById('menu-toggle');
  const mobileNav = document.getElementById('mobile-nav');
  const iconOpen = document.getElementById('menu-icon-open');
  const iconClose = document.getElementById('menu-icon-close');

  if (!toggleBtn || !mobileNav) return;

  toggleBtn.addEventListener('click', () => {
    const isOpen = mobileNav.classList.contains('header__mobile-nav--open');

    if (isOpen) {
      mobileNav.classList.remove('header__mobile-nav--open');
      iconOpen.style.display = '';
      iconClose.style.display = 'none';
      toggleBtn.setAttribute('aria-label', 'Abrir menu');
    } else {
      mobileNav.classList.add('header__mobile-nav--open');
      iconOpen.style.display = 'none';
      iconClose.style.display = '';
      toggleBtn.setAttribute('aria-label', 'Fechar menu');
    }
  });

  const mobileLinks = mobileNav.querySelectorAll('.header__mobile-link');
  mobileLinks.forEach((link) => {
    link.addEventListener('click', () => {
      mobileNav.classList.remove('header__mobile-nav--open');
      iconOpen.style.display = '';
      iconClose.style.display = 'none';
    });
  });
}

// FAQ
function initFAQAccordion() {
  const faqItems = document.querySelectorAll('.faq__item');

  faqItems.forEach((item) => {
    const button = item.querySelector('.faq__question');
    if (!button) return;

    button.addEventListener('click', () => {
      const isOpen = item.classList.contains('faq__item--open');

      faqItems.forEach((otherItem) => {
        otherItem.classList.remove('faq__item--open');
        const otherBtn = otherItem.querySelector('.faq__question');
        if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        item.classList.add('faq__item--open');
        button.setAttribute('aria-expanded', 'true');
      }
    });
  });
}
