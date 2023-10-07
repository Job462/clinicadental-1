import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: 'resources/js/app.js',
=======
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
>>>>>>> c4d06c73b2c7f0b81404c7d292bd697af06e0915
            refresh: true,
        }),
    ],
});
