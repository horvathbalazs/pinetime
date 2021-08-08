export default class Converter {
    static pxtorem (value) {
        value /= parseFloat(window.getComputedStyle(document.documentElement).fontSize)
        return `${ value }rem`
    }
}
