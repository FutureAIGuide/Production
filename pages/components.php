<?php
/**
 * Components Page
 * 
 * Showcase of all available components
 */

require_once dirname(__DIR__) . '/config/config.php';

$page_title = 'Components - ' . SITE_NAME;
$page_description = 'Explore all available UI components with examples and code snippets';

include dirname(__DIR__) . '/includes/header.php';
?>

<div class="container py-8">
    <h1 class="text-5xl font-bold mb-4">Component Library</h1>
    <p class="text-xl text-gray-600 mb-12">
        Explore our comprehensive collection of reusable UI components.
    </p>
    
    <!-- Buttons Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Buttons</h2>
        
        <div class="card mb-6">
            <div class="card-header">
                <h3 class="card-title">Button Variants</h3>
            </div>
            <div class="card-body">
                <div class="flex flex-wrap gap-4 mb-6">
                    <button class="btn btn-primary">Primary</button>
                    <button class="btn btn-secondary">Secondary</button>
                    <button class="btn btn-outline">Outline</button>
                    <button class="btn btn-ghost">Ghost</button>
                    <button class="btn btn-primary" disabled>Disabled</button>
                </div>
            </div>
        </div>
        
        <div class="card mb-6">
            <div class="card-header">
                <h3 class="card-title">Button Sizes</h3>
            </div>
            <div class="card-body">
                <div class="flex flex-wrap items-center gap-4">
                    <button class="btn btn-primary btn-sm">Small</button>
                    <button class="btn btn-primary">Medium</button>
                    <button class="btn btn-primary btn-lg">Large</button>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Cards Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Cards</h2>
        
        <div class="grid gap-6 grid-auto-fit">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Basic Card</h3>
                </div>
                <div class="card-body">
                    <p class="text-gray-600">This is a basic card with header, body, and footer sections.</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary btn-sm">Action</button>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Card with Badge</h3>
                    <span class="badge badge-primary">New</span>
                </div>
                <div class="card-body">
                    <p class="text-gray-600">Card with a badge in the header for status or category indicators.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body">
                    <h3 class="text-xl font-semibold mb-3">Simple Card</h3>
                    <p class="text-gray-600">A simple card without header or footer.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Forms Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Forms</h2>
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Contact Form Example</h3>
            </div>
            <div class="card-body">
                <form id="sampleForm">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject">
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Your message here..." required></textarea>
                        <span class="form-text">Please provide a detailed message.</span>
                    </div>
                    
                    <div class="flex gap-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-ghost">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <!-- Alerts Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Alerts</h2>
        
        <div class="alert alert-success">
            <strong>Success!</strong> Your action was completed successfully.
        </div>
        
        <div class="alert alert-info">
            <strong>Info:</strong> Here's some useful information for you.
        </div>
        
        <div class="alert alert-warning">
            <strong>Warning:</strong> Please be careful with this action.
        </div>
        
        <div class="alert alert-error">
            <strong>Error:</strong> Something went wrong. Please try again.
        </div>
    </section>
    
    <!-- Badges Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Badges</h2>
        
        <div class="card">
            <div class="card-body">
                <div class="flex flex-wrap gap-3">
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-error">Error</span>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Tables Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Tables</h2>
        
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>john@example.com</td>
                            <td>Admin</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>jane@example.com</td>
                            <td>User</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Bob Johnson</td>
                            <td>bob@example.com</td>
                            <td>Editor</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
    <!-- Modal Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Modal</h2>
        
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" data-modal-target="exampleModal">
                    Open Modal
                </button>
            </div>
        </div>
        
        <!-- Modal -->
        <div id="exampleModal" class="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Modal Title</h3>
                    </div>
                    <div class="modal-body">
                        <p>This is a modal dialog. You can put any content here.</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-ghost" data-modal-close>Close</button>
                        <button class="btn btn-primary" data-modal-close>Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Utility Classes Section -->
    <section class="mb-16">
        <h2 class="text-3xl font-bold mb-6 border-b pb-4">Utility Classes</h2>
        
        <div class="card mb-6">
            <div class="card-header">
                <h3 class="card-title">Spacing</h3>
            </div>
            <div class="card-body">
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <div class="bg-primary text-white p-4 rounded">Padding 4</div>
                </div>
                <div class="bg-gray-100 p-4 rounded">
                    <div class="bg-secondary text-white p-6 rounded">Padding 6</div>
                </div>
            </div>
        </div>
        
        <div class="card mb-6">
            <div class="card-header">
                <h3 class="card-title">Text Utilities</h3>
            </div>
            <div class="card-body">
                <p class="text-left mb-2">Left aligned text</p>
                <p class="text-center mb-2">Center aligned text</p>
                <p class="text-right mb-2">Right aligned text</p>
                <p class="text-sm mb-2">Small text</p>
                <p class="text-base mb-2">Base text</p>
                <p class="text-lg mb-2">Large text</p>
                <p class="font-light mb-2">Light weight</p>
                <p class="font-normal mb-2">Normal weight</p>
                <p class="font-semibold mb-2">Semibold weight</p>
                <p class="font-bold">Bold weight</p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Shadows</h3>
            </div>
            <div class="card-body">
                <div class="grid gap-6 grid-auto-fit-sm">
                    <div class="bg-white p-6 rounded shadow-sm">Shadow SM</div>
                    <div class="bg-white p-6 rounded shadow">Shadow Base</div>
                    <div class="bg-white p-6 rounded shadow-md">Shadow MD</div>
                    <div class="bg-white p-6 rounded shadow-lg">Shadow LG</div>
                    <div class="bg-white p-6 rounded shadow-xl">Shadow XL</div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
// Initialize form validation
document.addEventListener('DOMContentLoaded', () => {
    const form = new FormValidator('sampleForm', {
        onSubmit: (data) => {
            alert('Form submitted! Check console for data.');
            console.log('Form data:', data);
        }
    });
});
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
