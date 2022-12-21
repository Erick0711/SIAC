const formFuncionarioEdit = document.getElementById("formFuncionarioEdit");
let inputsEdit = document.querySelectorAll(".formulario input");

const camposEdit = {
    cargoEdit: false,
    salarioEdit: false,
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "cargoEdit":
            validarCampoEdit(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter y un espacio por nombre","cargoEdit");
        break;

        case "salarioEdit":
            validarCampoEdit(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","salarioEdit");
        break;

        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#funcionario__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#funcionario__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formFuncionarioEdit.addEventListener('submit', (e)=>{
    if(camposEdit.cargoEdit && camposEdit.salarioEdit){
        formFuncionarioEdit.submit();
    }else{
    document.getElementById('funcionarioAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
})
