//-- Funcion mostrar Hora

function mostrarHora(){
    momentoActual = new Date();
    hora = momentoActual.getHours();
    minuto = momentoActual.getMinutes();

    horaPrint = hora + ":" + minuto;

    // salida
    document.getElementById('#mostrarHora').innerHTML = horaPrint;
}

