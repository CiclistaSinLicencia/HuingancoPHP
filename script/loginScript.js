/* Validacion */


/* Modal Registro*/
let modal = document.querySelector('.modal-create-account');



let openModal = document.querySelector('.btn-create-account');
openModal.addEventListener('click',opensModal)


let closeModal = document.querySelector('.close-modal');
closeModal.addEventListener('click',closesModal)


function closesModal(){
   
    modal.style.visibility="hidden";
    modal.style.opacity="0";

}
function opensModal(){

    modal.style.visibility="visible";
    modal.style.opacity="1";

}