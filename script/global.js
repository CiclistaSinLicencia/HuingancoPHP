// espera a la carga del documento para no tener flashes
let domReady = (cb) => {
  document.readyState === "interactive" || document.readyState === "complete"
    ? cb()
    : document.addEventListener("DOMContentLoaded", cb);
};

domReady(() => {
  // Display body when DOM is loaded
  document.body.style.visibility = "visible";
});

//Themes
let theme = localStorage.getItem("data-theme");

const changeThemeToDark = () => {
  document.documentElement.setAttribute("data-theme", "dark");
  localStorage.setItem("data-theme", "dark");
};
const changeThemeToLight = () => {
  document.documentElement.setAttribute("data-theme", "light");
  localStorage.setItem("data-theme", "light");
};

if (theme === "dark") {
  changeThemeToDark();
}

const checkbox = document.getElementById("theme");
checkbox.addEventListener("change", () => {
  let theme = localStorage.getItem("data-theme");
  if (theme === "dark") {
    changeThemeToLight();
  } else {
    changeThemeToDark();
  }
});



/*-------------------------
          LOGIN
--------------------------*/

let btnNavLogin = document.querySelector('.nav-login')

/*-------------------------
          Modal Registro
--------------------------*/
let loginWrapper = document.querySelector('.login-wrapper')

let modalRegistro = document.querySelector('.modal-create-account');

let openModal = document.querySelector('.btn-create-account');
openModal.addEventListener('click',opensModal)


let closeModal = document.querySelector('.close-modal');
closeModal.addEventListener('click',closesModal)


function closesModal(){
   
    modalRegistro.style.display = "none"; 
    modalRegistro.style.visibility="hidden";
    modalRegistro.style.opacity="0";
  

    modalLogin.style.display = "flex"; 
    modalLogin.style.visibility="visible";
    modalLogin.style.opacity= "1";
}
function opensModal(){
    modalRegistro.style.display = "flex"; 
    modalRegistro.style.visibility="visible";
    modalRegistro.style.opacity="1";
    

    modalLogin.style.visibility="hidden";
    modalLogin.style.opacity= "0"; 
    modalLogin.style.display = "none"; 


}

/*-------------------------
          Modal Login
--------------------------*/


let modalLogin = document.querySelector('.login-ctn');


let openLoginMobile = document.querySelector('.open-login-mobile');
openLoginMobile.addEventListener('click',opensLogin);

let openLogin = document.querySelector('.nav-login');
openLogin.addEventListener('click',opensLogin);



let closeLogin = document.querySelector('.btn-close-login');
closeLogin.addEventListener('click',closesLogin)



function opensLogin(){
    loginWrapper.style.display = "flex";
    modalLogin.style.display = "flex";


    loginWrapper.style.visibility="visible";
    modalLogin.style.visibility="visible";

    loginWrapper.style.opacity = "1";
    modalLogin.style.opacity= "1";
    
    btnNavLogin.style.pointerEvents =  "none";
    }

function closesLogin(){


    loginWrapper.style.visibility="hidden";
    loginWrapper.style.opacity= "0"; 
    loginWrapper.style.display = "none"; 

    modalLogin.style.visibility="hidden";
    modalLogin.style.opacity= "0"; 
    modalLogin.style.display = "none"; 

    
    console.log ('cierra')
    
    btnNavLogin.style.pointerEvents =  "all";
    }


