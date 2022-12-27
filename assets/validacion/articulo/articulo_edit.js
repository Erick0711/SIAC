const formArticuloEdit = document.getElementById("formArticuloEdit");
const formArticuloTipoEdit = document.getElementById("formArticuloTipoEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    descripcionArticuloEdit: false,
    montoArticuloEdit: false,
    nombreTipoEdit: false,
    tipoEdit: false
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "descripcionArticuloEdit":
            validarCampoEdit(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter.","descripcionArticuloEdit");
        break;

        case "montoArticuloEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","montoArticuloEdit");
        break;

        case "tipoEdit":
            validarCampoEdit(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter.","tipoEdit");
        break;
        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#articulo__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#articulo__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formArticuloEdit.addEventListener('submit', (e)=>{
    if(camposEdit.descripcionArticuloEdit && camposEdit.montoArticuloEdit){
        formArticuloEdit.submit();
    }else{
    document.getElementById('articuloAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});

formArticuloTipoEdit.addEventListener('submit', (e)=>{
    if(camposEdit.tipoEdit){
        formArticuloTipoEdit.submit();
    }else{
    document.getElementById('articuloTipoAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});