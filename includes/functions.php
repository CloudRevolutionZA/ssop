<?php
/**
 * Helper Functions
 * Reusable utility functions for the application
 */

/**
 * Sanitize and escape output for HTML
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Check if current page matches given page
 */
function isCurrentPage($page) {
    return basename($_SERVER['PHP_SELF']) === $page;
}

/**
 * Format phone number for display
 */
function formatPhone($phone) {
    $phone = preg_replace('/[^0-9]/', '', $phone);
    
    if (strlen($phone) === 10) {
        return substr($phone, 0, 3) . ' ' . substr($phone, 3, 3) . ' ' . substr($phone, 6);
    }
    
    return $phone;
}

/**
 * Generate page meta description
 */
function getMetaDescription($page) {
    $descriptions = [
        'index.php' => 'SSOP - Community safety organisation focused on visibility, rapid response and practical solutions for Roodepoort.',
        'about.php' => 'Learn about SSOP - a registered NPC dedicated to making Roodepoort safer through community-driven security operations.',
        'what-we-do.php' => 'Discover our services: 24/7 patrols, rapid response, CCTV monitoring, and community support programmes.',
        'projects.php' => 'Explore SSOP\'s community safety projects and initiatives across Roodepoort.',
        'get-involved.php' => 'Join us in making Roodepoort safer. Learn how you can support and get involved with SSOP.',
        'contact.php' => 'Contact SSOP for emergencies, enquiries, or to learn more about our community safety services.'
    ];
    
    return $descriptions[$page] ?? 'SSOP - Making Roodepoort Safer';
}

/**
 * Render a feature card component
 */
function renderFeatureCard($icon, $title, $description) {
    ?>
    <div class="flex items-start gap-3">
        <span class="text-2xl flex-shrink-0 mt-1"><?php echo $icon; ?></span>
        <div>
            <div class="font-barlow-condensed text-xs font-black tracking-wider uppercase text-ssop-white"><?php echo escape($title); ?></div>
            <div class="text-xs text-ssop-grey"><?php echo escape($description); ?></div>
        </div>
    </div>
    <?php
}

/**
 * Render a stat card component
 */
function renderStatCard($number, $label, $description = '') {
    ?>
    <div class="bg-ssop-dark2 border border-gray-800 p-6 text-center">
        <div class="font-barlow-condensed text-4xl font-black text-ssop-red mb-2"><?php echo escape($number); ?></div>
        <div class="font-barlow-condensed text-sm font-bold uppercase text-ssop-white mb-1"><?php echo escape($label); ?></div>
        <?php if ($description): ?>
            <div class="text-xs text-gray-500"><?php echo escape($description); ?></div>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Render a value/pillar card component
 */
function renderValueCard($icon, $title, $description, $hasBorder = true) {
    $borderClass = $hasBorder ? 'border-l-4 border-ssop-red' : '';
    ?>
    <div class="<?php echo $borderClass; ?> pl-6 py-4">
        <div class="font-barlow-condensed text-2xl font-black text-ssop-red mb-2"><?php echo $icon; ?></div>
        <div class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-2"><?php echo escape($title); ?></div>
        <p class="text-sm text-gray-400"><?php echo escape($description); ?></p>
    </div>
    <?php
}
