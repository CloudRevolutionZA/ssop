<?php
/**
 * Footer Template
 * Contains the site footer with contact information and links
 */

// Get current page for active link highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- FOOTER -->
<footer class="bg-black border-t border-gray-800 py-6">
  <div class="px-16 flex items-start justify-between gap-12">
    
    <!-- Logo Column -->
    <div class="flex items-center justify-center">
      <img src="assets/images/logo.png" class="w-32 h-32 object-contain" alt="<?php echo SITE_NAME; ?> Logo">
    </div>

    <!-- Quick Links Column -->
    <div class="flex-shrink-0">
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-white mb-3">Quick Links</div>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="index.php" class="<?php echo ($currentPage === 'index.php') ? 'text-ssop-red' : 'hover:text-ssop-red'; ?> transition-colors">Home</a></li>
        <li><a href="about.php" class="<?php echo ($currentPage === 'about.php') ? 'text-ssop-red' : 'hover:text-ssop-red'; ?> transition-colors">About Us</a></li>
        <li><a href="what-we-do.php" class="<?php echo ($currentPage === 'what-we-do.php') ? 'text-ssop-red' : 'hover:text-ssop-red'; ?> transition-colors">What We Do</a></li>
        <li><a href="projects.php" class="<?php echo ($currentPage === 'projects.php') ? 'text-ssop-red' : 'hover:text-ssop-red'; ?> transition-colors">Our Projects</a></li>
        <li><a href="contact.php" class="<?php echo ($currentPage === 'contact.php') ? 'text-ssop-red' : 'hover:text-ssop-red'; ?> transition-colors">Contact</a></li>
      </ul>
    </div>

    <!-- Contact Us Column -->
    <div class="flex-shrink-0">
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-white mb-3">Contact Us</div>
      <ul class="space-y-1 text-sm text-gray-400">
        <li class="flex items-center gap-2">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/></svg>
          <a href="tel:0100210178" class="hover:text-ssop-red transition-colors">010 021 0178</a>
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <a href="https://wa.me/27790194931" class="hover:text-ssop-red transition-colors">079 019 4931</a>
        </li>
        <li class="flex items-center gap-2">
          <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          <a href="mailto:occ@ssop.co.za" class="hover:text-ssop-red transition-colors">occ@ssop.co.za</a>
        </li>
        <li class="flex items-start gap-2">
          <svg class="w-4 h-4 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
          <div>
            <div>SSOP NPC OCC</div>
            <div>Wilrogate Centre,</div>
            <div>Wilropark, Roodepoort</div>
            <div>JHB 1724</div>
          </div>
        </li>
      </ul>
    </div>

    <!-- Follow Us Column -->
    <div class="flex-shrink-0">
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-white mb-3">Follow Us</div>
      <div class="flex gap-3">
        <a href="#" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
        </a>
        <a href="#" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
        </a>
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?>" class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-white transition-colors">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        </a>
      </div>
    </div>

    <!-- Legal Column -->
    <div class="flex-shrink-0">
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-white mb-3">Legal</div>
      <ul class="space-y-1 text-sm text-gray-400">
        <li><a href="#" class="hover:text-ssop-red transition-colors">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-ssop-red transition-colors">Terms & Conditions</a></li>
        <li><a href="#" class="hover:text-ssop-red transition-colors">POPIA Compliance</a></li>
      </ul>
    </div>

    <!-- Registered NPC Column -->
    <div class="flex-shrink-0">
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-white mb-2">Registered NPC</div>
      <div class="font-barlow-condensed text-lg font-black text-white">2017/019873/08</div>
    </div>
  </div>

  <!-- Copyright Bar -->
  <div class="px-16 mt-6 pt-4 border-t border-gray-800 text-center">
    <p class="text-xs text-gray-600">© <?php echo date('Y'); ?> SSOP NPC. All rights reserved.</p>
    <p class="text-xs text-gray-500 mt-1">Website built by <a href="https://cloudrevolution.co.za" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-ssop-red transition-colors">CloudRevolution</a></p>
  </div>
</footer>

</body>
</html>
