// import './bootstrap';

import 'htmx.org'
import autoAnimate from '@formkit/auto-animate'

function animateItems(items) {
    items.forEach((item) => autoAnimate(item))
}

document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.animate')
    animateItems(animateElements)
})
document.addEventListener('htmx:afterSettle', (data) => {
    const newAnimateElements = data.target.querySelectorAll('.animate')
    animateItems(newAnimateElements)
})
