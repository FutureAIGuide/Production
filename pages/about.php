<?php
/**
 * About Page
 */

require_once dirname(__DIR__) . '/config/config.php';

$page_title = 'About - ' . SITE_NAME;
$page_description = 'Learn more about our production website and design system';

include dirname(__DIR__) . '/includes/header.php';
?>

<div class="bg-primary text-white py-16">
    <div class="container text-center">
        <h1 class="text-5xl font-bold mb-6">About Production</h1>
        <p class="text-xl text-gray-100 mx-auto" style="max-width: 700px;">
            A modern, well-structured website built with best practices and a comprehensive design system.
        </p>
    </div>
</div>

<div class="container py-16">
    <!-- Introduction -->
    <section class="mb-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">Our Mission</h2>
            <p class="text-lg text-gray-700 mb-4">
                Production is designed to be a professional, production-ready website template that demonstrates 
                best practices in web development. Our goal is to provide developers with a solid foundation 
                that includes a comprehensive design system, reusable components, and clean, maintainable code.
            </p>
            <p class="text-lg text-gray-700 mb-4">
                Built with HTML, CSS, JavaScript, and PHP, this project showcases modern web development 
                techniques while maintaining simplicity and ease of customization.
            </p>
        </div>
    </section>
    
    <!-- Features Grid -->
    <section class="mb-16">
        <h2 class="text-4xl font-bold text-center mb-12">What Makes Us Different</h2>
        
        <div class="grid gap-8" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="text-2xl font-semibold mb-3">Design System First</h3>
                    <p class="text-gray-600">
                        Our comprehensive design system includes carefully crafted color palettes, typography scales, 
                        spacing tokens, and more - ensuring consistency across every component.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">🔧</div>
                    <h3 class="text-2xl font-semibold mb-3">Well Organized</h3>
                    <p class="text-gray-600">
                        Clear directory structure with separated concerns - assets, components, pages, and 
                        configuration - making it easy to find and modify code.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">📚</div>
                    <h3 class="text-2xl font-semibold mb-3">Documented</h3>
                    <p class="text-gray-600">
                        Comprehensive documentation for the design system, components, and utilities, 
                        making it easy to understand and extend.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="text-2xl font-semibold mb-3">Performance</h3>
                    <p class="text-gray-600">
                        Optimized CSS and JavaScript with minimal dependencies, ensuring fast load times 
                        and excellent performance.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">♿</div>
                    <h3 class="text-2xl font-semibold mb-3">Accessible</h3>
                    <p class="text-gray-600">
                        Built with accessibility in mind, following WCAG guidelines to ensure the website 
                        is usable by everyone.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="text-2xl font-semibold mb-3">Best Practices</h3>
                    <p class="text-gray-600">
                        Follows modern web development best practices including semantic HTML, CSS methodologies, 
                        and clean JavaScript.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Technology Stack -->
    <section class="mb-16">
        <div class="bg-gray-50 p-8 rounded-lg">
            <h2 class="text-4xl font-bold text-center mb-12">Technology Stack</h2>
            
            <div class="grid gap-8" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-3 text-primary">HTML5</h3>
                    <p class="text-gray-600">Semantic markup for structure and accessibility</p>
                </div>
                
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-3 text-primary">CSS3</h3>
                    <p class="text-gray-600">Modern styling with custom properties and flexbox/grid</p>
                </div>
                
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-3 text-primary">JavaScript (ES6+)</h3>
                    <p class="text-gray-600">Vanilla JavaScript for interactivity and functionality</p>
                </div>
                
                <div class="text-center">
                    <h3 class="text-xl font-semibold mb-3 text-primary">PHP</h3>
                    <p class="text-gray-600">Server-side processing and templating</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Design System Overview -->
    <section class="mb-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl font-bold mb-6">Design System</h2>
            <p class="text-lg text-gray-700 mb-6">
                Our design system is the foundation of the visual language. It includes:
            </p>
            
            <ul class="space-y-3 text-lg text-gray-700">
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Color Tokens:</strong> Primary, secondary, semantic colors, and neutral grays</span>
                </li>
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Typography:</strong> Font families, sizes, weights, and line heights</span>
                </li>
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Spacing:</strong> Consistent spacing scale from 4px to 128px</span>
                </li>
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Border Radius:</strong> Rounded corners from subtle to full circles</span>
                </li>
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Shadows:</strong> Elevation system with multiple shadow levels</span>
                </li>
                <li class="flex items-start">
                    <span class="text-primary font-bold mr-3">•</span>
                    <span><strong>Transitions:</strong> Smooth animations with timing functions</span>
                </li>
            </ul>
            
            <div class="mt-8">
                <a href="/docs/design-system.md" class="btn btn-primary">
                    View Full Design System Documentation
                </a>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="text-center bg-primary text-white p-12 rounded-lg">
        <h2 class="text-4xl font-bold mb-4">Ready to Explore?</h2>
        <p class="text-xl mb-8">Check out our component library and start building!</p>
        <a href="/pages/components.php" class="btn btn-lg bg-white text-primary">
            View Components
        </a>
    </section>
</div>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
