import { Sine, TweenMax } from 'gsap/all'
import { watch } from 'watchjs'

import variables from 'mixins/variables'

class Sandwich {
    constructor() {
        this.references = {}
        this.state      = ['default']
        this.variables  = {}

        this.references.sandwich = document.querySelector('[data-sandwich]')
        this.references = Array.from(document.querySelectorAll('[data-sandwich-path]'))
            .reduce((accumulator, element) => {
                accumulator[element.dataset.sandwichPath] = element
                return accumulator
            },
            this.references)

        this.variables.sandwich = variables.sandwich

        this.references.sandwich.addEventListener('click', () => this.click())
        this.references.sandwich.addEventListener('mouseover', () => this.hover())
        this.references.sandwich.addEventListener('mouseleave', () => this.leave())

        watch(this, 'state', () => this.morph())
    }

    click() {
        if (this.state.includes('active')) {
            this.state = this.state.filter(action => action !== 'active')
        } else {
            this.state.push('active')
        }
    }

    hover() {
        if (!this.state.includes('hover')) {
            this.state.push('hover')
        }
    }

    leave() {
        this.state = this.state.filter(action => action !== 'hover')
    }

    morph() {
        let morph = 'default'

        if (this.state.includes('active')) {
            morph = 'active'
        } else if (this.state.includes('hover')) {
            morph = 'hover'
        }

        TweenMax.to(this.references.main, this.variables.sandwich, {
            ease: Sine.easeInOut,
            morphSVG: { shape: this.references[morph].getAttribute('d') }
        })
    }
}

export default new Sandwich
