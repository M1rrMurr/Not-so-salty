import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                roboto: ["Roboto", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#55AD9B",
                secondary: "#95D2B3",
                muted: "#D8EFD3",
                muted_light: "#F1F8E8",
            },
            translate: {
                "1x": "100%",
                "2x": "200%",
            },
        },
    },
    plugins: [],
};
