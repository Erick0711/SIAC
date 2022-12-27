const formApartamento = document.getElementById("formApartamento");
let inputs = document.querySelectorAll(".formulario input");

const expresiones = {
    Letranumero: /^[a-z]{1}[0-9]{1,10}$/,
}
const campos = {
    numeroApartamento: false,
}

const validarFormulario = (e)=>{
    switch (e.target.name) {
        case "numeroApartamento":
            validarCampo(expresiones.Letranumero,e.target, "*Solo una letra de la (a-z) y min 1 numero del (0-9)","numeroApartamento");
        break;

        default:
            break;
    }
}

const validarCampo = (expresion, input, incorrecto, nombre) =>{
    if(expresion.test(input.value)){ 
        document.getElementById(nombre).classList.remove("formulario_incorrecto");
        document.getElementById(nombre).classList.add("formulario_correcto");
        document.querySelector(`#apartamento__${nombre}`).innerText = "";
        campos[nombre] = true;
    }else{
        document.getElementById(nombre).classList.add("formulario_incorrecto");
        document.querySelector(`#apartamento__${nombre}`).innerText = incorrecto;
        campos[nombre] = false;
    }
}


// RECORRIENDO CADA IMPUT Y COLOCANDOLE LA FUNCIONA VALIDARFORMULARIO
inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formApartamento.addEventListener('submit', (e)=>{
    if(campos.numeroApartamento){
        formApartamento.submit();
    }else{
    e.preventDefault();
    }
});
