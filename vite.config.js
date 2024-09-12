import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/dasboard.js', 'resources/js/users.js',
                'resources/js/datatablesTailwind.js', 'resources/js/notify.js'],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['simple-datatables']
    }
});
