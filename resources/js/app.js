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

document.body.addEventListener('htmx:beforeSwap', function (evt) {
    if (evt.detail.xhr.status === 404) {
        alert('Error: Could Not Find Resource')
    } else if (evt.detail.xhr.status === 422) {
        evt.detail.shouldSwap = true
        evt.detail.isError = true
    }
})
