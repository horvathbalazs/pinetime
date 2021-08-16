import { SpinViewer } from '@egjs/view360'

class SliderShowcase {
    constructor() {
        this.elements = []

        this.elements = Array.from(document.querySelectorAll('[data-slider="showcase"]'))

        this.elements.forEach(element => {
            new SpinViewer(element, {
                imageUrl: element.dataset.sliderImage,
                rowCount: 12
            })
        })
    }
}

export default new SliderShowcase
