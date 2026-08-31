# Tailwind v4 WordPress Theme

This is a custom WordPress theme that uses **Tailwind CSS v4** with **Vite** for fast development and optimized builds.

---

## 🚀 Features

- **Tailwind CSS v4** with modern `@theme` configuration
- **Vite** for lightning-fast development server with Hot Module Replacement (HMR)
- **Live reload** for PHP files during development
- **Automatic environment detection** (development vs production)
- **Optimized builds** with asset versioning and manifest generation
- **WordPress integration** with proper asset enqueuing

---

## 🛠️ Requirements

- **Node.js 18+** (Tailwind v4 and Vite require Node 18 or newer)
- WordPress running locally
- **@tailwindcss/vite** plugin for Tailwind v4 integration

---

## ⚡ Setup

1. **Install dependencies**

   ```bash
   npm install
   ```

2. **Verify Node.js version**

   ```bash
   node -v
   ```

   Must be ≥ 18. If not, upgrade from [nodejs.org](https://nodejs.org/).

---

## 🏃 Usage

### ✅ Development Mode (Vite Dev Server + Hot Reload)

```bash
npm run dev
```

**What this does:**
- Starts Vite development server on **http://localhost:3000**
- Enables Hot Module Replacement (HMR) for instant CSS updates
- Watches PHP files for changes and triggers page reload
- Serves assets directly from the dev server
- Automatically detects localhost environment

**How to use:**
- Keep your WordPress site running on `localhost/your-project`
- The theme automatically loads assets from the Vite dev server
- Make changes to CSS/JS and see them instantly without page refresh

---

### ✅ Production Build

Generates optimized, minified assets for production:

```bash
npm run build
```

**What this creates:**
- **`assets/css/style.css`** - Optimized Tailwind CSS
- **`assets/js/main.js`** - Minified JavaScript
- **`assets/.vite/manifest.json`** - Asset manifest for WordPress integration

---

## 🌐 Environment Detection

The theme automatically detects your environment:

**Development Environment** (automatically detected):
- `localhost` (any path)
- `127.0.0.1`
- `*.test` domains
- `*.local` domains
- `*.dev` domains

**Production Environment:**
- Any other domain (like `yoursite.com`)

**No configuration needed!** The theme switches between development and production modes automatically.

---

## 📦 WordPress Integration

### Development Mode
When on localhost, the theme loads assets from Vite dev server:
```php
// Assets loaded from http://localhost:3000/
wp_enqueue_script('vite-client', 'http://localhost:3000/@vite/client');
wp_enqueue_script('tailwind-main', 'http://localhost:3000/src/main.js');
```

### Production Mode
When on production domain, loads from built assets:
```php
// Assets loaded from /assets/ folder
wp_enqueue_style('tailwind-style', '/assets/css/style.css');
wp_enqueue_script('tailwind-main', '/assets/js/main.js');
```

---

## 🎨 Tailwind Configuration

Tailwind v4 uses the new `@theme` directive in your CSS file (`src/input.css`):

```css
@import "tailwindcss";

@theme {
  --color-maroon: #A51F53;
  --color-navy-blue: #0183D5;
  --font-plus: "Plus Jakarta Sans", sans-serif;
}
```

**No `tailwind.config.js` needed!** All configuration is done in CSS.

---

## 📝 NPM Scripts

- **`npm run dev`** → Start Vite development server with hot reload
- **`npm run build`** → Build optimized assets for production
- **`npm run preview`** → Preview production build locally

---

## 🔧 File Structure

```
your-theme/
├── src/
│   ├── main.js          # JavaScript entry point
│   └── input.css        # Tailwind CSS with @theme config
├── assets/              # Built assets (generated)
│   ├── css/style.css
│   ├── js/main.js
│   └── .vite/manifest.json
├── vite.config.js       # Vite configuration
├── package.json         # Dependencies and scripts
└── functions.php        # WordPress theme functions
```

---

## ❓ Troubleshooting

### **Vite not starting?**
- Make sure Node.js ≥ 18: `node -v`
- Install dependencies: `npm install`
- Check if port 3000 is available

### **Assets not loading in development?**
If CSS, JS, or images return 404 errors despite existing in file manager, check file permissions:
Theme folder: `755` (with "Recurse into subdirectories" checked)
All files: `644`

Navigate to public_html/wp-content/themes/[theme-name]/ in cPanel, right-click → Permissions, and apply the correct values. This commonly happens after GitHub deployments due to restrictive default permissions.

### **Tailwind classes not working?**
- Run `npm run build` before deploying to production
- Check that `assets/css/style.css` exists after build
- Verify your CSS file imports Tailwind: `@import "tailwindcss";`

### **VS Code IntelliSense not working?**
- Install "Tailwind CSS IntelliSense" extension
- Create `.vscode/settings.json` in theme root:
```json
{
  "tailwindCSS.includeLanguages": {
    "php": "html"
  }
}
```

---

## 🚀 Deployment Workflow

### For Development:
1. `npm run dev` - Start developing
2. Make changes - See them instantly

### For Production:
1. `npm run build` - Build optimized assets
2. Upload theme files + `assets/` folder to server
3. **Don't upload** `node_modules/` or `src/` folder

---

## 🔄 Returning After a Long Time

1. Open terminal in your theme folder
2. Run `npm install` (to restore dependencies)
3. Start development:
   ```bash
   npm run dev
   ```
4. If errors appear, upgrade Node.js and reinstall dependencies

---

## 📋 Quick Start Checklist

- ✅ Node.js 18+ installed
- ✅ Run `npm install`
- ✅ Start development: `npm run dev`
- ✅ Visit your WordPress site on localhost
- ✅ Make CSS changes and see instant updates
- ✅ Build for production: `npm run build`
