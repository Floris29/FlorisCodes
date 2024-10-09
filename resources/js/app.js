import '../css/app.css'; 

document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
    }, 1000);
    const me = document.querySelector('#me');
    me.scrollIntoView({
        behavior: 'smooth',
        block: 'center',
    }); 
});
