// function soloLetras(e) 
// {
//     var key = e.keyCode || e.which,
//         tecla = String.fromCharCode(key).toLowerCase(),
//         letras = "áéíóúabcdefghijklmnñopqrstuvwxyz ",
//         especiales = [46],
//         tecla_especial = false;
//     for (var i in especiales) {
//         if (key == especiales[i]) {
//             tecla_especial = true;
//             break;
//         }
//     }
//     if (letras.indexOf(tecla) == -1 && !tecla_especial) {
//         return false;
//     }
// }
// function soloLetraNumero(e) 
// {
//     var key = e.keyCode || e.which,
//         tecla = String.fromCharCode(key).toLowerCase(),
//         letras = "áéíóúabcdefghijklmnñopqrstuvwxyz0123456789",
//         especiales = [46],
//         tecla_especial = false;
//     for (var i in especiales) {
//         if (key == especiales[i]) {
//             tecla_especial = true;
//             break;
//         }
//     }
//     if (letras.indexOf(tecla) == -1 && !tecla_especial) {
//         return false;
//     }
// }

function numero(evt) 
{
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 48 && code <= 57) {
        return true;
    } else {
        return false;
    }
}
function letraMinuscula(evt) 
{
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 97 && code <= 122) {
        return true;
    } else {
        return false;
    }
}
function letraMayuscula(evt) 
{
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 65 && code <= 90) {
        return true;
    } else {
        return false;
    }
}
function letraNumero(evt) 
{
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 48 && code <= 57) {
        return true;
    }else if (code >= 97 && code <= 122) {
        return true; 
    }else {
        return false;
    }
}


