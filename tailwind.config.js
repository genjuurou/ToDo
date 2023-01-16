/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'permanent-marker': ['Permanent Marker', 'cursive']
      }
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
