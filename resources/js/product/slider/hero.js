import $ from 'jquery'
import 'slick-carousel'
import { sprintf } from 'sprintf-js'

class SliderHero {
    constructor() {
        this.arrow    = ''
        this.dot      = {}
        this.elements = []

        this.arrow      = `
            <button class="slick-%1$s"
                    type="button">
                <svg class="slick-icon">
                    <use href="#symbol-chevron-%2$s"/>
                </svg>
            </button>
        `
        this.dot.phone  = `
            <button class="slick-dot"
                    type="button">
            </button>
        `
        this.dot.laptop = `
            <button class="slick-dot"
                    type="button">asd
            </button>
        `
        this.elements   = Array.from(document.querySelectorAll('[data-slider="hero"]'))

        this.elements.forEach(element => {
            $(element).slick({
                arrows: false,
                customPaging: () => this.dot.phone,
                dots: true,
                mobileFirst: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            arrows: true,
                            customPaging: () => {
                                return this.dot.laptop
                            },
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
