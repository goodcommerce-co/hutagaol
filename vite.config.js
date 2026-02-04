import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
    plugins: [
        jigsaw({
            input: ['source/_assets/css/main.css', 'source/_assets/css/vendor.css'],
            refresh: true,
        }),
    ],
});
