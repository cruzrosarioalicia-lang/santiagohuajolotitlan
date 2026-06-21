let imagenes = [
    "img/imagen1.jpg",
    "img/imagen2.jpg",
    "img/imagen3.jpg",
    "img/imagen4.jpg",
    "img/imagen5.jpg",
    "img/imagen6.jpg",
    "img/imagen7.jpg"
];

let indice = 0;

function cambiarImagen(direccion){
    indice = indice + direccion;

    if(indice >= imagenes.length){
        indice = 0;
    }

    if(indice < 0){
        indice = imagenes.length - 1;
    }

    document.getElementById("slider-img").src = imagenes[indice];
}