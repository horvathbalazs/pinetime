class Header {
    constructor() {
        this.position   = 0
        this.references = {}

        this.references.header = document.querySelector('[data-header="primary"]')

        document.addEventListener('scroll', () => this.scroll())
        this.scroll()
    }

    scroll() {
        const position = window.pageYOffset

        if (position > this.position) {
            this.references.header.classList.add('header--hidden')
        } else {
            this.references.header.classList.remove('header--hidden')
        }

        this.position  = position
    }
}

export default new Header
