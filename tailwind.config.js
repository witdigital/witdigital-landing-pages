module.exports = {
  purge: [
    './resources/**/*.php',
    './app/acf-blocks/**/*.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    screens: {
      'tablet': '640px',
      'laptop': '1024px',
      'desktop': '1280px',
    },
    extend: {
      maxWidth: {
        '400': '400px',
        '450': '450px',
        '500': '500px',
        '550': '550px',
        '600': '600px',
        '650': '650px',
        '900': '900px',
        '1000': '1000px',
        '1150': '1150px',
        '1300': '1300px',
        '1440': '1440px',
      }
    },               
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
