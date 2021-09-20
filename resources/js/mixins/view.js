export default class View {
    constructor() {
        this.device = 'phone'

        this.update()

        window.addEventListener('resize', () => {
            if (this.get() !== this.device) {
                this.update()
            }
        })
    }

    get() {
        return window.getComputedStyle(document.body, '::before')
            .getPropertyValue('content')
            .replace(/['"]/g, '')
    }

    update() {
        this.device = this.get()
    }
}
