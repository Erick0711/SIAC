const formPersonaEditar = document.getElementById("formPersonaEditar");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
	nombreEdit: false,
    apellidoEdit: false,
    ciEdit: false,
    correoEdit: false,
    telefonoEdit: false,
}
// const nombre = "MAICOL ERICK ARTEAGA GUZMAN"
// console.log(nombre.length);

// VALIDADANDO LOS CAMPOS TRAENDO LOS NAME DE CADA IMPUT
const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "nombreEdit":
            validarCampoEdit(expresiones.persona,e.target, "*Solo letra minúscula (a-z), min 1 caracter y un espacio por nombre","nombreEdit");
        break;

        case "apellidoEdit":
            validarCampoEdit(expresiones.persona,e.target, "*Solo letra minúscula (a-z), min 1 caracter y un espacio por apellido","apellidoEdit");
        break;

        case "ciEdit":
            validarCampoEdit(expresiones.ci,e.target, "*Solo números (0-9), min 7 caracter max 10","ciEdit");
        break;

        case "correoEdit":
            validarCampoEdit(expresiones.correo,e.target, "*Puede contener solo letra minúscula, numeros, obligario @ y punto . , opcional ( _ -)","correoEdit");
        break;

        case "telefonoEdit":
            validarCampoEdit(expresiones.telefono,e.target, "*Solo números (0-9), min 8 caracter max 10","telefonoEdit");
        break;
        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#mensaje__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#mensaje__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formPersonaEditar.addEventListener('submit', (e)=>{
    if(camposEdit.nombreEdit && camposEdit.apellidoEdit && camposEdit.ciEdit && camposEdit.correoEdit && camposEdit.telefonoEdit){
        formPersonaEditar.submit();
    }else{
    document.getElementById('personaAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
})
