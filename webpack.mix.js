let mix = require('laravel-mix');

// Script and styles

mix.js('resources/assets/scripts/witdigital-landing-pages-scripts.js', 'dist/js/witdigital-landing-pages-scripts.js');

mix.sass('resources/assets/styles/witdigital-landing-pages-styles.scss', 'dist/css/witdigital-landing-pages-styles.css')

mix.options({
    processCssUrls: false,
    postCss: [require('tailwindcss')('./tailwind.config.js')],
});
