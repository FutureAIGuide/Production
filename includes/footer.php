<?php
/**
 * Footer Template
 * 
 * Common footer section for all pages
 */
?>
    </main>
    
    <footer class="bg-gray-800 text-white py-8 mt-16">
        <div class="container">
            <div class="flex flex-wrap justify-between gap-8">
                <!-- Company Info -->
                <div class="flex-1" style="min-width: 250px;">
                    <h3 class="text-xl font-bold mb-4"><?php echo esc(SITE_NAME); ?></h3>
                    <p class="text-gray-300 mb-4">
                        <?php echo esc(SITE_DESCRIPTION); ?>
                    </p>
                    <p class="text-gray-400">
                        <a href="mailto:<?php echo esc(SITE_EMAIL); ?>" class="text-gray-300">
                            <?php echo esc(SITE_EMAIL); ?>
                        </a>
                    </p>
                </div>
                
                <!-- Quick Links -->
                <div class="flex-1" style="min-width: 200px;">
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="flex flex-col gap-2">
                        <li><a href="/" class="text-gray-300 hover:text-white">Home</a></li>
                        <li><a href="/pages/about.php" class="text-gray-300 hover:text-white">About</a></li>
                        <li><a href="/pages/components.php" class="text-gray-300 hover:text-white">Components</a></li>
                        <li><a href="/pages/contact.php" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Resources -->
                <div class="flex-1" style="min-width: 200px;">
                    <h4 class="text-lg font-semibold mb-4">Resources</h4>
                    <ul class="flex flex-col gap-2">
                        <li><a href="/docs/design-system.md" class="text-gray-300 hover:text-white">Design System</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Documentation</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; <?php echo current_year(); ?> <?php echo esc(SITE_NAME); ?>. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="<?php echo asset('js/utils.js'); ?>"></script>
    <script src="<?php echo asset('js/modal.js'); ?>"></script>
    <script src="<?php echo asset('js/form-validation.js'); ?>"></script>
    
    <?php if (isset($extra_js)): ?>
        <?php echo $extra_js; ?>
    <?php endif; ?>
</body>
</html>
