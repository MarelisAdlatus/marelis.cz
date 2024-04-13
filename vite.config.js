import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { visualizer } from 'rollup-plugin-visualizer';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        visualizer(),
    ],
    build: {
        chunkSizeWarningLimit: 1024,
        rollupOptions: {
            output: {
                manualChunks: (id) => {
                    if (id.includes('apexcharts')) return 'apexcharts';
                    if (id.includes('@google/model-viewer')) return 'model-viewer';
                    if (id.includes('three')) return 'three';
                },
            },
        },
    },
});
