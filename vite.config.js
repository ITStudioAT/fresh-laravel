import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import vuetify from 'vite-plugin-vuetify';

export default defineConfig({
    plugins: [

        laravel([
            'resources/js/apps/homepage.js',
            'resources/js/apps/admin.js',
        ]),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        vuetify({



        }),

    ],

    build: {
        sourcemap: true,
        rollupOptions: {
            output: {
                manualChunks(id) {
                },
            },
        },
        chunkSizeWarningLimit: 500,
    }
});