import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css',
                'resources/css/index-style.css',
                'resources/css/profile-style.css',
                'resources/css/dashboard-style.css',
                'resources/css/faq-style.css',
                'resources/css/blog-style.css',
                'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
