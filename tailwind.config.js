module.exports = {
  purge: [
    './resources/**/*.php',
    './app/acf-blocks/**/*.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors: {
      black: '#000',
      white: '#fff',
      blue: '#00295d',
      darkblue: '#00295d',
      lightblue: '#00aeef',
      green: '#20d59e',
      grey: '#ededed',
      smoke: '#f8f8f8',
      none: 'transparent',
  },
    fontSize: {
      '20': '20px',
      '26': '26px',
      '30': '30px',
      '32': '32px',
      '34': '34px',
      '42': '42px',
      '52': '52px',
    },
    screens: {
      'tablet': '640px',
      'laptop': '1024px',
      'desktop': '1280px',
    },
    container: {
      center: true,
      padding: {
        default: '15px',
      },
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
