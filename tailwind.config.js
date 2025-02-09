import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                audiowide: ["Audiowide", "cursive"],
                charm: ["Charm", "cursive"],
                oxygen: ["Oxygen", "sans-serif"],
                robotoMono: ["Roboto Mono", "monospace"],
                ubuntu: ["Ubuntu", "sans-serif"],
            },
        },
    },
    plugins: [],
};
