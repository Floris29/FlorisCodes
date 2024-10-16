import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                antonio: [
                    "Antonio-regular",
                    "Antonio-bold",
                    "Antonio-semibold",
                ],
            },
            fontSize: {
                "9xl": "14rem",
                "xl-9xl": "12rem",
                "lg-9xl": "10rem",
                "md-9xl": "9rem",
                "8xl": "8rem",
                "xl-8xl": "7rem",
                "lg-8xl": "5.5rem",
                "7xl": "5rem",
                "6xl": "3.7rem",
                "lg-6xl": "3.4rem",
                "5xl": "3.3rem",
                "4xl": "1.6rem",
                "5xl": "2.2rem",
                xl: "1.5rem",
                lg: "1.3rem",
            },
            colors: {
                "main-bg": "#0D1B2A",
                "primary-bg": "#415a77",
                title: "#415A77",
                subtitle: "#778DA9",
                text: "#E0E1DD",
                icon: "#1B263B",
            },
            screens: {
                xs: "375px",
            },
            extend: {},
        },

        plugins: [forms],
    },
};
