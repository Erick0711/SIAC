function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8,37];
    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}
function numero(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 48 && code <= 57) {
        return true;
    } else {
        return false;
    }
}
function letraMinuscula(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 97 && code <= 122) {
        return true;
    } else if (code == 43) {
        return true;
    } else {
        return false;
    }
}
function letraEspacio(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 97 && code <= 122 || code == 32 || (code >= 164 && code <= 250)) {
        return true;
    } else {
        return false;
    }
}
function letraNumero(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 48 && code <= 57) {
        return true;
    } else if (code >= 97 && code <= 122) {
        return true;
    } else {
        return false;
    }
}
function letraCorreo(evt) {
    var code = evt.which ? evt.which : evt.keyCode;
    if (code == 8) {
        return true;
    } else if (code >= 48 && code <= 57) {
        return true;
    } else if (code >= 97 && code <= 122) {
        return true;
    } else if (code == 64) {
        return true;
    } else if (code == 46) {
        return true;
    } else if (code == 95) {
        return true;
    } else if (code == 45) {
        return true;
    } else {
        return false;
    }
}



