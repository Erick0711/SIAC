const formCopropietarioEdit = document.getElementById("formCopropietarioEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    residenteEdit: false,
    mascotaEdit: false
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "residenteEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","residenteEdit");
        break;

        case "mascotaEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","mascotaEdit");
        break;
        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#copropietario__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#copropietario__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formCopropietarioEdit.addEventListener('submit', (e)=>{
    if(camposEdit.residenteEdit && camposEdit.mascotaEdit){
        formCopropietarioEdit.submit();
    }else{
    document.getElementById('copropietarioAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});