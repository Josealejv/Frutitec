const modal = document.getElementById("productosModal");

const openModal = () => {
    modal.showModal();
} 

const closeModal = () =>{
    modal.close();
}

function confirmacion(){
    var respuesta = confirm("¿Realmente desea borrar el producto?");
    if (respuesta==true){
        return true;
    }
    else{
        return false;
    }
}




