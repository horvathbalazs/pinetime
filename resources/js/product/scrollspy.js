import { TweenMax } from 'gsap/all'
import { watch } from 'watchjs'

import variables from 'mixins/variables'
import View from 'mixins/view'

export default class Scrollspy {
    constructor() {
        this.offset     = {
            header: 40,
            scrollspy: 100
        }
        this.position   = 0
        this.references = {}
        this.section    = ''
        this.variables  = {}
        this.view       = new View

        this.references.hero       = document.querySelector('[data-hero]')
        this.references.items      = Array.from(document.querySelectorAll('[data-scrollspy-item]'))
        this.references.navigation = document.querySelector('[data-navigation="header-primary"]')
        this.references.scrollspy  = document.querySelector('[data-scrollspy]')
        this.references.sections   = Array.from(document.querySelectorAll('[data-scrollspy-section]'))

        this.variables.elevator = variables.elevator

        watch(this, 'section', () => {
            this.sectionChange()
        })

        this.section = this.references.sections[0].dataset.scrollspySection

        document.addEventListener('resize', () => {
            this.scroll()
        })
        document.addEventListener('scroll', () => {
            this.scroll()
        })
        this.scroll()

        this.references.items.forEach(item => {
            item.addEventListener('click', () => {
                this.click(item.dataset.scrollspyItem)
            })
        })
    }

    click(key) {
        TweenMax.to(window, this.variables.elevator, {
            scrollTo: {
                y: Math.max(
                        this.references
                            .sections
                            .find(section => section.dataset.scrollspySection === key)
                            .offsetTop
                        - this.offset.scrollspy
                        + this.offset.header,
                        0
                    )
            }
        })
    }

    scroll() {
        const position = window.pageYOffset

        if (
            ['phone', 'tablet'].includes(this.view.device)
            && this.references.hero.getBoundingClientRect().bottom < this.offset.scrollspy
            && position > this.position
        ) {
            this.references.scrollspy.classList.add('scrollspy--hidden')
        } else {
            this.references.scrollspy.classList.remove('scrollspy--hidden')
        }

        if (
            ['laptop', 'desktop'].includes(this.view.device)
            && this.references.scrollspy.getBoundingClientRect().top === this.offset.header
        ) {
            this.references.navigation.classList.add('navigation--hidden')
        } else {
            this.references.navigation.classList.remove('navigation--hidden')
        }

        this.position = position

        const [first, ...sections] = this.references.sections,
            threshold = this.offset.scrollspy + (window.innerHeight - this.offset.scrollspy) / 2
        let currentSection = first.dataset.scrollspySection

        sections.forEach(section => {
            const position = section.getBoundingClientRect().top + this.offset.scrollspy

            if (position < threshold) {
                currentSection = section.dataset.scrollspySection
            }
        })

        this.section = currentSection
    }

    sectionChange() {
        this.references.items.forEach(item => {
            item.classList[
                item.dataset.scrollspyItem === this.section
                ? 'add'
                : 'remove'
            ]('scrollspy__item--active')
        })
    }
}
