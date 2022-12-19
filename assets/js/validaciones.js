const form = document.getElementById("form");
let inputs = document.querySelectorAll('#form input');
let pass = document.getElementById("contrasenia");
let passConfirm = document.getElementById("confirmacion");

const expresiones = {
	usuario: /^[a-z-0-9]{4,19}$/, // Letras, numeros menos arroba y guion
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    number: /^[0-9]{1}$/,
	contrasenia: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
const campos = {
	usuario: false,
	contrasenia: false,
    confirmacion: false,
    residente: false
}


// VALIDADANDO LOS CAMPOS TRAENDO LOS NAME DE CADA IMPUT
const validarFormulario = (e)=>{
    switch (e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario,e.target, "*Solo minúscula (a-z) , números (0-9) , min 4 caracteres max 20.","usuario");
            break;

        case "contrasenia":
            validarCampo(expresiones.contrasenia,e.target, "*La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. Puede tener otros símbolos.","contrasenia");
            break;

        case "confirmacion":
            validarConfirmacion("*Contraseña sin igualdad","confirmacion");
        break;

        case "residente":
            validarCampo(expresiones.number,e.target, "*Solo números (0-9), min 1 caracter","residente");
        break;

        default:
            break;
    }
}

const validarCampo = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#mensaje__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#mensaje__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}

const validarConfirmacion = (mensaje,nombre) =>{
    if(pass.value === passConfirm.value){
        passConfirm.classList.remove("formulario_incorrecto");
        passConfirm.classList.add("formulario_correcto");
        document.querySelector(`#mensaje__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        passConfirm.classList.add("formulario_incorrecto");
        document.querySelector(`#mensaje__${nombre}`).innerText = mensaje;
        campos[nombre] = false;
    }
}
// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

form.addEventListener('submit', (e)=>{
    var rol = document.getElementById('rol');
    var apartamento = document.getElementById('apartamentoSelect');

    if(rol.value > 0 && apartamento.value > 0){
        document.querySelector('#mensaje__rol').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#mensaje__rol').innerText="*Se necesita rellenar el campo";
    }
    if(campos.usuario && campos.contrasenia && campos.confirmacion){
        // form.submit();
    }else{
    e.preventDefault();
    }
})
// MOSTRANDO Y OCULTADO LA CONTRASEÑA DEL INPUT
const verificar = () =>{
    let look = document.getElementById("ver");
    if(pass.type == "password"){
        pass.type = "text";
        look.classList.remove("fa-eye");
        look.classList.add("fa-eye-slash");
    }else{
        pass.type = "password";
        look.classList.remove("fa-eye-slash");
        look.classList.add("fa-eye");
    }
}

document.getElementById("ver").addEventListener('click', verificar);

