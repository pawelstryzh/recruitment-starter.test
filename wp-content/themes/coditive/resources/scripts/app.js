import {domReady} from '@roots/sage/client';
import lozad from 'lozad';
import AOS from 'aos';
import {CountUp} from "countup.js";

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  const observer = lozad();
  observer.observe();

  AOS.init();

  const options = {
    useGrouping: false,
  }
  const counters = document.querySelectorAll(".liczby__number span");
  counters.forEach(item => {
    let number = item.innerText;
    let counter = new CountUp(item, number, options);
    counter.start();
  })

  let priceButtons = document.querySelectorAll(".ceny__btn");

  priceButtons.forEach(function(elem) {
    elem.addEventListener("click", function(e) {
      e.preventDefault();
      elem.classList.toggle('ceny__btn--active');
      console.log(elem.parentElement);
      elem.parentElement.parentElement.classList.toggle('ceny__single--active');
    });
  });


};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
