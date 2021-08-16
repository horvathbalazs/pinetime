import $ from 'jquery'
import 'slick-carousel'
import { sprintf } from 'sprintf-js'

class SliderHero {
    constructor() {
        this.arrow    = ''
        this.elements = []

        this.arrow    = `
            <button class="slick-%1$s"
                    type="button">
                <svg class="slick-icon">
                    <use href="#symbol-chevron-%2$s"/>
                </svg>
            </button>
        `
        this.elements = Array.from(document.querySelectorAll('[data-slider="hero"]'))

        this.elements.forEach(element => {
            $(element).slick({
                arrows: false,
                dots: true,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: true,
                            nextArrow: sprintf(this.arrow, 'next', 'right'),
                            prevArrow: sprintf(this.arrow, 'previous', 'left')
                        }
                    }
                ]
            })
        })
    }
}

export default new SliderHero
