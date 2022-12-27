const formApartamentoEdit = document.getElementById("formApartamentoEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    numeroApartamentoEdit: false
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "numeroApartamentoEdit":
            validarCampo(expresiones.Letranumero,e.target, "*Solo una letra de la (a-z) y mini 1 numero del (0-9)", "numeroApartamentoEdit");
        break;

        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#apartamento__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#apartamento__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formApartamentoEdit.addEventListener('submit', (e)=>{
    console.log(camposEdit.numeroApartamentoEdit);
    if(camposEdit.numeroApartamentoEdit){
        formApartamentoEdit.submit();
    }else{
    document.getElementById('apartamentoAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
});
