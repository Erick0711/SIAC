const formEstacionamiento = document.getElementById("formEstacionamiento");
const formPabellon = document.getElementById("formPabellon");
let inputs = document.querySelectorAll(".formulario input");

const expresiones = {
    numero: /^[0-9]{1,10}$/,
}
const campos = {
    numeroEstacionamiento: false,
    numeroPabellon: false,
    pabellon: false
}

const validarFormulario = (e)=>{
    switch (e.target.name) {
        case "numeroEstacionamiento":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","numeroEstacionamiento");
        break;

        case "numeroPabellon":
            validarCampo(expresiones.letra,e.target, "*Solo números (0-9), min 1 caracter","numeroPabellon");
        break;

        case "pabellon":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","pabellon");
        break;
        default:
            break;
    }
}

const validarCampo = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#estacionamiento__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#estacionamiento__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}


// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formEstacionamiento.addEventListener('submit', (e)=>{
    var numeroPabellon = document.getElementById('numeroPabellon');
    if(numeroPabellon.value > 0){
        document.querySelector('#estacionamiento__numeroPabellon').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#estacionamiento__numeroPabellon').innerText="*Se necesita rellenar el campo";
    }
    if(campos.numeroEstacionamiento){
        formEstacionamiento.submit();
    }else{
    e.preventDefault();
    }
});

formPabellon.addEventListener('submit', (e)=>{
    if(campos.pabellon){
        formPabellon.submit();
    }else{
    e.preventDefault();
    }
});
