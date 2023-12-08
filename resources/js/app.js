// import './bootstrap';

import 'htmx.org';
import autoAnimate from '@formkit/auto-animate'

const animateElements = document.querySelectorAll('.animate')
animateElements.forEach((element) => {
    autoAnimate(element)
})
