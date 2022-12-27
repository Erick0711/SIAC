const formArticulo = document.getElementById("formArticulo");
const formArticuloTipo = document.getElementById("formArticuloTipo");
let inputs = document.querySelectorAll(".formulario input");

const expresiones = {
    letra: /^[a-z]{1,20}$/, 
    numero: /^[0-9]{1,10}$/,
}
const campos = {
    descripcion: false,
    montoArticulo: false,
    tipo: false
}
// const nombre = "MAICOL ERICK ARTEAGA GUZMAN"
// console.log(nombre.length);

// VALIDADANDO LOS CAMPOS TRAENDO LOS NAME DE CADA IMPUT
const validarFormulario = (e)=>{
    switch (e.target.name) {
        case "descripcion":
            validarCampo(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter","descripcion");
        break;

        case "montoArticulo":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","montoArticulo");
        break;

        case "tipo":
            validarCampo(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter","tipo");
        break;

        default:
            break;
    }
}

const validarCampo = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#articulo__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#articulo__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}


// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formArticulo.addEventListener('submit', (e)=>{
    var tipoArticulo = document.getElementById('tipoArticulo');
    if(tipoArticulo.value > 0){
        document.querySelector('#articulo__tipoArticulo').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#articulo__tipoArticulo').innerText="*Se necesita rellenar el campo";
    }
    if(campos.descripcion && campos.montoArticulo){
        formArticulo.submit();
    }else{
    e.preventDefault();
    }
});

formArticuloTipo.addEventListener('submit', (e)=>{
    if(campos.tipo){
        formArticuloTipo.submit();
    }else{
    e.preventDefault();
    }
});
