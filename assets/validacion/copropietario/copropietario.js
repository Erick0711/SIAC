const formCopropietario = document.getElementById("formCopropietario");
let inputs = document.querySelectorAll(".formulario input");

const expresiones = {
	correo: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,
    ci: /^[0-9]{7,10}$/,
	telefono: /^[0-9]{8,10}$/, 
    letra: /^[a-z]{1,20}$/, 
    persona: /^[a-z]{1,20}\s{0,1}[a-z]{1,20}\s{0,1}[a-z]{1,20}$$/,
    numero: /^[0-9]{1,10}$/,
    minimo: /^[0-9]{1}$/
}
const campos = {
    residente: false,
    mascota: false,
    nombre: false,  
    apellido: false,
    ci: false,
    correo: false,
    telefono: false,
}
// VALIDADANDO LOS CAMPOS TRAENDO LOS NAME DE CADA IMPUT
const validarFormulario = (e)=>{
    switch (e.target.name) {
    
        case "residente":
            validarCampo(expresiones.minimo,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","residente");
            break;

        case "mascota":
            validarCampo(expresiones.minimo,e.target, "*Solo números (0-9) , min 1 caracteres max 1.","mascota");
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
        document.querySelector(`#copropietario__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#copropietario__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}


// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formCopropietario.addEventListener('submit', (e)=>{
    var apartamento = document.getElementById('apartamento');
    if(apartamento.value > 0){
        document.querySelector('#copropietario__apartamento').innerText="";
    }else{
        e.preventDefault();
        document.querySelector('#copropietario__apartamento').innerText="*Se necesita rellenar el campo";
    }
    if(campos.nombre && campos.apellido && campos.ci && campos.correo && campos.telefono && campos.residente && campos.mascota){
        formCopropietario.submit();
    }else{
    e.preventDefault();
    }
})
