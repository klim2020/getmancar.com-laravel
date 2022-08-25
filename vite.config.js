import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import {viteStaticCopy} from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,

        }),
       viteStaticCopy({
            targets: [
                {
                    src: 'resources/fonts/**',
                    dest: '../fonts'
                },
                {
                    src: 'resources/vendor/**',
                    dest: '../vendor'
                },
                {
                    src: 'resources/images/**',
                    dest: '../images'
                }
            ]
        }),
    ],
});
