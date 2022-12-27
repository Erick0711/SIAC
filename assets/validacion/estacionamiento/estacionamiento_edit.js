const formEstacionamientoEdit = document.getElementById("formEstacionamientoEdit");
const formPabellonEdit = document.getElementById("formPabellonEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    numeroEstacionamientoEdit: false,
    pabellonEdit: false
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "numeroEstacionamientoEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo letra minúscula (a-z), min 1 caracter.","numeroEstacionamientoEdit");
        break;

        case "pabellonEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","pabellonEdit");
        break;
        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#estacionamiento__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#estacionamiento__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formEstacionamientoEdit.addEventListener('submit', (e)=>{
    if(camposEdit.numeroEstacionamientoEdit){
        formEstacionamientoEdit.submit();
    }else{
    document.getElementById('estacionamientoNumeroAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});


formPabellonEdit.addEventListener('submit', (e)=>{
    if(camposEdit.pabellon){
        formPabellonEdit.submit();
    }else{
    document.getElementById('pabellonAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});