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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                audiowide: ["Audiowide", "cursive"],
                charm: ["Charm", "cursive"],
                oxygen: ["Oxygen", "sans-serif"],
                ubuntu: ["Ubuntu", "sans-serif"],
            },
        },
    },
    safelist: [
        'bg-red-500',
        'bg-green-500'
      ],

    plugins: [forms],
};
