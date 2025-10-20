# Project Structure Documentation

## Overview
This document provides a detailed overview of the Production website project structure, organization, and file purposes.

## Directory Structure

```
Production/
├── assets/                 # Static assets (CSS, JS, fonts, images, icons)
│   ├── css/               # Stylesheet files
│   │   ├── variables.css  # Design system tokens (colors, fonts, spacing)
│   │   ├── reset.css      # CSS reset/normalize for cross-browser consistency
│   │   ├── utilities.css  # Utility classes for rapid development
│   │   ├── components.css # Component-specific styles
│   │   └── main.css       # Main stylesheet that imports all others
│   ├── js/                # JavaScript files
│   │   ├── utils.js       # Utility functions (debounce, DOM helpers, etc.)
│   │   ├── modal.js       # Modal dialog functionality
│   │   └── form-validation.js # Form validation utilities
│   ├── fonts/             # Custom web fonts (if any)
│   ├── images/            # Image assets
│   └── icons/             # Icon assets
├── config/                # Configuration files
│   └── config.php         # Site-wide configuration and helper functions
├── includes/              # Reusable PHP templates
│   ├── header.php         # Common header template
│   └── footer.php         # Common footer template
├── pages/                 # Individual page files
│   ├── about.php          # About page
│   ├── components.php     # Component showcase page
│   └── contact.php        # Contact page with form
├── docs/                  # Documentation
│   └── design-system.md   # Complete design system documentation
├── index.php              # Homepage
├── README.md              # Project README
└── .gitignore             # Git ignore file

```

## File Purposes

### CSS Files

#### `assets/css/variables.css`
Contains all design tokens as CSS custom properties:
- Color palette (primary, secondary, semantic, neutrals)
- Typography tokens (font families, sizes, weights, line heights)
- Spacing scale (0 to 128px)
- Border radius values
- Shadow definitions
- Transition timings
- Z-index scale
- Breakpoint values

#### `assets/css/reset.css`
Modern CSS reset that:
- Normalizes styles across browsers
- Sets sensible defaults for HTML elements
- Includes accessibility features
- Defines base typography styles

#### `assets/css/utilities.css`
Utility-first CSS classes for:
- Display properties (flex, grid, block, etc.)
- Flexbox utilities (alignment, justification, gap)
- Spacing (margin, padding)
- Typography (sizes, weights, alignment)
- Colors (text and background)
- Borders and border radius
- Shadows
- Container layouts
- Position utilities
- Transitions

#### `assets/css/components.css`
Pre-built component styles:
- Buttons (variants and sizes)
- Cards (with header, body, footer)
- Forms (inputs, labels, validation states)
- Navigation (navbar, nav links)
- Alerts (success, warning, error, info)
- Badges (status indicators)
- Tables (data tables)
- Modals (dialog boxes)

#### `assets/css/main.css`
Main stylesheet that imports all CSS files in the correct order.

### JavaScript Files

#### `assets/js/utils.js`
Utility functions including:
- `debounce()` - Rate limiting for function calls
- `throttle()` - Throttle function execution
- DOM manipulation helpers
- Event delegation
- Element creation
- Smooth scrolling
- Cookie management
- Date formatting
- ID generation

#### `assets/js/modal.js`
Modal component with:
- Open/close functionality
- Backdrop management
- Keyboard support (ESC to close)
- Auto-initialization via data attributes
- Event handling

#### `assets/js/form-validation.js`
Form validation utilities:
- Real-time validation
- Multiple validation types (email, URL, pattern, etc.)
- Custom validators
- Error display
- Form data extraction
- Reset functionality

### PHP Files

#### `config/config.php`
Site configuration including:
- Site constants (name, description, URL, email)
- Path definitions
- Database configuration (if needed)
- Helper functions (`esc()`, `asset()`, `is_active()`, etc.)
- Session management

#### `includes/header.php`
Reusable header template with:
- HTML head with meta tags
- Stylesheet imports
- Navigation menu
- Site branding

#### `includes/footer.php`
Reusable footer template with:
- Footer content (company info, links)
- Copyright notice
- JavaScript imports
- Closing HTML tags

#### `index.php`
Homepage featuring:
- Hero section
- Key features grid
- Design system preview
- Color palette showcase
- Typography examples
- Button examples
- Call-to-action section

#### `pages/about.php`
About page with:
- Mission statement
- Features overview
- Technology stack
- Design system overview

#### `pages/components.php`
Component showcase page demonstrating:
- All button variants and sizes
- Card components
- Form elements with validation
- Alert messages
- Badges
- Tables
- Modal dialogs
- Utility class examples

#### `pages/contact.php`
Contact page featuring:
- Contact information
- Working contact form with PHP processing
- Form validation
- FAQ section

## Design System

### Color System
- **Primary**: Blue (#2563eb) - Main brand color
- **Secondary**: Purple (#7c3aed) - Supporting brand color
- **Semantic**: Success (green), Warning (amber), Error (red), Info (blue)
- **Neutrals**: 10 shades of gray from lightest to darkest

### Typography
- **Primary Font**: Inter - Body text
- **Heading Font**: Poppins - Headings
- **Monospace**: Fira Code - Code blocks
- **Scale**: 10 font sizes from 0.75rem to 3.75rem
- **Weights**: 6 weights from light (300) to extrabold (800)

### Spacing
- **Base Unit**: 4px (0.25rem)
- **Scale**: 0, 4, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80, 96, 128px
- Applied consistently across margin, padding, gap

### Components
All components follow the design system tokens and are:
- Fully responsive
- Accessible
- Themeable via CSS variables
- Documented with examples

## Best Practices

### CSS
- Use CSS custom properties for all design tokens
- Follow mobile-first responsive design
- Keep specificity low
- Use utility classes for rapid development
- Component classes for complex patterns

### JavaScript
- Vanilla JS, no dependencies
- ES6+ syntax
- Modular code organization
- Event delegation for performance
- Accessibility considerations (keyboard support, ARIA)

### PHP
- Separate configuration from templates
- Use helper functions for common tasks
- Escape all output for security
- Follow consistent naming conventions
- Keep templates simple and focused

### File Organization
- Group related files together
- Clear separation of concerns
- Logical directory structure
- Consistent naming conventions
- Comprehensive documentation

## Usage

### Adding New Pages
1. Create PHP file in root or `pages/` directory
2. Include `config/config.php`
3. Set page-specific variables (`$page_title`, `$page_description`)
4. Include `header.php`
5. Add page content
6. Include `footer.php`

### Creating Custom Components
1. Add component styles to `assets/css/components.css`
2. Use design tokens from `variables.css`
3. Add JavaScript if needed in `assets/js/`
4. Document in `pages/components.php`

### Customizing Design System
1. Edit `assets/css/variables.css`
2. Update color, font, spacing, or other tokens
3. Changes apply site-wide automatically

## Maintenance

### Regular Updates
- Keep documentation current
- Update design system as needed
- Test across browsers
- Optimize performance
- Ensure accessibility compliance

### Code Quality
- Validate HTML, CSS, JavaScript, PHP
- Follow consistent code style
- Comment complex logic
- Keep functions small and focused
- Use version control effectively
