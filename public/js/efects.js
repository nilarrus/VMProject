/**
 * Mostrar overlay pasando por parametro el nombre del elemento
 */
function on(elemento) {
    document.getElementById(elemento).style.display = "block";
}
/**
 * Esconder el overlay
 */
function off(elemento) {
    document.getElementById(elemento).style.display = "none";
}