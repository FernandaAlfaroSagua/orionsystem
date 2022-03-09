(function () {
  ("use strict");

  //===== Preloader

  // window.onload = function () {
  //   window.setTimeout(fadeout, 500);
  // }

  // function fadeout() {
  //   document.querySelector('#preloader').style.opacity = '0';
  //   document.querySelector('#preloader').style.display = 'none';
  // }

  /*=====================================
      Sticky
      ======================================= */
  window.onscroll = function () {
    var header_navbar = document.querySelector(".navigation");
    var sticky = header_navbar.offsetTop;

    if (window.pageYOffset > sticky) {
      header_navbar.classList.add("sticky");
      header_navbar.classList.add("bg-blue-800");
    } else {
      header_navbar.classList.remove("sticky");
      header_navbar.classList.remove("bg-blue-800");
    }

    // show or hide the back-top-top button
    var backToTop = document.querySelector(".back-to-top");
    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      backToTop.style.display = "flex";
    } else {
      backToTop.style.display = "none";
    }
  };

  // Get the navbar

  // for menu scroll
  var pageLink = document.querySelectorAll(".page-scroll");

  pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
      e.preventDefault();
      document.querySelector(elem.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
        offsetTop: 1 - 60,
      });
    });
  });

  // section menu active
  function onScroll(event) {
    var sections = document.querySelectorAll(".page-scroll");
    var scrollPos =
      window.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop;

    for (var i = 0; i < sections.length; i++) {
      var currLink = sections[i];
      var val = currLink.getAttribute("href");
      var refElement = document.querySelector(val);
      var scrollTopMinus = scrollPos + 73;
      if (
        refElement.offsetTop <= scrollTopMinus &&
        refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
      ) {
        document.querySelector(".page-scroll").classList.remove("active");
        currLink.classList.add("active");
      } else {
        currLink.classList.remove("active");
      }
    }
  }

  window.document.addEventListener("scroll", onScroll);

  //===== close navbar-collapse when a  clicked
  let navbarToggler = document.querySelector(".navbar-toggler");
  let navbarCollapse = document.querySelector(".navbar-collapse");

  document.querySelectorAll(".page-scroll").forEach((e) =>
    e.addEventListener("click", () => {
      navbarToggler.classList.remove("active");
      navbarCollapse.classList.remove("show");
    })
  );
  navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
    navbarCollapse.classList.toggle("show");
  });

  //======== Sweper slider
  let swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    autoplay: {
      delay: 5000,
    },
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: [0, 0, -400],
      },
      next: {
        translate: ["100%", 0, 0],
      },
    },
    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  let swiper2 = new Swiper(".mySwiper2", {
    grabCursor: true,
    autoplay: {
      delay: 5000,
    },
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: ["-120%", 0, -500],
      },
      next: {
        shadow: true,
        translate: ["120%", 0, -500],
      },
    },
  });
  let swiper3 = new Swiper(".mySwiper3", {
    grabCursor: true,
    autoplay: {
      delay: 5000,
    },
    effect: "creative",
    creativeEffect: {
      prev: {
        shadow: true,
        translate: ["-20%", 0, -1],
      },
      next: {
        translate: ["100%", 0, 0],
      },
    },
  });

  //WOW Scroll Spy
  var wow = new WOW({
    //disabled for mobile
    mobile: false,
  });
  wow.init();
})();
