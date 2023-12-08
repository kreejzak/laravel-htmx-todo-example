import './bootstrap';
import autoAnimate from '@formkit/auto-animate'

const animateElements = document.querySelectorAll('.animate')
animateElements.forEach((element) => {
    console.log(element)
    autoAnimate(element)
})
