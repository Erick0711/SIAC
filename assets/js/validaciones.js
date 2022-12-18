const form = document.getElementById("form");
const usuario = document.getElementById("usuario");
let mensaje = document.getElementById("mensaje");
let inputs = document.querySelectorAll('#form input');



const validarFormulario = (e)=>{
    // console.log(e.target.name);
    switch (e.target.name) {
        case "usuario":
            console.log("funciona");
            break;
    
        default:
            break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    // if(input.value.trim == ""){
    //     mensaje.innerText="campos vacios";
    //     input.style;
    // }
});

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    // validar();
})


// function validar(){
//     const userV = usuario.value.trim();
//     const input = campos.value.trim();
//     if(input == ""){
//         alert("ESTO ESTA VACIO USUARIO");
//     }
//     // usuario.value="otracosa";
// }

// form.addEventListener('submit', (e)=>{
//     e.preventDefault();

//     inputs();
// });

// function inputs(){
//     const usuarioValue = usuario.value.trim();

//     if(usuarioValue === ''){
//         alert("FUNCIONA");
//     }
// }