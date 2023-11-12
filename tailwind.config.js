import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: ['class', '[app-theme=dark]'],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '0.7/10': '7%',
                '0.8/10': '8%',
                '1/10': '10%',
                '1.2/10': '12%',
                '1.55/10': '15.5%',
                '8.45/10': '84.5%',
                '9.2/10': '92%',
                '9.7/10': '97%',
                '9/10': '90%',
                
            },
        },
    },

    plugins: [forms],
};
