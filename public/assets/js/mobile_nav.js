const menu = document.getElementById('cmp-mobile-nav--menu');
const button = document.getElementById('cmp-mobile-nav--button');

button.addEventListener('click', () => {
    const is_open = menu.classList.toggle('open');
    document.body.style.overflow = is_open ? 'hidden' : '';
});

menu.addEventListener('click', (event) => {
    if (event.target === menu) {
        closeMenu();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeMenu();
    }
});

function closeMenu() {
    menu.classList.remove('open');
    document.body.style.overflow = '';
}
