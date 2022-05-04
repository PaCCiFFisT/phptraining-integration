console.log('Hello World!');
//javascript redirect to cart after click on button
const buyBtn = document.querySelectorAll('.catalog__item--btn');
buyBtn.forEach(btn => {
    btn.addEventListener('click', () => {
        location.href = 'cart.php';
    });
});
