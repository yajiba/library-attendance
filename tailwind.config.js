import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

    theme: {
        extend: {
            colors: {
                deepBlue: '#003DA5', /*can be used for headers, footers, and primary buttons.*/
                lightBlue: '#E6F3FF', /*works well for backgrounds and accent elements.*/
                yellow: '#F9D74B', /*can highlight important features or alerts.*/
                darkYellow: '#F8B733',
                darkGray: '#333333', /*Dark Gray is suitable for text, while Light Gray can be used for backgrounds and borders. */
                lightGray: '#F7F7F7',
                borderColor:'#e5e7eb'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
