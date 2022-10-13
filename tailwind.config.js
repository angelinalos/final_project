/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors:{
            laravel: "#174978",
            custom: '#F9F8F6'
        }

    },
  },
  plugins: [],
}
