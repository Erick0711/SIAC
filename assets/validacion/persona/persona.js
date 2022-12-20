const formUsuario = document.getElementById("formUsuario");
const formCopropietario = document.getElementById("formCopropietario");
const formFuncionario = document.getElementById("formFuncionario");
const formPersonaRegistrar = document.getElementById("formPersonaRegistrar");
let inputs = document.querySelectorAll(".formulario input");
let pass = document.getElementById("contrasenia");
let passConfirm = document.getElementById("confirmacion");

const expresiones = {
	usuario: /^[a-z-0-9]{4,19}$/, // Letras, numeros menos arroba y guion
	contrasenia: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/, // 4 a 12 digitos.
	correo: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,
    ci: /^[0-9]{7,10}$/,
	telefono: /^[0-9]{8,10}$/, // 7 a 14 numeros.
    letra: /^[a-z]{1,20}$/, 
    persona: /^[a-z]{1,20}\s{0,1}[a-z]{1,20}\s{0,1}[a-z]{1,20}$$/,
    numero: /^[0-9]{1,10}$/,
}
const campos = {
	usuario: false,
	contrasenia: false,
    confirmacion: false,
    residente: false,
    mascota: false,
    cargo: false,
    salario: false,
    nombre: false,
    apellido: false,
    ci: false,
    correo: false,
    telefono: false,
    dato: false
}
// const nombre = "MAICOL ERICK ARTEAGA GUZMAN"
// console.log(nombre.length);

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
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","residente");
        break;

        case "mascota":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","mascota");
        break;

        case "cargo":
            validarCampo(expresiones.letra,e.target, "*Solo letra minúscula (a-z), min 1 caracter","cargo");
        break;

        case "salario":
            validarCampo(expresiones.numero,e.target, "*Solo números (0-9), min 1 caracter","salario");
        break;

        case "nombre":
            validarCampo(expresiones.persona,e.target, "*Solo letra minúscula (a-z), min 1 caracter y un espacio por nombre","nombre");
        break;

        case "apellido":
            validarCampo(expresiones.persona,e.target, "*Solo letra minúscula (a-z), min 1 caracter y un espacio por apellido","apellido");
        break;

        case "ci":
            validarCampo(expresiones.ci,e.target, "*Solo números (0-9), min 7 caracter max 10","ci");
        break;

        case "correo":
            validarCampo(expresiones.correo,e.target, "*Puede contener solo letra minúscula, numeros, obligario @ y punto . , opcional ( _ -) ","correo");
        break;

        case "telefono":
            validarCampo(expresiones.telefono,e.target, "*Solo números (0-9), min 8 caracter max 10","telefono");
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

formUsuario.addEventListener('submit', (e)=>{
    var rol = document.getElementById('rol');
    if(rol.value > 0){
        document.querySelector('#mensaje__rol').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#mensaje__rol').innerText="*Se necesita rellenar el campo";
    }
    if(campos.usuario && campos.contrasenia && campos.confirmacion){
        formUsuario.submit();
    }else{
    e.preventDefault();
    }
})
formCopropietario.addEventListener('submit', (e)=>{
    var apartamento = document.getElementById('apartamentoSelect');
    if(apartamento.value > 0){
        document.querySelector('#mensaje__apartamento').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#mensaje__apartamento').innerText="*Se necesita rellenar el campo";
    }
    if(campos.residente && campos.mascota){
        formCopropietario.submit();
    }else{
    e.preventDefault();
    }
})
formFuncionario.addEventListener('submit', (e)=>{
    if(campos.cargo && campos.salario){
        formFuncionario.submit();
    }else{
    e.preventDefault();
    }
})
formPersonaRegistrar.addEventListener('submit', (e)=>{
    if(campos.nombre && campos.apellido && campos.ci && campos.correo && campos.telefono){
        formPersonaRegistrar.submit();
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