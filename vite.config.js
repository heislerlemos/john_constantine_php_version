import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                    'resources/css/index.css',
                    'resources/css/layout.css',
                    'resources/css/show.css',
                    'resources/js/show.js',
                    'resources/js/app.js',
                    'resources/js/index.js',
                    'resources/js/layout.js',
                   ],
            refresh: true,
        }),
    ],
});
