import Theme from 'mixins/theme'
import View from 'mixins/view'

export default class Header {
    constructor() {
        this.offset     = 100
        this.position   = 0
        this.references = {}
        this.view       = new View

        this.references.header = document.querySelector('[data-header="primary"]')
        this.references.hero   = document.querySelector('[data-hero]')

        document.addEventListener('resize', () => {
            this.scroll()
        })
        document.addEventListener('scroll', () => {
            this.scroll()
        })
        this.scroll()
    }

    scroll() {
        const position = window.pageYOffset

        if (Theme.includes('product')) {
            if (
                ['phone', 'tablet'].includes(this.view.device)
                && this.references.hero.getBoundingClientRect().bottom < this.offset
                && position > this.position
            ) {
                this.references.header.classList.add('header--hidden')
            } else {
                this.references.header.classList.remove('header--hidden')
            }
        } else {
            if (
                ['phone', 'tablet'].includes(this.view.device)
                && position > this.position
            ) {
                this.references.header.classList.add('header--hidden')
            } else {
                this.references.header.classList.remove('header--hidden')
            }
        }

        this.position  = position
    }
}
