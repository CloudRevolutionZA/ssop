<?php
/**
 * Footer Template
 * Contains the site footer with contact information and links
 */
?>
<!-- FOOTER -->
<footer class="bg-ssop-black border-t border-gray-800 px-10 py-8">
  <div class="grid grid-cols-5 gap-8 mb-8">
    
    <!-- Logo Column -->
    <div class="flex items-center justify-center">
      <img src="assets/images/logo.png" class="w-24 h-24 object-contain" alt="<?php echo SITE_NAME; ?> Logo">
    </div>

    <!-- Contact Us Column -->
    <div>
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-gray-400 mb-4">Contact Us</div>
      <ul class="space-y-2.5 text-sm text-gray-500">
        <li class="flex items-center gap-2">
          <span>📞</span>
          <a href="tel:<?php echo PHONE_NUMBER; ?>" class="hover:text-ssop-red transition-colors"><?php echo PHONE_DISPLAY; ?></a>
        </li>
        <li class="flex items-center gap-2">
          <span>💬</span>
          <span>079 019 4931</span>
        </li>
        <li class="flex items-center gap-2">
          <span>✉</span>
          <a href="mailto:chairperson@ssop.co.za" class="hover:text-ssop-red transition-colors">chairperson@ssop.co.za</a>
        </li>
        <li class="flex items-center gap-2">
          <span>📍</span>
          <span>Roodepoort, Gauteng</span>
        </li>
      </ul>
    </div>

    <!-- Follow Us Column -->
    <div>
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-gray-400 mb-4">Follow Us</div>
      <div class="flex gap-3">
        <a href="#" class="w-9 h-9 border border-gray-700 flex items-center justify-center text-gray-500 hover:text-ssop-white hover:border-ssop-red transition-colors text-lg">f</a>
        <a href="#" class="w-9 h-9 border border-gray-700 flex items-center justify-center text-gray-500 hover:text-ssop-white hover:border-ssop-red transition-colors">💬</a>
        <a href="#" class="w-9 h-9 border border-gray-700 flex items-center justify-center text-gray-500 hover:text-ssop-white hover:border-ssop-red transition-colors">📸</a>
      </div>
    </div>

    <!-- Legal Column -->
    <div>
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-gray-400 mb-4">Legal</div>
      <ul class="space-y-2 text-sm text-gray-500">
        <li><a href="#" class="hover:text-ssop-red transition-colors">POPIA Compliance</a></li>
        <li><a href="#" class="hover:text-ssop-red transition-colors">Privacy Policy</a></li>
        <li><a href="#" class="hover:text-ssop-red transition-colors">Terms & Conditions</a></li>
      </ul>
    </div>

    <!-- Registered NPC Column -->
    <div>
      <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-gray-400 mb-4">Registered</div>
      <div class="font-barlow-condensed text-sm font-black text-ssop-white">NPC</div>
      <div class="font-barlow-condensed text-lg font-black text-ssop-white">2017/219863/08</div>
    </div>
  </div>

  <!-- Copyright Bar -->
  <div class="border-t border-gray-800 pt-6 text-center">
    <p class="text-xs text-gray-600">© 2025 <?php echo SITE_NAME; ?> – Specialised Community Safety Operations (NPC). All rights reserved.</p>
  </div>
</footer>

</body>
</html>
