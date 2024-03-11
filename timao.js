const chk = document.getElementById('chk')
var corDestaque = getComputedStyle(document.documentElement).getPropertyValue('--cor-destaque');
const ctk = document.getElementById('ctk')
chk.addEventListener('click',clicar)
function clicar(){
    document.body.style.backgroundColor = "black"
}
ctk.addEventListener('click',clicou)
function clicou(){
    document.body.style.backgroundColor = "white"
}