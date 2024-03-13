const chk = document.getElementById('chk')
const ctk = document.getElementById('ctk')
const carts = document.querySelectorAll(".card")
function clicar(){
    document.body.style.backgroundColor = "black"
    document.body.style.color = "white"
   
    carts.forEach( function (card) {
        card.style.color = 'white';
        card.style.backgroundColor = 'black';
    });

}

function clicou(){
    document.body.style.backgroundColor = "white"
    carts.forEach(function (card) {
        card.style.color = 'black';
        card.style.backgroundColor = 'white';
    });

}