/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors:{
            gray: colors.slate,
            green: colors.emerald,
            purple: colors.violet,
            yellow: colors.amber,
            pink: colors.fuchsia,
        },
    },
    plugins: [],
}

