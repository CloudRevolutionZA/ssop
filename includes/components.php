<?php
/**
 * Reusable UI Components
 * Complex component rendering functions
 */

/**
 * Render page header section
 */
function renderPageHeader($subtitle, $title, $description) {
    ?>
    <section class="bg-gradient-to-r from-ssop-black to-ssop-dark px-6 md:px-16 lg:px-24 py-16">
        <div class="max-w-5xl">
            <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4"><?php echo escape($subtitle); ?></div>
            <div class="w-12 h-1 bg-ssop-red mb-6"></div>
            <h1 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6"><?php echo escape($title); ?></h1>
            <p class="text-lg text-gray-300 leading-relaxed max-w-3xl"><?php echo escape($description); ?></p>
        </div>
    </section>
    <?php
}

/**
 * Render a section with title and content
 */
function renderSection($sectionClass, $subtitle, $title, $content) {
    ?>
    <section class="<?php echo $sectionClass; ?>">
        <div class="max-w-4xl mx-auto">
            <?php if ($subtitle): ?>
                <div class="font-barlow-condensed text-xs font-black tracking-wider uppercase text-ssop-red mb-3"><?php echo escape($subtitle); ?></div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="font-barlow-condensed text-3xl font-black uppercase text-ssop-white mb-6"><?php echo escape($title); ?></h2>
            <?php endif; ?>
            <?php echo $content; ?>
        </div>
    </section>
    <?php
}

/**
 * Render a grid of feature cards
 */
function renderFeatureGrid($features, $columns = 2) {
    $gridClass = "grid grid-cols-{$columns} gap-5 mb-10 max-w-2xl";
    ?>
    <div class="<?php echo $gridClass; ?>">
        <?php foreach ($features as $feature): ?>
            <?php renderFeatureCard($feature['icon'], $feature['title'], $feature['description']); ?>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render a grid of stat cards
 */
function renderStatsGrid($stats, $columns = 4) {
    $gridClass = "grid grid-cols-{$columns} gap-6";
    ?>
    <div class="<?php echo $gridClass; ?>">
        <?php foreach ($stats as $stat): ?>
            <?php renderStatCard($stat['number'], $stat['label'], $stat['description'] ?? ''); ?>
        <?php endforeach; ?>
    </div>
    <?php
}

/**
 * Render CTA (Call to Action) section
 */
function renderCTA($title, $description, $buttonText, $buttonLink, $bgClass = 'bg-gradient-to-r from-ssop-red to-ssop-red-dark') {
    ?>
    <section class="<?php echo $bgClass; ?> px-6 md:px-16 lg:px-24 py-18 text-center">
        <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6"><?php echo escape($title); ?></h2>
        <p class="text-lg text-gray-200 mb-8 max-w-2xl mx-auto leading-relaxed"><?php echo escape($description); ?></p>
        <a href="<?php echo escape($buttonLink); ?>" class="bg-ssop-black text-ssop-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 inline-block hover:bg-ssop-dark transition-colors">
            <?php echo escape($buttonText); ?>
        </a>
    </section>
    <?php
}

/**
 * Render contact form
 */
function renderContactForm() {
    ?>
    <form method="POST" action="process-contact.php" class="space-y-6">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label class="block font-barlow-condensed text-xs font-bold tracking-wider uppercase text-ssop-white mb-2">Full Name *</label>
                <input type="text" name="name" required class="w-full bg-ssop-dark2 border border-gray-700 text-ssop-white px-4 py-3 focus:outline-none focus:border-ssop-red">
            </div>
            <div>
                <label class="block font-barlow-condensed text-xs font-bold tracking-wider uppercase text-ssop-white mb-2">Email Address *</label>
                <input type="email" name="email" required class="w-full bg-ssop-dark2 border border-gray-700 text-ssop-white px-4 py-3 focus:outline-none focus:border-ssop-red">
            </div>
        </div>
        <div>
            <label class="block font-barlow-condensed text-xs font-bold tracking-wider uppercase text-ssop-white mb-2">Phone Number</label>
            <input type="tel" name="phone" class="w-full bg-ssop-dark2 border border-gray-700 text-ssop-white px-4 py-3 focus:outline-none focus:border-ssop-red">
        </div>
        <div>
            <label class="block font-barlow-condensed text-xs font-bold tracking-wider uppercase text-ssop-white mb-2">Subject *</label>
            <input type="text" name="subject" required class="w-full bg-ssop-dark2 border border-gray-700 text-ssop-white px-4 py-3 focus:outline-none focus:border-ssop-red">
        </div>
        <div>
            <label class="block font-barlow-condensed text-xs font-bold tracking-wider uppercase text-ssop-white mb-2">Message *</label>
            <textarea name="message" rows="6" required class="w-full bg-ssop-dark2 border border-gray-700 text-ssop-white px-4 py-3 focus:outline-none focus:border-ssop-red"></textarea>
        </div>
        <button type="submit" class="bg-ssop-red text-ssop-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 hover:bg-ssop-red-dark transition-colors">
            Send Message
        </button>
    </form>
    <?php
}
