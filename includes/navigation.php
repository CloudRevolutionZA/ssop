<?php
/**
 * Navigation Template
 * Reusable navigation bar component
 */

$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- NAV -->
<nav class="sticky top-0 z-50 bg-ssop-black border-b border-gray-800" role="navigation" aria-label="Main navigation">
  <div class="flex items-center justify-between px-4 md:px-8 lg:px-12 h-20 md:h-24">
    <!-- Logo -->
    <a href="index.php" class="flex items-center no-underline flex-shrink-0" aria-label="SSOP Home">
      <img src="assets/images/logo.png" class="flex-shrink-0 w-16 h-16 md:w-20 md:h-20" alt="<?php echo SITE_NAME; ?> Logo" width="80" height="80">
    </a>
    
    <!-- Desktop Navigation -->
    <ul class="hidden lg:flex items-center gap-10 list-none m-0 p-0">
      <?php foreach ($navItems as $item): ?>
        <?php 
          $isActive = ($currentPage === $item['url']);
          
          if ($isActive) {
            // Active page - red with prominent underline
            $linkClass = 'font-barlow-condensed text-sm font-bold tracking-wider uppercase text-ssop-red transition-colors border-b-4 border-ssop-red pb-1';
          } else {
            // All other pages when not active - white text
            $linkClass = 'font-barlow-condensed text-sm font-bold tracking-wider uppercase text-white hover:text-ssop-red transition-colors pb-1';
          }
        ?>
        <li><a href="<?php echo htmlspecialchars($item['url']); ?>" class="<?php echo $linkClass; ?>" <?php if($isActive) echo 'aria-current="page"'; ?>><?php echo htmlspecialchars($item['label']); ?></a></li>
      <?php endforeach; ?>
    </ul>
    
    <!-- Desktop Report Button with Sub-text -->
    <div class="hidden lg:flex flex-col items-end gap-1">
      <a href="tel:<?php echo PHONE_NUMBER; ?>" class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-6 py-3 flex items-center gap-2 hover:bg-ssop-red-dark transition-all duration-200 no-underline" aria-label="Report an Incident">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
        </svg>
        REPORT AN INCIDENT
      </a>
    </div>
    
    <!-- Mobile/Tablet Right Section -->
    <div class="flex lg:hidden items-center gap-2">
      <!-- Mobile Report Button (Icon Only) -->
      <a href="tel:<?php echo PHONE_NUMBER; ?>" class="md:hidden bg-ssop-red text-white font-barlow-condensed font-black text-xs px-4 py-3 flex items-center justify-center hover:bg-ssop-red-dark transition-colors" title="Report an Incident" aria-label="Report an Incident">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
        </svg>
      </a>

      <!-- Tablet Report Button -->
      <a href="tel:<?php echo PHONE_NUMBER; ?>" class="hidden md:flex bg-ssop-red text-white font-barlow-condensed font-black text-xs tracking-widest uppercase px-5 py-3 items-center gap-2 hover:bg-ssop-red-dark transition-colors flex-shrink-0" aria-label="Report an Incident">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
        </svg>
        REPORT
      </a>

      <!-- Mobile Menu Button -->
      <button id="mobile-menu-button" class="text-white p-3 hover:bg-ssop-dark transition-colors" aria-label="Toggle menu" aria-expanded="false" aria-controls="mobile-menu">
        <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Menu -->
  <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-800 bg-ssop-dark transition-all duration-300 ease-in-out">
    <ul class="flex flex-col list-none m-0 p-0">
      <?php foreach ($navItems as $item): ?>
        <?php 
          $isActive = ($currentPage === $item['url']);
          
          if ($isActive) {
            // Active page - red with prominent left border
            $linkClass = 'font-barlow-condensed text-base font-bold tracking-wider uppercase text-ssop-red border-l-4 border-ssop-red pl-6';
          } else {
            // All other pages when not active - white text
            $linkClass = 'font-barlow-condensed text-base font-bold tracking-wider uppercase text-white pl-6';
          }
        ?>
        <li class="border-b border-gray-800">
          <a href="<?php echo htmlspecialchars($item['url']); ?>" class="<?php echo $linkClass; ?> block py-4 hover:bg-ssop-dark2 transition-colors" <?php if($isActive) echo 'aria-current="page"'; ?>>
            <?php echo htmlspecialchars($item['label']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <script>
    (function() {
      const menuButton = document.getElementById('mobile-menu-button');
      const menu = document.getElementById('mobile-menu');
      const iconOpen = document.getElementById('menu-icon-open');
      const iconClose = document.getElementById('menu-icon-close');
      
      menuButton.addEventListener('click', function() {
        const isExpanded = menu.classList.contains('hidden');
        
        menu.classList.toggle('hidden');
        iconOpen.classList.toggle('hidden');
        iconClose.classList.toggle('hidden');
        
        menuButton.setAttribute('aria-expanded', isExpanded ? 'true' : 'false');
      });
      
      // Close menu when clicking outside
      document.addEventListener('click', function(event) {
        const isClickInside = menuButton.contains(event.target) || menu.contains(event.target);
        
        if (!isClickInside && !menu.classList.contains('hidden')) {
          menu.classList.add('hidden');
          iconOpen.classList.remove('hidden');
          iconClose.classList.add('hidden');
          menuButton.setAttribute('aria-expanded', 'false');
        }
      });
      
      // Close menu on escape key
      document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !menu.classList.contains('hidden')) {
          menu.classList.add('hidden');
          iconOpen.classList.remove('hidden');
          iconClose.classList.add('hidden');
          menuButton.setAttribute('aria-expanded', 'false');
          menuButton.focus();
        }
      });
    })();
  </script>
</nav>
