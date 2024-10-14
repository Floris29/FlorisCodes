import '../css/app.css'; 

document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        const me = document.querySelector('#me');
        me.scrollIntoView({
            behavior: 'smooth',
            block: 'center',
        });
    }, 2000); 
});
