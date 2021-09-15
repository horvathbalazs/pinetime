export default class Theme {
    static includes(name) {
        return this.list().includes(name)
    }

    static list() {
        return Array.from(document.documentElement.classList)
            .filter(name => name.match(/^theme--[a-z]+$/))
            .map(name => name.replace(/^theme--([a-z]+)$/, '$1'))
    }
}
