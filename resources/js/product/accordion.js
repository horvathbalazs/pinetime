export default class Accordion {
    constructor() {
        this.references = {}
        this.variables  = {}

        this.references.accordion = document.querySelector('[data-accordion]')
        this.references.cards     = Array.from(this.references.accordion.querySelectorAll('[data-card]'))

        this.references.cards.forEach(card => {
        })
    }
}
