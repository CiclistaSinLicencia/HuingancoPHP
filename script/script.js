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


