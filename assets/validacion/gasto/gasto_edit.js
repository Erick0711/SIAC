const formGastoEdit = document.getElementById("formGastoEdit");
const formGastoTipoEdit = document.getElementById("formGastoTipoEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    descripcionEdit: false,
    montoEdit: false,
    nombreTipoEdit: false
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "descripcionGastoEdit":
            validarCampoEdit(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter.","descripcionGastoEdit");
        break;

        case "montoEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","montoEdit");
        break;

        case "nombreTipoEdit":
            validarCampoEdit(expresiones.letra,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","nombreTipoEdit");
        break;
        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#gasto__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#gasto__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formGastoEdit.addEventListener('submit', (e)=>{
    if(camposEdit.descripcionGastoEdit && camposEdit.montoEdit){
        formGastoEdit.submit();
    }else{
    document.getElementById('gastoAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});

formGastoTipoEdit.addEventListener('submit', (e)=>{
    if(camposEdit.nombreTipoEdit){
        formGastoTipoEdit.submit();
    }else{
    document.getElementById('gastoTipoAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});