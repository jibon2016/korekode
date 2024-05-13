import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            backgroundImage: {
                'header-bg' : ["url('/public/images/header_bg.jpg')"],
                'footer-bg': ['linear-gradient(to right, #8B2BE2, #4E02E0)'],
                'service-header-bg': ['linear-gradient(to right, #3a7bd5, #3a6073)'],
                'service-bg': ['linear-gradient(to right, #4b79a1, #283e51);'],
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
