# Production Website

A well-structured, production-ready website built with HTML, CSS, JavaScript, and PHP, featuring a comprehensive branding and design system.

## 🎨 Features

- **Comprehensive Design System** - Colors, typography, spacing, and design tokens
- **Reusable Components** - Buttons, cards, forms, modals, alerts, badges, tables, and more
- **Responsive Design** - Mobile-first approach that works on all devices
- **Accessibility** - Built with WCAG guidelines in mind
- **Well Organized** - Clear directory structure with separated concerns
- **PHP Templating** - Reusable header, footer, and navigation components
- **Form Validation** - Client-side JavaScript validation
- **Utility Classes** - Rapid UI development with utility-first CSS
- **Modern CSS** - CSS custom properties for easy theming
- **Vanilla JavaScript** - No dependencies, pure JavaScript utilities

## 📁 Project Structure

```
Production/
├── assets/
│   ├── css/
│   │   ├── variables.css      # Design tokens (colors, fonts, spacing)
│   │   ├── reset.css          # CSS reset/normalize
│   │   ├── utilities.css      # Utility classes
│   │   ├── components.css     # Component styles
│   │   └── main.css           # Main stylesheet (imports all others)
│   ├── js/
│   │   ├── utils.js           # JavaScript utilities
│   │   ├── modal.js           # Modal component
│   │   └── form-validation.js # Form validation
│   ├── fonts/                 # Custom fonts
│   ├── images/                # Images and graphics
│   └── icons/                 # Icons
├── config/
│   └── config.php             # Site configuration and helper functions
├── includes/
│   ├── header.php             # Common header template
│   └── footer.php             # Common footer template
├── pages/
│   ├── about.php              # About page
│   ├── components.php         # Component showcase
│   └── contact.php            # Contact page with form
├── docs/
│   └── design-system.md       # Design system documentation
├── index.php                  # Homepage
└── README.md                  # This file
```

## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)

### Installation

1. Clone the repository:
```bash
git clone https://github.com/FutureAIGuide/Production.git
cd Production
```

2. Start a local server:
```bash
# Using PHP built-in server
php -S localhost:8000

# Or using XAMPP/WAMP/MAMP
# Place the folder in your htdocs/www directory
```

3. Open your browser and navigate to:
```
http://localhost:8000
```

## 🎨 Design System

### Color Palette

- **Primary**: #2563eb (Blue)
- **Secondary**: #7c3aed (Purple)
- **Success**: #10b981 (Green)
- **Warning**: #f59e0b (Amber)
- **Error**: #ef4444 (Red)
- **Neutral Grays**: From #f9fafb to #111827

### Typography

- **Primary Font**: Inter
- **Heading Font**: Poppins
- **Monospace Font**: Fira Code
- **Font Sizes**: 0.75rem to 3.75rem (12px to 60px)
- **Font Weights**: 300 to 800

### Spacing Scale

Based on a 4px (0.25rem) unit:
- 0, 4px, 8px, 12px, 16px, 20px, 24px, 32px, 40px, 48px, 64px, 80px, 96px, 128px

### Design Tokens

All design tokens are defined as CSS custom properties in `assets/css/variables.css`:

```css
:root {
  --color-primary: #2563eb;
  --font-size-lg: 1.125rem;
  --spacing-4: 1rem;
  --radius-md: 0.375rem;
  --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}
```

See [docs/design-system.md](docs/design-system.md) for complete documentation.

## 🧩 Components

### Available Components

- **Buttons** - Multiple variants (primary, secondary, outline, ghost) and sizes
- **Cards** - Flexible card component with header, body, and footer
- **Forms** - Form controls with validation
- **Alerts** - Success, warning, error, and info alerts
- **Badges** - Status indicators
- **Tables** - Data tables with hover states
- **Modals** - Dialog boxes with backdrop
- **Navigation** - Navbar and nav links

### Usage Example

```html
<button class="btn btn-primary btn-lg">
  Click Me
</button>

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Card Title</h3>
  </div>
  <div class="card-body">
    <p>Card content goes here.</p>
  </div>
</div>
```

## 🛠️ Customization

### Changing Colors

Edit `assets/css/variables.css`:

```css
:root {
  --color-primary: #your-color;
  --color-secondary: #your-color;
}
```

### Adding Custom Styles

Add your custom CSS to `assets/css/main.css` at the end:

```css
/* Custom Styles */
.my-custom-class {
  /* Your styles */
}
```

### Site Configuration

Edit `config/config.php` to update site information:

```php
define('SITE_NAME', 'Your Site Name');
define('SITE_DESCRIPTION', 'Your description');
define('SITE_URL', 'https://yoursite.com');
define('SITE_EMAIL', 'your@email.com');
```

## 📖 Documentation

- [Design System Documentation](docs/design-system.md) - Complete guide to colors, typography, spacing, and tokens
- Component examples are available at `/pages/components.php`

## 🧪 JavaScript Utilities

The project includes several JavaScript utilities:

- **Utils.js** - Helper functions (debounce, throttle, DOM manipulation, etc.)
- **Modal.js** - Modal dialog functionality
- **FormValidator.js** - Client-side form validation

### Example Usage

```javascript
// Using utilities
const element = Utils.$('#myElement');
Utils.addClass(element, 'active');

// Using modal
const modal = new Modal('myModal');
modal.open();

// Using form validation
const validator = new FormValidator('myForm', {
  onSubmit: (data) => {
    console.log('Form data:', data);
  }
});
```

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## 📝 License

This project is open source and available for use in your projects.

## 🤝 Contributing

Contributions are welcome! Feel free to submit issues or pull requests.

## 📧 Contact

For questions or support, please visit the [Contact Page](/pages/contact.php).

---

**Note**: This is a template project. Customize it according to your needs and requirements.