/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    // "./resources/views/**/*/*.{blade.php,vue,js}",
    // "./node_modules/flowbite/**/*.js"

    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

