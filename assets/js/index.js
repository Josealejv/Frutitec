const modal = document.getElementById("productosModal");

const openModal = () => {
    modal.showModal();
}

const closeModal = () => {
    modal.close();
}

function confirmacion() {
    var respuesta = confirm("¿Realmente desea borrar el producto?");
    if (respuesta == true) {
        return true;
    }
    else {
        return false;
    }
}

const modal2 = document.getElementById("proveedoresModal");

const openModal2 = () => {
    modal2.showModal();
}

const closeModal2 = () => {
    modal2.close();
}

function confirmacion2() {
    var respuesta = confirm("¿Realmente desea borrar el producto?");
    if (respuesta == true) {
        return true;
    }
    else {
        return false;
    }
}

const modal3 = document.getElementById("clientesModal");

const openModal3 = () => {
    modal3.showModal();
}

const closeModal3 = () => {
    modal3.close();
}

function confirmacion3() {
    var respuesta = confirm("¿Realmente desea borrar el cliente?");
    if (respuesta == true) {
        return true;
    }
    else {
        return false;
    }
}

const modal4 = document.getElementById("inventarioModal");

const openModal4 = () => {
    modal4.showModal();
}

const closeModal4 = () => {
    modal4.close();
}

function confirmacion4() {
    var respuesta = confirm("¿Desea borrar la orden?");
    if (respuesta == true) {
        return true;
    }
    else {
        return false;
    }
}

// const restar = document.getElementById("restar");

// function cantidad(){
//     var numero = 0;
//     const sumar = document.getElementById("sumar");
//     if (sumar==true){
//         console.log (numero+1);
//     }
//     else{
//         return false;
//     }
// }

