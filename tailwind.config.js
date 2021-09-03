module.exports = {
  purge: [
    './resources/**/*.php',
    './app/acf-blocks/**/*.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      maxWidth: {
        '400': '400px',
        '500': '500px',
      }
    },               
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
