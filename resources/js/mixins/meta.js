export default class Meta {
    constructor(name) {
        const meta = document.createElement('meta')

        meta.className = name
        document.querySelector('head').appendChild(meta)

        window.getComputedStyle(meta)
            .getPropertyValue('font-family')
            .replace(/["()\\]+/g, '')
            .split(',')
            .map(property => {
                const [ key, value ] = property.split(':')
                this[key] = value.replace(/^([0-9.]+)s$/, '$1')
            })

        meta.parentNode.removeChild(meta)
    }
}
