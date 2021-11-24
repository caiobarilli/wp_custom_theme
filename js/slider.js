import Swiper, { Navigation, Pagination } from "swiper";

// import Swiper and modules styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// configure Swiper to use modules
Swiper.use([Navigation, Pagination]);

// init Swiper:
new Swiper(".my-swiper", {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
