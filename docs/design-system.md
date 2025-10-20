# Design System Documentation

## Overview
This design system provides a consistent visual language and reusable components for the website.

## Table of Contents
1. [Colors](#colors)
2. [Typography](#typography)
3. [Spacing](#spacing)
4. [Design Tokens](#design-tokens)
5. [Components](#components)

---

## Colors

### Primary Colors
- **Primary**: `#2563eb` - Main brand color for primary actions and emphasis
- **Primary Light**: `#60a5fa` - Lighter variant for hover states
- **Primary Dark**: `#1e40af` - Darker variant for pressed states

### Secondary Colors
- **Secondary**: `#7c3aed` - Supporting brand color
- **Secondary Light**: `#a78bfa` - Lighter variant
- **Secondary Dark**: `#5b21b6` - Darker variant

### Neutral Colors
- **Gray 50**: `#f9fafb` - Lightest gray for backgrounds
- **Gray 100**: `#f3f4f6` - Light backgrounds
- **Gray 200**: `#e5e7eb` - Borders, dividers
- **Gray 300**: `#d1d5db` - Disabled states
- **Gray 400**: `#9ca3af` - Placeholder text
- **Gray 500**: `#6b7280` - Secondary text
- **Gray 600**: `#4b5563` - Body text
- **Gray 700**: `#374151` - Headings
- **Gray 800**: `#1f2937` - Dark headings
- **Gray 900**: `#111827` - Darkest text

### Semantic Colors
- **Success**: `#10b981` - Success states and messages
- **Warning**: `#f59e0b` - Warning states and messages
- **Error**: `#ef4444` - Error states and messages
- **Info**: `#3b82f6` - Informational messages

### Background Colors
- **White**: `#ffffff` - Primary background
- **Light**: `#f9fafb` - Secondary background
- **Dark**: `#111827` - Dark mode background

---

## Typography

### Font Families
- **Primary Font**: `'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif`
- **Heading Font**: `'Poppins', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif`
- **Monospace Font**: `'Fira Code', 'Courier New', monospace`

### Font Sizes
- **XS**: `0.75rem` (12px)
- **SM**: `0.875rem` (14px)
- **Base**: `1rem` (16px)
- **LG**: `1.125rem` (18px)
- **XL**: `1.25rem` (20px)
- **2XL**: `1.5rem` (24px)
- **3XL**: `1.875rem` (30px)
- **4XL**: `2.25rem` (36px)
- **5XL**: `3rem` (48px)
- **6XL**: `3.75rem` (60px)

### Font Weights
- **Light**: `300`
- **Regular**: `400`
- **Medium**: `500`
- **Semibold**: `600`
- **Bold**: `700`
- **Extrabold**: `800`

### Line Heights
- **Tight**: `1.25`
- **Snug**: `1.375`
- **Normal**: `1.5`
- **Relaxed**: `1.625`
- **Loose**: `2`

---

## Spacing

The spacing system uses a base unit of `0.25rem` (4px) for consistent spacing throughout the application.

### Spacing Scale
- **0**: `0`
- **1**: `0.25rem` (4px)
- **2**: `0.5rem` (8px)
- **3**: `0.75rem` (12px)
- **4**: `1rem` (16px)
- **5**: `1.25rem` (20px)
- **6**: `1.5rem` (24px)
- **8**: `2rem` (32px)
- **10**: `2.5rem` (40px)
- **12**: `3rem` (48px)
- **16**: `4rem` (64px)
- **20**: `5rem` (80px)
- **24**: `6rem` (96px)
- **32**: `8rem` (128px)

---

## Design Tokens

Design tokens are the smallest pieces of the design system. They are stored as CSS custom properties for easy theming and consistency.

### Border Radius
- **None**: `0`
- **SM**: `0.125rem` (2px)
- **Base**: `0.25rem` (4px)
- **MD**: `0.375rem` (6px)
- **LG**: `0.5rem` (8px)
- **XL**: `0.75rem` (12px)
- **2XL**: `1rem` (16px)
- **Full**: `9999px`

### Shadows
- **SM**: `0 1px 2px 0 rgba(0, 0, 0, 0.05)`
- **Base**: `0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)`
- **MD**: `0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)`
- **LG**: `0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)`
- **XL**: `0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)`
- **2XL**: `0 25px 50px -12px rgba(0, 0, 0, 0.25)`

### Transitions
- **Fast**: `150ms`
- **Base**: `300ms`
- **Slow**: `500ms`
- **Ease**: `cubic-bezier(0.4, 0, 0.2, 1)`

---

## Components

Components are built using the design tokens and follow consistent patterns.

### Button Variants
- **Primary**: Uses primary color
- **Secondary**: Uses secondary color
- **Outline**: Border with transparent background
- **Ghost**: Text only, no background

### Card
- Uses shadow-md
- Border radius: base
- Padding: 6

### Form Elements
- Border radius: base
- Border color: gray-300
- Focus color: primary

---

## Usage

### CSS Variables
All design tokens are available as CSS custom properties:

```css
.my-element {
  color: var(--color-primary);
  font-size: var(--font-size-lg);
  padding: var(--spacing-4);
  border-radius: var(--radius-md);
}
```

### Utility Classes
Use predefined utility classes for common patterns:

```html
<div class="bg-primary text-white p-4 rounded-md shadow-lg">
  Content
</div>
```
