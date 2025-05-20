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
        chunkSizeWarningLimit: 1280,
        rollupOptions: {
            output: {
                manualChunks: (id) => {
                    if (id.includes('apexcharts')) return 'apexcharts';
                    if (id.includes('suneditor')) return 'suneditor';
                    if (id.includes('@google/model-viewer')) return 'model-viewer';
                    if (id.includes('three')) return 'three';
                    if (id.includes('wasm')) return 'wasm';
                    if (id.includes('shiki')) return 'shiki';
                    if (id.includes('cytoscape')) return 'cytoscape';
                    if (id.includes('chevrotain')) return 'chevrotain';
                    if (id.includes('langium')) return 'langium';
                    if (id.includes('d3')) return 'd3';
                    if (id.includes('mermaid')) return 'mermaid';
                },
            },
        },
    },
    esbuild: {
        supported: {
          'top-level-await': true,
        },
    },
});
