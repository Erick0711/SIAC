const formGasto = document.getElementById("formGasto");
const formGastoTipo = document.getElementById("formGastoTipo");
let inputs = document.querySelectorAll(".formulario input");

const expresiones = {
    letra: /^[a-z]{1,20}$/, 
    numero: /^[0-9]{1,10}$/,
}
const campos = {
    descripcion: false,
    monto: false,
    nombreTipo: false,
}
// const nombre = "MAICOL ERICK ARTEAGA GUZMAN"
// console.log(nombre.length);

// VALIDADANDO LOS CAMPOS TRAENDO LOS NAME DE CADA IMPUT
const validarFormulario = (e)=>{
    switch (e.target.name) {
        case "descripcion":
            validarCampo(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter","descripcion");
        break;

        case "monto":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","monto");
        break;

        case "nombreTipo":
            validarCampo(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter","nombreTipo");
        break;

        default:
            break;
    }
}

const validarCampo = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#gasto__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#gasto__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}


// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formGasto.addEventListener('submit', (e)=>{
    var tipoGasto = document.getElementById('tipoGasto');
    if(tipoGasto.value > 0){
        document.querySelector('#gasto__tipoGasto').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#gasto__tipoGasto').innerText="*Se necesita rellenar el campo";
    }
    if(campos.descripcion && campos.monto){
        formGasto.submit();
    }else{
    e.preventDefault();
    }
});

formGastoTipo.addEventListener('submit', (e)=>{
    if(campos.nombreTipo){
        formGastoTipo.submit();
    }else{
    e.preventDefault();
    }
});
