let pistas = [
    "Es un sitio muy concurrido por los visueños...",
    "Está cerca de un bar llamado el 'Piopa' ",
    "Es un sitio muy visitado por los amantes de la cerveza",
];

let pistas2 = [
    "El lugar que buscas es una iglesia.",
    "Es la iglesia más importante y antigua del Viso del Alcor.",
    "Su nombre completo incluye el de la Virgen que es patrona del pueblo.",
];

let indice = 0;
let indice2 = 0;

function mostrarPista() {
    const textoPista = document.getElementById("pista");

    if (indice < pistas.length) {
        textoPista.textContent = pistas[indice];
        indice++;
    } else {
        textoPista.textContent = "Ya no hay mas pistas que mostrar";
    }
}

function mostrarPista2() {
    const textoPista = document.getElementById("pista2");

    if (indice2 < pistas2.length) {
        textoPista.textContent = pistas2[indice2];
        indice2++;
    } else {
        textoPista.textContent = "Ya no hay pistas que mostrar";
    }
}
