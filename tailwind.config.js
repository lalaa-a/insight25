import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import tailwindcssPrimeUI from "tailwindcss-primeui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],
    safelist: ["p-0"],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, tailwindcssPrimeUI],

    darkMode: "selector",
};
