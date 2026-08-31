import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
  plugins: [
    liveReload(["**/*.php"]), // Live reload for PHP files
    tailwindcss(),
  ],

  publicDir: false,

  optimizeDeps: {
    include: [],
  },

  build: {
    outDir: "dist",
    emptyOutDir: true,
    rollupOptions: {
      input: {
        style: "assets/input.css",
      },
      output: {
        assetFileNames: "output.css",
      },
    },
  },

  server: {
    port: 3000,
    strictPort: true,
    host: "localhost",
    cors: {
      origin: "*", // Allow any localhost subdirectory
      credentials: true,
    },
    hmr: {
      host: "localhost",
      port: 3000,
      protocol: "ws",
      clientPort: 3000,
    },
    watch: {
      usePolling: true,
      interval: 100,
    },
  },
});