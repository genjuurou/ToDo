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
  safelist: [
    'border-rose-500',
    'border-yellow-500',
    'border-green-500',
    'bg-rose-500',
    'bg-yellow-500',
    'bg-green-500',
    'text-rose-500',
    'text-yellow-500',
    'text-green-500',
  ]
}
