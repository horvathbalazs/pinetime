import $ from 'jquery'
import 'slick-carousel'

class SliderInstagram {
    constructor() {
        this.elements = []

        this.elements = Array.from(document.querySelectorAll('[data-slider="instagram"]'))

        this.elements.forEach(element => {
            $(element).slick({
                accessibility: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 0,
                cssEase: 'linear',
                draggable: false,
                pauseOnFocus: false,
                pauseOnHover: false,
                slidesToShow: 6,
                speed: 10000,
                swipe: false,
                touchMove: false,
                variableWidth: true,
                waitForAnimate: false
            })
            element.addEventListener(
                'mouseenter',
                () => $(element).slick('slickSetOption', 'speed', 2147483647, true)
            )
            element.addEventListener(
                'mouseleave',
                () => $(element).slick('slickSetOption', 'speed', 10000, true)
            )
        })
    }
}

export default new SliderInstagram
