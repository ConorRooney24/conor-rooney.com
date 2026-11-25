const notification = document.getElementById('cmp-notification');
const closeButton = notification?.querySelector('svg');

closeButton?.addEventListener('click', () => {
    notification.classList.add('cmp-notification--closing');
    setTimeout(() => notification.remove(), 100);
});
