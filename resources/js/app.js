import '../css/app.css'; 

document.addEventListener('DOMContentLoaded', () => {
    const me = document.querySelector('#me');
    me.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
    });
});
