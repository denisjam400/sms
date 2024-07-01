import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/views/*.blade.php",
    ],

    theme: {
        screens: {
            xs: "365px",
            sm: "620px",
            md: "780px",
            lg: "980px",
            xl: "1250px",
            xlg: "1400px",
        },

        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "main-brand-color": "#ffcb67",
                "main-brand-color-hover": "#fab330",
            },
        },
    },

    plugins: [forms, typography],
};
