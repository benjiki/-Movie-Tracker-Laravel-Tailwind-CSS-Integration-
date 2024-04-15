/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                bebas: ["Bebas Neue", "sans-serif"],
                ubuntu: ["Ubuntu", "sans-serif"],
            },
        },
    },
    plugins: [
        require("flowbite/plugin"),
        require("tailwind-scrollbar"),
        require("tailwind-scrollbar-hide"),
    ],
};
