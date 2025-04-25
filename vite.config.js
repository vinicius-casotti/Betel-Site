import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                'resources/scss/icons.scss',
                'resources/scss/style.scss',

                'node_modules/swiper/swiper-bundle.min.css',
                'node_modules/jarallax/dist/jarallax.min.css',

                //js
                'resources/js/swiper.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
