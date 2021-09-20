import { watch } from 'watchjs'

export default class Sizing {
    constructor() {
        this.active     = false
        this.references = {}
        this.size       = ''

        this.references.modal = document.querySelector('[data-sizing="modal"]')
        this.references.open  = document.querySelector('[data-sizing="open"]')
        this.references.sizes = Array.from(this.references.modal.querySelectorAll('[data-size]'))
        this.size             = this.references.sizes.find(size => size.dataset.active).dataset.key

        this.references.open.addEventListener('click', () => {
            this.active = true
        })
        this.references.sizes.forEach(size => {
            size.addEventListener('click', () => {
                this.size = size.dataset.key
            })
        })

        watch(this, 'active', () => {
            this.activeChange()
        })
        watch(this, 'size', () => {
            this.sizeChange()
        })
        this.sizeChange()
    }

    activeChange() {
        this.references.modal.classList[this.active ? 'add' : 'remove']('sizing--active')
    }

    sizeChange() {
        this.references.sizes.forEach(size => {
            const match = this.size === size.dataset.key
            size.dataset.active = match
            size.parentNode.classList[match ? 'add' : 'remove']('sizing__item--active')
        })
    }
}
