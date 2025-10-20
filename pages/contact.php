<?php
/**
 * Contact Page
 */

require_once dirname(__DIR__) . '/config/config.php';

$page_title = 'Contact - ' . SITE_NAME;
$page_description = 'Get in touch with us';

// Handle form submission
// NOTE: In production, add CSRF token validation for security
// Example: 
// - Generate token: $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// - Validate: if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) { ... }
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Process the form (in a real application, you'd send an email or save to database)
        $success_message = 'Thank you for your message! We will get back to you soon.';
        
        // Clear form data
        $name = $email = $subject = $message = '';
    }
}

include dirname(__DIR__) . '/includes/header.php';
?>

<div class="bg-primary text-white py-16">
    <div class="container text-center">
        <h1 class="text-5xl font-bold mb-6">Contact Us</h1>
        <p class="text-xl text-gray-100">
            Have questions? We'd love to hear from you.
        </p>
    </div>
</div>

<div class="container py-16">
    <div class="grid gap-12 grid-auto-fit">
        <!-- Contact Information -->
        <div>
            <h2 class="text-3xl font-bold mb-6">Get in Touch</h2>
            <p class="text-lg text-gray-700 mb-8">
                Feel free to reach out to us using the contact form or through the information below.
            </p>
            
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="text-primary text-2xl mr-4">📧</div>
                    <div>
                        <h3 class="font-semibold mb-1">Email</h3>
                        <a href="mailto:<?php echo esc(SITE_EMAIL); ?>" class="text-gray-600">
                            <?php echo esc(SITE_EMAIL); ?>
                        </a>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-primary text-2xl mr-4">🌐</div>
                    <div>
                        <h3 class="font-semibold mb-1">Website</h3>
                        <a href="<?php echo esc(SITE_URL); ?>" class="text-gray-600">
                            <?php echo esc(SITE_URL); ?>
                        </a>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-primary text-2xl mr-4">📍</div>
                    <div>
                        <h3 class="font-semibold mb-1">Location</h3>
                        <p class="text-gray-600">
                            123 Web Street<br>
                            Digital City, DC 12345<br>
                            United States
                        </p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="text-primary text-2xl mr-4">⏰</div>
                    <div>
                        <h3 class="font-semibold mb-1">Business Hours</h3>
                        <p class="text-gray-600">
                            Monday - Friday: 9:00 AM - 5:00 PM<br>
                            Saturday - Sunday: Closed
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Form -->
        <div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Send us a Message</h3>
                </div>
                <div class="card-body">
                    <?php if ($success_message): ?>
                        <div class="alert alert-success">
                            <?php echo esc($success_message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php if ($error_message): ?>
                        <div class="alert alert-error">
                            <?php echo esc($error_message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="" id="contactForm">
                        <div class="form-group">
                            <label for="name" class="form-label">Full Name *</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                class="form-control" 
                                placeholder="John Doe" 
                                value="<?php echo esc($name ?? ''); ?>"
                                required
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email Address *</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                class="form-control" 
                                placeholder="john@example.com"
                                value="<?php echo esc($email ?? ''); ?>"
                                required
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject</label>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                class="form-control" 
                                placeholder="How can we help you?"
                                value="<?php echo esc($subject ?? ''); ?>"
                            >
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message *</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                class="form-control" 
                                placeholder="Tell us what's on your mind..."
                                rows="6"
                                required
                            ><?php echo esc($message ?? ''); ?></textarea>
                            <span class="form-text">Please provide as much detail as possible.</span>
                        </div>
                        
                        <div class="flex gap-3">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <button type="reset" class="btn btn-ghost">Clear Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FAQ Section -->
    <section class="mt-16">
        <h2 class="text-4xl font-bold text-center mb-12">Frequently Asked Questions</h2>
        
        <div class="grid gap-6 max-w-4xl mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-xl font-semibold mb-3">What is this project?</h3>
                    <p class="text-gray-600">
                        This is a production-ready website template with a comprehensive design system, 
                        built using HTML, CSS, JavaScript, and PHP.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="text-xl font-semibold mb-3">Can I use this for my project?</h3>
                    <p class="text-gray-600">
                        Yes! This template is designed to be used as a starting point for your web projects. 
                        Feel free to customize it to your needs.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="text-xl font-semibold mb-3">Is the design system customizable?</h3>
                    <p class="text-gray-600">
                        Absolutely! All design tokens are defined as CSS custom properties in the variables.css file, 
                        making it easy to customize colors, spacing, typography, and more.
                    </p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="text-xl font-semibold mb-3">How do I get support?</h3>
                    <p class="text-gray-600">
                        Feel free to reach out using the contact form above or via email. We're here to help!
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Initialize form validation
document.addEventListener('DOMContentLoaded', () => {
    const form = new FormValidator('contactForm');
});
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
