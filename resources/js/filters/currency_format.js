/**
 *
 * @returns {string}
 * @param {Number} value
 */
export default function currencyFormat(value) {
    if(typeof value !== "number") {
        value = parseFloat(value)
    }
    return value.toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'})
}
