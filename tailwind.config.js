import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        'node_modules/flowbite-react/lib/esm/**/*.js',
        './resources/js/**/*.jsx',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("flowbite/plugin")({
            charts: true,
        }),
    ],
    theme: {
        extend: {
            fontSize: {
                xxxs: "0.4rem",
                xxs: "0.6rem",
                xs: "0.8rem",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                body: [
                    "Inter",
                    "ui-sans-serif",
                    "system-ui",
                    "-apple-system",
                    "system-ui",
                    "Segoe UI",
                    "Roboto",
                    "Helvetica Neue",
                    "Arial",
                    "Noto Sans",
                    "sans-serif",
                    "Apple Color Emoji",
                    "Segoe UI Emoji",
                    "Segoe UI Symbol",
                    "Noto Color Emoji",
                ],
            },
            colors: {
                primary: {
                    50: "#eff6ff",
                    100: "#dbeafe",
                    200: "#bfdbfe",
                    300: "#93c5fd",
                    400: "#60a5fa",
                    500: "#3b82f6",
                    600: "#2563eb",
                    700: "#1d4ed8",
                    800: "#1e40af",
                    900: "#1e3a8a",
                    950: "#172554",
                },
                brand: {
                    100: "#e8fbf4",
                    200: "#DCEDE7",
                    400: "#4ea685",
                },
                error: {
                    50: "#FFE5E6",
                    100: "#FFCCCC",
                    200: "#FF9999",
                    300: "#FF6666",
                    400: "F53D3D",
                    500: "#E51A1A",
                    600: "#C20A0A",
                    700: "#990000",
                    800: "#660000",
                    900: "#4C0000",
                },
            },
        },
        screens: {
            xxs: "375px",
            xs: "475px",
            sm: "640px",
            md: "768px",
            lg: "992px",
            xl: "1280px",
            xxl: "1500px",
            xxxl: '1850px',
        },
    },
};
