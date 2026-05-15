<?php
/**
 * Navigation Template
 * Reusable navigation bar component
 */

$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- NAV -->
<nav class="sticky top-0 z-50 bg-ssop-black border-b border-gray-800 flex items-center justify-between px-10 h-20">
  <a href="index.php" class="flex items-center gap-3 no-underline flex-shrink-0">
    <img src="assets/images/logo.png" class="flex-shrink-0" alt="<?php echo SITE_NAME; ?> Logo" style="width:75px;height:75px;">
  </a>
  
  <ul class="flex items-center gap-8 list-none m-0 p-0 flex-1 justify-center">
    <?php foreach ($navItems as $item): ?>
      <?php 
        $isActive = ($currentPage === $item['url']);
        $linkClass = $isActive 
          ? 'font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red border-b-2 border-ssop-red pb-1' 
          : 'font-barlow-condensed text-xs font-black tracking-widest uppercase text-gray-400 hover:text-ssop-red transition-colors';
      ?>
      <li><a href="<?php echo htmlspecialchars($item['url']); ?>" class="<?php echo $linkClass; ?>"><?php echo htmlspecialchars($item['label']); ?></a></li>
    <?php endforeach; ?>
  </ul>
  
  <a href="tel:<?php echo PHONE_NUMBER; ?>" class="bg-ssop-red text-ssop-white font-barlow-condensed font-black text-xs tracking-widest uppercase px-6 py-3 flex items-center gap-2 hover:bg-ssop-red-dark transition-colors flex-shrink-0 shadow-lg">
    📞 Report an Incident
  </a>
</nav>
