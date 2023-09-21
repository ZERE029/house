const hambug = document.querySelector(".hambug");
const navMenu = document.querySelector(".nav-menu");
hambug.addEventListener("click", () => {
    hambug.classList.toggle('active');
    navMenu.classList.toggle('active');
} )