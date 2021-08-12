import { Sine, TweenMax } from 'gsap/all'

import Converter from 'mixins/converter'
import variables from 'mixins/variables'

export default class Ripple {
    constructor (selector = '[data-ripple]') {
        this.elements   = []
        this.variables  = {}

        this.elements = Array.from(document.querySelectorAll(selector))
        this.variables.ripple = variables.ripple

        this.elements.forEach(element => {
            const position = element.dataset.ripple

            element.addEventListener('click', event => {
                const ripple = document.createElement('span')

                Object.assign(ripple.style, {
                    backgroundColor: window.getComputedStyle(element).color,
                    left: Converter.pxtorem(event.clientX - element.getBoundingClientRect().left),
                    top: Converter.pxtorem(event.clientY - element.getBoundingClientRect().top)
                })
                ripple.className = 'ripple'

                switch (position) {
                    default:
                    case '':
                    case 'before':
                        element.prepend(ripple)
                        break;

                    case 'after':
                        element.append(ripple)
                        break;
                }

                TweenMax.to(ripple, this.variables.ripple, {
                    ease: Sine.easeInOut,
                    onComplete: () => ripple.remove(),
                    opacity: 0,
                    scale: 40
                })
            })
        })
    }
}
