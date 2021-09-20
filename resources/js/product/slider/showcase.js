import { SpinViewer } from '@egjs/view360'

import View from 'mixins/view'

export default class SliderShowcase {
    constructor() {
        this.offset     = 100
        this.references = {}
        this.slider     = {}
        this.view       = new View

        this.references.showcase = document.querySelector('[data-showcase]')
        this.references.slider   = document.querySelector('[data-slider="showcase"]')

        this.slider = new SpinViewer(this.references.slider, {
            imageUrl: this.references.slider.dataset.sliderImage,
            rowCount: 12
        })

        document.addEventListener('resize', () => {
            this.scroll()
        })
        document.addEventListener('scroll', () => {
            this.scroll()
        })
        this.scroll()
    }

    scroll() {
        if (['laptop', 'desktop'].includes(this.view.device)) {
            const { showcase } = this.references

            this.slider.spinTo(
                360 * Math.min(
                    Math.max(
                        -1 * (showcase.getBoundingClientRect().top
                        - this.offset
                        - (window.innerHeight - this.offset) / 2)
                        / showcase.offsetHeight,
                        0
                    ),
                1) - 15,
                { duration: 0 }
            )
        }
    }
}
