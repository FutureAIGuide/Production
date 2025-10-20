<?php
/**
 * Home Page
 */

require_once __DIR__ . '/config/config.php';

$page_title = SITE_NAME . ' - Home';
$page_description = 'Welcome to ' . SITE_NAME . ', a well-structured production website with comprehensive design system';

include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="bg-primary text-white py-20">
    <div class="container text-center">
        <h1 class="text-6xl font-bold mb-6">Welcome to Production</h1>
        <p class="text-xl text-gray-100 mb-8 mx-auto" style="max-width: 600px;">
            A well-structured website built with HTML, CSS, JavaScript, and PHP, featuring a comprehensive design system.
        </p>
        <div class="flex justify-center gap-4">
            <a href="/pages/components.php" class="btn btn-lg bg-white text-primary">
                View Components
            </a>
            <a href="/pages/about.php" class="btn btn-lg btn-outline text-white border-white">
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16">
    <div class="container">
        <h2 class="text-4xl font-bold text-center mb-12">Key Features</h2>
        
        <div class="grid grid-auto-fit gap-8">
            <!-- Feature 1 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">🎨 Design System</h3>
                    <p class="text-gray-600">
                        Comprehensive design system with colors, typography, spacing, and tokens for consistent UI development.
                    </p>
                </div>
            </div>
            
            <!-- Feature 2 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">🧩 Reusable Components</h3>
                    <p class="text-gray-600">
                        Pre-built, customizable components including buttons, cards, forms, modals, and more.
                    </p>
                </div>
            </div>
            
            <!-- Feature 3 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">📱 Responsive Design</h3>
                    <p class="text-gray-600">
                        Mobile-first responsive design that works seamlessly across all devices and screen sizes.
                    </p>
                </div>
            </div>
            
            <!-- Feature 4 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">⚡ Performance</h3>
                    <p class="text-gray-600">
                        Optimized for performance with minimal CSS/JS, fast loading times, and efficient code.
                    </p>
                </div>
            </div>
            
            <!-- Feature 5 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">♿ Accessibility</h3>
                    <p class="text-gray-600">
                        Built with accessibility in mind, following WCAG guidelines for inclusive web design.
                    </p>
                </div>
            </div>
            
            <!-- Feature 6 -->
            <div class="card">
                <div class="card-body">
                    <h3 class="text-2xl font-semibold mb-4 text-primary">🔧 Easy to Customize</h3>
                    <p class="text-gray-600">
                        Well-organized code structure with CSS variables for easy theming and customization.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Design System Preview -->
<section class="bg-gray-50 py-16">
    <div class="container">
        <h2 class="text-4xl font-bold text-center mb-12">Design System Preview</h2>
        
        <!-- Color Palette -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-6">Color Palette</h3>
            <div class="flex flex-wrap gap-4">
                <div class="text-center">
                    <div class="w-24 h-24 rounded-lg shadow-md bg-primary mb-2"></div>
                    <p class="text-sm font-medium">Primary</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 rounded-lg shadow-md bg-secondary mb-2"></div>
                    <p class="text-sm font-medium">Secondary</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 rounded-lg shadow-md bg-success mb-2"></div>
                    <p class="text-sm font-medium">Success</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 rounded-lg shadow-md bg-warning mb-2"></div>
                    <p class="text-sm font-medium">Warning</p>
                </div>
                <div class="text-center">
                    <div class="w-24 h-24 rounded-lg shadow-md bg-error mb-2"></div>
                    <p class="text-sm font-medium">Error</p>
                </div>
            </div>
        </div>
        
        <!-- Typography -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-6">Typography</h3>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h1 class="mb-4">Heading 1 - Display Text</h1>
                <h2 class="mb-4">Heading 2 - Section Title</h2>
                <h3 class="mb-4">Heading 3 - Subsection</h3>
                <p class="text-lg mb-4">Large paragraph text for emphasis and readability.</p>
                <p class="mb-4">Regular paragraph text for body content with optimal line height.</p>
                <p class="text-sm">Small text for captions and secondary information.</p>
            </div>
        </div>
        
        <!-- Buttons -->
        <div class="mb-12">
            <h3 class="text-2xl font-semibold mb-6">Buttons</h3>
            <div class="flex flex-wrap gap-4">
                <button class="btn btn-primary">Primary Button</button>
                <button class="btn btn-secondary">Secondary Button</button>
                <button class="btn btn-outline">Outline Button</button>
                <button class="btn btn-ghost">Ghost Button</button>
                <button class="btn btn-primary btn-sm">Small Button</button>
                <button class="btn btn-primary btn-lg">Large Button</button>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16">
    <div class="container text-center">
        <h2 class="text-4xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl text-gray-600 mb-8 mx-auto" style="max-width: 600px;">
            Explore our comprehensive component library and design system documentation.
        </p>
        <a href="/pages/components.php" class="btn btn-primary btn-lg">
            Explore Components
        </a>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
