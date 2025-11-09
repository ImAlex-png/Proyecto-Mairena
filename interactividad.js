let pistas = [
    "Es un sitio muy concurrido por los visueños...",
    "Eta cerca de un bar llamado el 'Piopa' ",
    "Es un sitio muy visitado por los amantes de la cerveza",
];

let indice = 0;

function mostrarPista(){
    const textoPista = document.getElementById("pista");

    if(indice < pistas.length){
        textoPista.textContent = pistas[indice];
        indice++;
    }else{
        textoPista.textContent = "Ya no hay pistas que mostrar";
    }
}

function pistas2(){ 
    const textoPista = document.getElementById("pista");

    if(indice < pistas2.length){
        textoPista.textContent = pistas2[indice];
        indice++;
    }else{
        textoPista.textContent = "Ya no hay pistas que mostrar";
    }
}
