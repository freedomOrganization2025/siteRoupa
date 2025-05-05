let currentIndex = 0;
const container = document.querySelector('.produtos-container');
const produtos = document.querySelectorAll('.produto');

console.log(produtos.length);

document.querySelector('.prev').addEventListener('click', () => {
  if (currentIndex >= 0) {
    currentIndex--;
    updateCarousel();
    console.log(currentIndex);
  }
});

document.querySelector('.next').addEventListener('click', () => {
  if (currentIndex < produtos.length - 1) {
    currentIndex++;
    updateCarousel();
    console.log(currentIndex);
  }
});

function updateCarousel() {
  const itemWidth = produtos[0].offsetWidth + 20;
  container.style.transform = `translateX(-${currentIndex * 220}px)`;
}
