import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/react/pages/TestPage.jsx'
            ],
            refresh: true,
        }),
        react(),
    ],
    build: {
        // Ensure the manifest is generated
        manifest: true,
        outDir: 'public/build',
    }
}); 