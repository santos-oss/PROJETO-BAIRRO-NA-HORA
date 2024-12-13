var MenuItem = document.querySelectorAll('.item-menu');

console.log(Data.Tipo);

function selectlink() {
  MenuItem.forEach((item) =>
    item.classList.remove('ativo')
  );

  this.classList.add('ativo');
}

MenuItem.forEach((item) =>
  item.addEventListener('click', selectlink)
);

var botaoexp = document.querySelector('#botao-exp');
var menubb = document.querySelector('.menu-lateral');

botaoexp.addEventListener('click', function () {
  menubb.classList.toggle('expandir');
});