import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
import sass from 'sass';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/sass/app.scss',
            ],
            refresh: true,
        }),
       
       // react(),
       // {
            // Configure Sass
          //  configureSass: () => {
          //    return sass({
                // Specify the directory where your Sass files are located
           //     root: 'resources/sass',})
           //   }
          //  }
    ],
});
