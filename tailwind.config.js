import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    daisyui: {
        themes: [{
                mytheme: {
                    "primary": "#219C90",
                    "secondary": "#FF204E",
                    "accent": "#FFC700",
                    "neutral": "#191717",
                    "base-100": "#EEEEEE",
                },
            },
        ],
    },

    theme: {
        extend: {
            fontFamily: {
                lora: ['Lora'],
            },
        },
    },

    plugins: [forms, require("daisyui")],
};
