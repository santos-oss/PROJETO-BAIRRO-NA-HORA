let index = 0;

function moveSlide(step) {
    const slides = document.querySelectorAll(".carousel-images img");
    index += step;

    if (index < 0) {
        index = slides.length - 1;
    } else if (index >= slides.length) {
        index = 0;
    }

    const offset = -index * 100;
    document.querySelector(".carousel-images").style.transform = `translateX(${offset}%)`;
}


document.querySelectorAll('.carousel-images img').forEach((image) => {
    image.addEventListener('click', function() {
        const link = this.getAttribute('data-link');
        if (link) {
            window.open(link, '_blank');  
        }
    });
});


setInterval(() => moveSlide(1), 3000);  

var menuItem = document.querySelectorAll('.item-menu')
function selectlink() {
  menuItem.forEach((item) =>
    item.classList.remove('ativo')
  )
  this.classList.add('ativo')
}

menuItem.forEach((item) =>
  item.addEventListener('click', selectlink)
)

var botaoexp = document.querySelector('#botao-exp')
var menubb = document.querySelector('.menu-lateral')

botaoexp.addEventListener('click', function () {
  menubb.classList.toggle('expandir')
})
document.querySelectorAll('.anuncios').forEach(item => {
  item.addEventListener('click', () => {
      const url = item.getAttribute('data-url');
      if (url) {
          window.location.href = url;
      }
  });
});

