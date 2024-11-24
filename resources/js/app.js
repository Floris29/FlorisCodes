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
    }, 1200);
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

document.addEventListener("DOMContentLoaded", () => {
    const tools = document.getElementById("tools-list");
    const toolsbtn = document.getElementById("tools");
    const skills = document.getElementById("skills-list");
    const skillsbtn = document.getElementById("skills");

    skills.style.display = "flex";
    tools.style.display = "none";
    skillsbtn.style.backgroundColor = "#415A77";
    toolsbtn.style.backgroundColor = "";

    skillsbtn.addEventListener("click", () => {
        skills.style.display = "flex";
        tools.style.display = "none";
        skillsbtn.style.backgroundColor = "#415A77";
        toolsbtn.style.backgroundColor = "";
    });

    toolsbtn.addEventListener("click", () => {
        tools.style.display = "flex";
        skills.style.display = "none";
        toolsbtn.style.backgroundColor = "#415A77";
        skillsbtn.style.backgroundColor = "";
    });
});
