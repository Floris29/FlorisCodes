import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import "../css/app.css";

document.addEventListener("DOMContentLoaded", () => {
    setTimeout(() => {
        const me = document.querySelector("#me");
        if (window.scrollY === 0) {
            me.scrollIntoView({
                behavior: "smooth",
                block: "start",
            });
        }
    }, 2000);
});

document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("myHeader");
    setTimeout(() => {
        header.style.display = "block";
    }, 2000);
});

document.addEventListener("DOMContentLoaded", () => {
    const currentYear = new Date().getFullYear();
    document.getElementById("spanYear").textContent = currentYear;
});
