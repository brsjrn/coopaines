/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./src/Form/*.php",
    "./src/Twig/Components/*.php"
  ],
  theme: {
    extend: {
      colors: {
        bluesky: {
          50: '#f5f7fa',
          100: '#eaeff4',
          200: '#d0dce7',
          300: '#a6bed3',
          400: '#779cb9',
          500: '#5580a2',
          600: '#426687',
          700: '#37536d',
          800: '#30475c',
          900: '#2c3e4e',
          950: '#161e27',
        },
      },
    },
  },
  plugins: [
    require('daisyui'),
  ],
}
