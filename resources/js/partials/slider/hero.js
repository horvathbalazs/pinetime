import 'slick-carousel'

export default class {
    constructor() {
        this.elements = document.querySelectorAll('[data-slider-hero]')

        this.elements.forEach(element => {
            $(element).slick({
            })
        })
    }

    hero() {
    }
}
