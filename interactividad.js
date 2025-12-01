let pistas = [
    "Es el monumento más representativo de Mairena del Alcor.",
    "Sus muros datan de la época medieval.",
    "Su nombre está relacionado con una familia noble muy influyente: los Luna.",
];

let pistas2 = [
    "Es uno de los pozos más antiguos del casco histórico de Mairena del Alcor.",
    "Durante siglos fue un punto esencial para abastecer de agua a los vecinos.",
    "Su nombre hace referencia a un antiguo lugar donde se guardaban bienes o provisiones.",
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
