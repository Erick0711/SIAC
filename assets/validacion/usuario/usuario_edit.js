const formUsuarioEdit = document.getElementById("formUsuarioEdit");
let inputsEdit = document.querySelectorAll(".formulario input");
let passEdit = document.getElementById("contraseniaEdit");
const camposEdit = {
    contraseniaEdit: false,
}

const validarFormularioEdit = (e)=>{
    switch (e.target.name) {
        case "contraseniaEdit":
            validarCampoEdit(expresiones.contrasenia,e.target, "*La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. Puede tener otros símbolos.","contraseniaEdit");
        break;

        default:
            break;
    }
}

const validarCampoEdit = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#usuario__${nombre}`).innerText = "";
        camposEdit[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#usuario__${nombre}`).innerText = incorrecto;
        camposEdit[nombre] = false;
    }
}

// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputsEdit.forEach((input) => {
    input.addEventListener('keyup', validarFormularioEdit);
    input.addEventListener('blur', validarFormularioEdit);
});

formUsuarioEdit.addEventListener('submit', (e)=>{
    if(camposEdit.contraseniaEdit){
        formUsuarioEdit.submit();
    }else{
    document.getElementById('usuarioAlertaEdit').classList.remove('invisible')
    e.preventDefault();
    }
})
// MOSTRANDO Y OCULTADO LA CONTRASEÑA DEL INPUT
const verificarEdit = () =>{
    let look = document.getElementById("verEdit");
    if(passEdit.type == "password"){
        passEdit.type = "text";
        look.classList.remove("fa-eye");
        look.classList.add("fa-eye-slash");
    }else{
        passEdit.type = "password";
        look.classList.remove("fa-eye-slash");
        look.classList.add("fa-eye");
    }
}

document.getElementById("verEdit").addEventListener('click', verificarEdit);