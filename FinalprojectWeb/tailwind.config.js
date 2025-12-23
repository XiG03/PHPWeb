/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'wandering-rose': {
          'brown': '#8C6A4F',
          'brown-dark': '#7A5A3F',
          'brown-light': '#9E8877',
          'beige': '#FAF6F0',
          'text-dark': '#5D5757',
          'dark': '#1a1a1a',
        },
      },
      fontFamily: {
        'serif': ['Playfair Display', 'serif'],
        'sans': ['UTM Avo', 'Arial', 'sans-serif'],
        'script': ['Allura', 'Pinyon Script', 'cursive'],
      },
    },
  },
  plugins: [],
}


