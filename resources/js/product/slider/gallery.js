import $ from 'jquery'
import PinchZoom from 'pinch-zoom-js'
import 'slick-carousel'
import { watch } from 'watchjs'

import Theme from 'mixins/theme'

class SliderGallery {
    constructor() {
        if (Theme.includes('product') && !Theme.includes('partial')) {
            this.active     = false
            this.swipe      = false
            this.references = {}

            this.references.gallery = document.querySelector('[data-gallery]')
            this.references.close   = document.querySelector('[data-gallery-close]')
            this.references.open    = Array.from(document.querySelectorAll('[data-gallery-open]'))
            this.references.slider  = document.querySelector('[data-slider="gallery"]')
            this.references.slides  = Array.from(this.references.slider.querySelectorAll('[data-slider-slide]'))

            $(this.references.slider).slick({
                arrows: false
            })
            this.references.slides.forEach(slide => {
                /*
                new PinchZoom(slide)
                */
            })
            this.references.close.addEventListener('click', () => {
                this.active = false
            })
            this.references.open.forEach(element => {
                element.addEventListener('mousedown', event => {
                    this.swipe = false
                })
                element.addEventListener('mousemove', event => {
                    this.swipe = true
                })
                element.addEventListener('mouseup', event => {
                    if (!this.swipe) {
                        this.active = true
                    }
                })
            })

            watch(this, 'active', () => this.transition())
        }
    }

    transition () {
        document.body.style.overflowY = this.active ? 'hidden' : 'visible'
        this.references.gallery.classList[
            this.active
            ? 'add'
            : 'remove'
        ]('slider--active')
    }
}

export default new SliderGallery
