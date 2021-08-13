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
            element.addEventListener('click', event => {
                if (!element.classList.contains('ripple')) {
                    element.classList.add('ripple')
                }

                const ripple = document.createElement('span')

                ripple.className = 'ripple_effect'
                Object.assign(ripple.style, {
                    backgroundColor: window.getComputedStyle(element).color,
                    left: Converter.pxtorem(event.clientX - element.getBoundingClientRect().left),
                    top: Converter.pxtorem(event.clientY - element.getBoundingClientRect().top)
                })

                switch (element.dataset.ripple) {
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
