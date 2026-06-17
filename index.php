<?php
/**
 * Home Page (index.php)
 * Main landing page for SSOP website
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = SITE_NAME . ' – Safer Communities. Stronger Together.';
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO -->
<section id="main-content" class="bg-ssop-black min-h-screen flex items-center px-4 md:px-8 lg:px-16 xl:px-24 py-12 md:py-16 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="absolute inset-0 pointer-events-none"></div>
  
  <div class="relative z-10 max-w-4xl">
    <h1 class="font-barlow-condensed text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black leading-tight uppercase text-ssop-white mb-4 md:mb-6">
      Safer<br>Communities.<br><span class="text-ssop-red">Stronger<br>Together.</span>
    </h1>
    <p class="text-base md:text-lg font-light text-gray-300 max-w-2xl my-6 md:my-8 leading-relaxed">We are a registered NPC and community safety organisation focused on visibility, rapid response and practical solutions that make Roodepoort a safer place to live, work and raise a family.</p>
    
    <!-- Hero Badges -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-6 md:mb-8">
      <div class="flex items-start gap-3">
        <span class="text-2xl flex-shrink-0" aria-hidden="true">👁</span>
        <div>
          <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-widest uppercase text-ssop-grey mb-1">Visible</div>
          <div class="font-barlow-condensed text-sm md:text-base font-black text-ssop-white">We are out there where it matters</div>
        </div>
      </div>
      <div class="flex items-start gap-3">
        <span class="text-2xl flex-shrink-0" aria-hidden="true">⚡</span>
        <div>
          <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-widest uppercase text-ssop-grey mb-1">Rapid Response</div>
          <div class="font-barlow-condensed text-sm md:text-base font-black text-ssop-white">We respond quickly when you need us</div>
        </div>
      </div>
      <div class="flex items-start gap-3">
        <span class="text-2xl flex-shrink-0" aria-hidden="true">🤝</span>
        <div>
          <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-widest uppercase text-ssop-grey mb-1">Community Driven</div>
          <div class="font-barlow-condensed text-sm md:text-base font-black text-ssop-white">Stronger together, safer together</div>
        </div>
      </div>
      <div class="flex items-start gap-3">
        <span class="text-2xl flex-shrink-0" aria-hidden="true">👥</span>
        <div>
          <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-widest uppercase text-ssop-grey mb-1">People First</div>
          <div class="font-barlow-condensed text-sm md:text-base font-black text-ssop-white">Building safer communities together</div>
        </div>
      </div>
    </div>
    
    <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
      <a href="tel:<?php echo PHONE_NUMBER; ?>" class="bg-ssop-red text-ssop-white font-barlow-condensed font-black text-sm md:text-base tracking-wider uppercase px-6 md:px-8 py-4 hover:bg-ssop-red-dark transition-colors flex items-center justify-center gap-2 no-underline rounded">
        <svg class="w-5 h-5 md:w-6 md:h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"/>
        </svg>
        Report an Incident
      </a>
      <a href="get-involved.php" class="border-2 border-ssop-white text-ssop-white font-barlow-condensed font-black text-sm md:text-base tracking-wider uppercase px-6 md:px-8 py-4 hover:bg-ssop-white hover:text-ssop-black transition-colors text-center no-underline rounded">
        👥 Join as SSOP Member
      </a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="bg-ssop-black border-t border-b border-gray-800 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 divide-y sm:divide-y-0 sm:divide-x divide-gray-800">
  <div class="flex items-center gap-3 p-5 md:p-6">
    <img src="assets/icons/responsetime.png" alt="" class="w-10 h-10 md:w-12 md:h-12 opacity-70 flex-shrink-0" aria-hidden="true" width="48" height="48" loading="lazy">
    <div>
      <div class="font-barlow-condensed text-2xl md:text-3xl font-black text-ssop-white">±3.5 MIN</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Average Response Time</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-5 md:p-6">
    <img src="assets/icons/activeoperationalmembers.png" alt="" class="w-10 h-10 md:w-12 md:h-12 opacity-70 flex-shrink-0" aria-hidden="true" width="48" height="48" loading="lazy">
    <div>
      <div class="font-barlow-condensed text-2xl md:text-3xl font-black text-ssop-white">28+</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Active Operational Members</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-5 md:p-6">
    <img src="assets/icons/headphones_white.png" alt="" class="w-10 h-10 md:w-12 md:h-12 opacity-70 flex-shrink-0" aria-hidden="true" width="48" height="48" loading="lazy">
    <div>
      <div class="font-barlow-condensed text-2xl md:text-3xl font-black text-ssop-white">24/7</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Operations Command Centre</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-5 md:p-6">
    <img src="assets/icons/registrednpc_white.png" alt="" class="w-10 h-10 md:w-12 md:h-12 opacity-70 flex-shrink-0" aria-hidden="true" width="48" height="48" loading="lazy">
    <div>
      <div class="font-barlow-condensed text-sm md:text-base font-black tracking-wider uppercase text-ssop-white leading-tight">Registered NPC</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">2017/219863/08</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-5 md:p-6">
    <img src="assets/icons/goal_white.png" alt="" class="w-10 h-10 md:w-12 md:h-12 opacity-70 flex-shrink-0" aria-hidden="true" width="48" height="48" loading="lazy">
    <div>
      <div class="font-barlow-condensed text-2xl md:text-3xl font-black text-ssop-white">1 Goal</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Safer Communities Stronger Together</div>
    </div>
  </div>
</div>

<!-- WHAT WE DO -->
<section class="bg-ssop-black w-full py-6 md:py-12">
  <!-- Section Title with Border Cutout -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24 mb-4 md:mb-6">
    <div class="relative border-t border-gray-700 pt-0">
      <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-ssop-black px-4 md:px-6">
        <div class="font-barlow-condensed text-base md:text-xl font-black tracking-widest uppercase text-white">What We Do</div>
      </div>
    </div>
  </div>
  
  <div class="px-4 md:px-8 lg:px-16 xl:px-24">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 md:gap-6">
      <div class="bg-ssop-black border border-gray-700 rounded overflow-hidden flex flex-col hover:border-gray-600 transition-colors">
        <img src="assets/images/patrol.png" alt="Active Patrol Operations" class="w-full h-40 md:h-48 object-cover" width="400" height="300" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-2 md:gap-3 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-ssop-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            </div>
            <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-ssop-red">Active Patrol Operations</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">High-visibility patrols across our communities to deter crime and respond quickly to incidents.</div>
        </div>
      </div>
      <div class="bg-ssop-black border border-gray-700 rounded overflow-hidden flex flex-col hover:border-gray-600 transition-colors">
        <img src="assets/images/controlroom.png" alt="Operations Command Centre" class="w-full h-40 md:h-48 object-cover" width="400" height="300" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-2 md:gap-3 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-ssop-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
            </div>
            <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-ssop-red">Operations Command Centre (OCC)</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Our 24/7 OCC receives incidents, monitors our CCTV network and dispatches resources efficiently.</div>
        </div>
      </div>
      <div class="bg-ssop-black border border-gray-700 rounded overflow-hidden flex flex-col hover:border-gray-600 transition-colors">
        <img src="assets/images/camera.png" alt="Community CCTV Network" class="w-full h-40 md:h-48 object-cover" width="400" height="300" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-2 md:gap-3 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-ssop-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>
            </div>
            <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-ssop-red">Community CCTV Network</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Expanding CCTV coverage across Roodepoort through community participation and support.</div>
        </div>
      </div>
      <div class="bg-ssop-black border border-gray-700 rounded overflow-hidden flex flex-col hover:border-gray-600 transition-colors">
        <img src="assets/images/emergency.png" alt="Emergency First Response" class="w-full h-40 md:h-48 object-cover" width="400" height="300" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-2 md:gap-3 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-ssop-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/></svg>
            </div>
            <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-ssop-red">Emergency First Response</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Trained first aiders on scene to stabilise and support until EMS arrives.</div>
        </div>
      </div>
      <div class="bg-ssop-black border border-gray-700 rounded overflow-hidden flex flex-col hover:border-gray-600 transition-colors">
        <img src="assets/images/community.png" alt="Community Engagement" class="w-full h-40 md:h-48 object-cover" width="400" height="300" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-2 md:gap-3 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-ssop-red flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            </div>
            <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-ssop-red">Community Engagement</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Building safer communities through communication, awareness and partnerships.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR COMMUNITY PROJECTS -->
<section class="bg-ssop-black w-full py-6 md:py-12">
  <!-- Section Title with Border Cutout -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24 mb-4 md:mb-6">
    <div class="relative border-t border-gray-700 pt-0">
      <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-ssop-black px-4 md:px-6">
        <div class="font-barlow-condensed text-base md:text-xl font-black tracking-widest uppercase text-white">Our Community Projects</div>
      </div>
    </div>
  </div>
  
  <div class="px-4 md:px-8 lg:px-16 xl:px-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      <div class="bg-ssop-black border border-gray-700 rounded-lg overflow-hidden flex flex-col hover:border-green-600 transition-colors">
        <img src="assets/images/elderlysupport.png" alt="Elderly Support Program" class="w-full h-48 md:h-56 object-cover" width="400" height="350" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-3 md:gap-4 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-green-600 flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
            </div>
            <div class="font-barlow-condensed text-sm md:text-base font-black uppercase text-green-600">Elderly Support Program</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Supporting our elderly residents through visits, assistance and connection.</div>
          <a href="get-involved.php" class="bg-transparent border-2 border-green-600 text-green-600 font-barlow-condensed font-black text-xs tracking-wider uppercase px-4 md:px-6 py-3 hover:bg-green-600 hover:text-white transition-colors text-center mt-auto no-underline rounded">Register / Get Assistance</a>
        </div>
      </div>
      
      <div class="bg-ssop-black border border-gray-700 rounded-lg overflow-hidden flex flex-col hover:border-blue-600 transition-colors">
        <img src="assets/images/youthempowerment.png" alt="Youth Development Program" class="w-full h-48 md:h-56 object-cover" width="400" height="350" loading="lazy">
        <div class="p-4 md:p-6 flex flex-col gap-3 md:gap-4 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-600 flex items-center justify-center flex-shrink-0" aria-hidden="true">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
            </div>
            <div class="font-barlow-condensed text-sm md:text-base font-black uppercase text-blue-600">Youth Development Program</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Empowering our youth through mentorship, skills development and positive activities.</div>
          <a href="get-involved.php" class="bg-transparent border border-blue-600 text-blue-600 font-barlow-condensed font-black text-xs tracking-wider uppercase px-4 md:px-6 py-2 hover:bg-blue-600 hover:text-white transition-colors text-center mt-auto">Register / Get Involved</a>
        </div>
      </div>
      
      <div class="bg-ssop-black border border-gray-700 rounded-lg overflow-hidden flex flex-col hover:border-orange-600 transition-colors">
        <img src="assets/images/community.png" alt="Community Projects Program" class="w-full h-48 md:h-56 object-cover">
        <div class="p-4 md:p-6 flex flex-col gap-3 md:gap-4 flex-1">
          <div class="flex items-center gap-2 md:gap-3">
            <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-orange-600 flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5 md:w-6 md:h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
            </div>
            <div class="font-barlow-condensed text-sm md:text-base font-black uppercase text-orange-600">Community Projects Program</div>
          </div>
          <div class="text-xs md:text-sm text-gray-400 leading-relaxed">Initiatives that uplift our neighbourhoods and create lasting change.</div>
          <a href="projects.php" class="bg-transparent border border-orange-600 text-orange-600 font-barlow-condensed font-black text-xs tracking-wider uppercase px-4 md:px-6 py-2 hover:bg-orange-600 hover:text-white transition-colors text-center mt-auto">Register / Get Involved</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- IN COLLABORATION WITH -->
<section class="bg-ssop-black w-full py-6 md:py-12">
  <!-- Section Title with Border Cutout -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24 mb-6 md:mb-8">
    <div class="relative border-t border-gray-700 pt-0">
      <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-ssop-black px-4 md:px-6">
        <div class="font-barlow-condensed text-sm md:text-xl font-black tracking-widest uppercase text-white whitespace-nowrap">In Collaboration With</div>
      </div>
    </div>
  </div>
  
  <div class="px-4 md:px-8 lg:px-16 xl:px-24">
    <div class="flex flex-wrap gap-3 md:gap-4 lg:gap-6 xl:gap-8 justify-center items-center">
      <?php
      // Display all 8 collaborator logos
      for ($i = 1; $i <= 8; $i++) {
        echo '<div class="flex-shrink-0 flex items-center justify-center">';
        echo '<img src="assets/images/collaborator' . $i . '.png" alt="Collaborator ' . $i . '" class="h-10 md:h-16 lg:h-24 xl:h-32 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity">';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- HOW IT WORKS + OCC -->
<section class="py-6 md:py-12">
<div class="grid grid-cols-1 lg:grid-cols-2">
  <!-- HOW IT WORKS - Light Side -->
  <div class="bg-gray-100 px-4 md:px-8 lg:px-16 py-8 md:py-14 border-b lg:border-b-0 lg:border-r border-gray-300">
    <div class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-6 md:mb-8">How It Works</div>
    
    <!-- Steps with Icons -->
    <div class="flex flex-col md:flex-row justify-between items-start gap-6 md:gap-0 mb-6 md:mb-8">
      <!-- Step 1 -->
      <div class="flex flex-col items-center text-center w-full md:w-[22%]">
        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-2 md:mb-3 p-2 md:p-3">
          <img src="assets/icons/phone.png" alt="Phone" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-gray-900 mb-1 md:mb-2">Incident<br>Reported</div>
        <div class="text-xs md:text-sm text-gray-600 leading-tight">Call or WhatsApp the OCC with information.</div>
      </div>
      
      <!-- Dotted line - Hidden on mobile -->
      <div class="hidden md:flex items-start pt-8 w-[6%]">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 2 -->
      <div class="flex flex-col items-center text-center w-full md:w-[22%]">
        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-2 md:mb-3 p-2 md:p-3">
          <img src="assets/icons/headphones.png" alt="Headphones" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-gray-900 mb-1 md:mb-2">OCC Verifies &<br>Dispatches</div>
        <div class="text-xs md:text-sm text-gray-600 leading-tight">Information is verified and the closest unit is dispatched.</div>
      </div>
      
      <!-- Dotted line - Hidden on mobile -->
      <div class="hidden md:flex items-start pt-8 w-[6%]">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 3 -->
      <div class="flex flex-col items-center text-center w-full md:w-[22%]">
        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-2 md:mb-3 p-2 md:p-3">
          <img src="assets/icons/car.png" alt="Car" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-gray-900 mb-1 md:mb-2">SSOP Unit<br>Responds</div>
        <div class="text-xs md:text-sm text-gray-600 leading-tight">Our team responds rapidly and assesses the situation.</div>
      </div>
      
      <!-- Dotted line - Hidden on mobile -->
      <div class="hidden md:flex items-start pt-8 w-[6%]">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 4 -->
      <div class="flex flex-col items-center text-center w-full md:w-[22%]">
        <div class="w-14 h-14 md:w-16 md:h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-2 md:mb-3 p-2 md:p-3">
          <img src="assets/icons/registerednpc.png" alt="Registered NPC" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-xs md:text-sm font-black uppercase text-gray-900 mb-1 md:mb-2">Coordination<br>with Authorities</div>
        <div class="text-xs md:text-sm text-gray-600 leading-tight">We work with state players as needed.</div>
      </div>
    </div>
  </div>
  
  <!-- OPERATIONS COMMAND CENTRE - Dark Side with Image -->
  <div class="bg-ssop-black grid grid-cols-1 md:grid-cols-2 gap-0">
    <div class="px-4 md:px-8 lg:px-16 py-8 md:py-14">
      <div class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-2">Operations Command Centre (OCC)</div>
      <div class="font-barlow-condensed text-sm md:text-base font-bold uppercase text-gray-400 mb-4 md:mb-6">The Nerve Centre of Our Operations</div>
      
      <div class="text-xs md:text-sm text-gray-300 leading-relaxed mb-6 md:mb-8">Our dedicated team of volunteer controllers monitor incidents, our CCTV network and coordinate responses with professionalism and care.</div>
      
      <!-- Contact Buttons -->
      <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 sm:gap-0">
        <a href="tel:<?php echo PHONE_NUMBER; ?>" class="flex items-center gap-2 md:gap-3 py-3 md:py-4 hover:opacity-80 transition-opacity flex-1 border border-gray-700 sm:border-none px-4 sm:px-0 rounded sm:rounded-none">
          <img src="assets/icons/phone_white.png" alt="Phone" class="w-6 h-6 md:w-8 md:h-8 flex-shrink-0">
          <div>
            <div class="text-xs text-gray-400 uppercase tracking-wider font-barlow-condensed font-black">Call</div>
            <div class="font-barlow-condensed font-black text-ssop-white text-base md:text-lg"><?php echo PHONE_NUMBER; ?></div>
          </div>
        </a>
        
        <div class="hidden sm:block h-12 md:h-16 w-px bg-gray-600 mx-4 md:mx-6"></div>
        
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?>" class="flex items-center gap-2 md:gap-3 py-3 md:py-4 hover:opacity-80 transition-opacity flex-1 border border-gray-700 sm:border-none px-4 sm:px-0 rounded sm:rounded-none">
          <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-6 h-6 md:w-8 md:h-8 flex-shrink-0">
          <div>
            <div class="text-xs text-gray-400 uppercase tracking-wider font-barlow-condensed font-black">WhatsApp</div>
            <div class="font-barlow-condensed font-black text-ssop-white text-base md:text-lg"><?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?></div>
          </div>
        </a>
      </div>
    </div>
    
    <!-- Control Room Image - Full Size -->
    <div class="relative overflow-hidden h-64 md:h-auto">
      <img src="assets/images/controlroom.png" alt="Operations Command Centre" class="w-full h-full object-cover">
    </div>
  </div>
</section>

<!-- 3 CALL TO ACTION -->
<section class="bg-ssop-black py-6 md:py-12 px-4 md:px-8 lg:px-16 xl:px-24">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
    <!-- JOIN AS SSOP MEMBER -->
    <div class="relative overflow-hidden bg-ssop-black rounded-lg border border-gray-800 min-h-[300px] md:min-h-[400px]">
      <div class="p-6 md:p-8 pr-4 flex flex-col justify-center h-full relative z-10">
        <div class="font-barlow-condensed text-lg md:text-xl font-black uppercase text-ssop-red mb-3 md:mb-4">Join as SSOP Member</div>
        <div class="text-xs md:text-sm text-gray-300 mb-4 md:mb-6 leading-relaxed max-w-full md:max-w-[60%]">Be part of our trained team and help keep your community safe.</div>
        
        <ul class="text-xs md:text-sm text-gray-300 space-y-1 md:space-y-2 mb-6 md:mb-8 max-w-full md:max-w-[60%]">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Vetting process</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Training provided</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Structured deployment</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Make a real difference</li>
        </ul>
        
        <a href="#" class="bg-ssop-red text-white font-barlow-condensed font-black text-xs md:text-sm tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Apply to Join</a>
      </div>
      
      <!-- Guard Image Overlay Right -->
      <div class="absolute right-0 bottom-0 h-2/3 md:h-full flex items-end justify-end pointer-events-none opacity-40 md:opacity-100">
        <img src="assets/images/guard.png" alt="SSOP Guard" class="h-full w-auto object-contain">
      </div>
    </div>
    
    <!-- SUPPORT OUR MISSION -->
    <div class="relative overflow-hidden bg-ssop-black rounded-lg border border-gray-800 min-h-[300px] md:min-h-[400px]">
      <div class="p-6 md:p-8 pr-4 flex flex-col justify-center h-full relative z-10">
        <div class="font-barlow-condensed text-lg md:text-xl font-black uppercase text-ssop-red mb-3 md:mb-4">Support Our Mission</div>
        <div class="text-xs md:text-sm text-gray-300 mb-4 md:mb-6 leading-relaxed max-w-full md:max-w-[60%]">Your donation helps us continue our operations and projects.</div>
        
        <ul class="text-xs md:text-sm text-gray-300 space-y-1 md:space-y-2 mb-6 md:mb-8 max-w-full md:max-w-[60%]">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Operational costs</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Training & equipment</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Community projects</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Emergency support</li>
        </ul>
        
        <a href="https://pay.yoco.com/ssop" target="_blank" rel="noopener noreferrer" class="bg-ssop-red text-white font-barlow-condensed font-black text-xs md:text-sm tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Make a Donation</a>
      </div>
      
      <!-- Heart Image Overlay Right -->
      <div class="absolute right-0 bottom-0 h-2/3 md:h-full flex items-end justify-end pointer-events-none opacity-40 md:opacity-100">
        <img src="assets/images/heart.png" alt="Support" class="h-full w-auto object-contain">
      </div>
    </div>
    
    <!-- DONATE TOWARDS CCTV PROJECT -->
    <div class="relative overflow-hidden bg-ssop-black rounded-lg border border-gray-800 min-h-[300px] md:min-h-[400px] flex flex-col md:flex-row md:col-span-2 lg:col-span-1">
      <div class="p-6 md:p-8 pr-4 flex-1 flex flex-col justify-center">
        <div class="font-barlow-condensed text-lg md:text-xl font-black uppercase text-ssop-red mb-3 md:mb-4">Donate Towards CCTV Project</div>
        <div class="text-xs md:text-sm text-gray-300 mb-4 md:mb-6 leading-relaxed">Help us expand CCTV coverage and secure more streets.</div>
        
        <ul class="text-xs md:text-sm text-gray-300 space-y-1 md:space-y-2 mb-6 md:mb-8">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> R2,850 per 5MP camera (installation at cost)</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Cameras donated become the property of SSOP</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> POPIA compliant</li>
        </ul>
        
        <a href="https://pay.yoco.com/ssop" target="_blank" rel="noopener noreferrer" class="bg-ssop-red text-white font-barlow-condensed font-black text-xs md:text-sm tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Donate Now</a>
      </div>
      
      <!-- Camera Image on Right Side -->
      <div class="flex items-center justify-center md:justify-end flex-shrink-0 p-4 md:pr-4">
        <img src="assets/images/camera-nobg.png" alt="CCTV Camera" class="h-40 md:h-64 w-auto object-contain">
      </div>
    </div>
  </div>
</section>

<!-- COMMUNITY IMPACT -->
<section class="bg-ssop-black py-6 md:py-12">
  <!-- Single Box Container -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24 mb-6 md:mb-10">
    <div class="bg-ssop-black border border-gray-800 rounded p-4 md:p-8">
      <!-- Title -->
      <div class="text-center mb-6 md:mb-8">
        <div class="font-barlow-condensed text-2xl md:text-3xl font-black tracking-wider uppercase text-white">Community Impact</div>
      </div>
      
      <!-- Stats Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 divide-y sm:divide-y-0 sm:divide-x divide-gray-800">
        <!-- 150+ CCTV Cameras -->
        <div class="px-4 md:px-8 py-4 flex items-center gap-4 md:gap-6">
          <img src="assets/icons/cctv_white.png" alt="CCTV" class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-3xl md:text-4xl font-black text-white mb-1 md:mb-2">150+</div>
            <div class="text-xs md:text-sm text-gray-400 uppercase font-barlow-condensed font-black">CCTV Cameras<br>and Growing</div>
          </div>
        </div>
        
        <!-- 1000+ Incidents -->
        <div class="px-4 md:px-8 py-4 flex items-center gap-4 md:gap-6">
          <img src="assets/icons/responsetime.png" alt="Response Time" class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-3xl md:text-4xl font-black text-white mb-1 md:mb-2">1000+</div>
            <div class="text-xs md:text-sm text-gray-400 uppercase font-barlow-condensed font-black">Incidents<br>Responded to</div>
          </div>
        </div>
        
        <!-- 8+ Years -->
        <div class="px-4 md:px-8 py-4 flex items-center gap-4 md:gap-6">
          <img src="assets/icons/community.png" alt="Community" class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-3xl md:text-4xl font-black text-white mb-1 md:mb-2">8+</div>
            <div class="text-xs md:text-sm text-gray-400 uppercase font-barlow-condensed font-black">Years of Active<br>Service</div>
          </div>
        </div>
        
        <!-- Strong Partnerships -->
        <div class="px-4 md:px-8 py-4 flex items-center gap-4 md:gap-6">
          <img src="assets/icons/handshake.png" alt="Partnerships" class="w-12 h-12 md:w-16 md:h-16 flex-shrink-0">
          <div>
            <div class="text-xs md:text-sm text-gray-300 uppercase font-barlow-condensed font-black leading-tight">Strong Partnerships<br>with Other Security<br>Companies & Role<br>Players</div>
          </div>
        </div>
        
        <!-- Testimonial Quote -->
        <div class="px-4 md:px-8 py-4 flex items-center justify-center">
          <div>
            <div class="text-ssop-red text-5xl md:text-7xl leading-none mb-2 md:mb-3">"</div>
            <div class="text-sm md:text-base text-gray-300 italic leading-relaxed mb-3 md:mb-4">SSOP's response time and visibility make a real difference. You can see the change in our area.</div>
            <div class="text-xs md:text-sm text-gray-500">— Constantia Kloof Resident</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Middle Row -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24 mb-6 md:mb-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
      <!-- Stay Connected -->
      <div class="bg-ssop-black border border-gray-800 rounded p-4 md:p-6">
        <div class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-2 md:mb-3">Stay Connected</div>
        <div class="text-xs md:text-sm text-gray-300 mb-3 md:mb-4 leading-relaxed">Join our WhatsApp community for updates, alerts and important info.</div>
        
        <div class="flex justify-center mb-4">
          <div class="relative">
            <div class="text-7xl">📱</div>
            <div class="absolute bottom-0 right-0 bg-green-600 rounded-full p-2">
              <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-6 h-6">
            </div>
          </div>
        </div>
        
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?>" class="bg-green-600 text-white font-barlow-condensed font-black text-xs md:text-sm tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-green-700 transition-colors flex items-center justify-center gap-2 w-full">
          <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-4 h-4 md:w-5 md:h-5"> Join WhatsApp Group
        </a>
      </div>
      
      <!-- Register for Community Projects -->
      <div class="lg:col-span-2 bg-ssop-black border border-gray-800 rounded p-4 md:p-6 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
        <!-- Left Side - Content -->
        <div>
          <div class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-2 md:mb-3">Register for Our Community Projects</div>
          <div class="text-xs md:text-sm text-gray-300 mb-3 md:mb-4 leading-relaxed">Be part of positive change in our community.</div>
          
          <div class="flex justify-around mb-3 md:mb-4">
            <div class="flex flex-col items-center text-center">
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-green-600 flex items-center justify-center mb-1 md:mb-2">
                <img src="assets/icons/care.png" alt="Elderly Support" class="w-9 h-9 md:w-12 md:h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Elderly Support<br>Program</div>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-blue-600 flex items-center justify-center mb-1 md:mb-2">
                <img src="assets/icons/community.png" alt="Youth Development" class="w-9 h-9 md:w-12 md:h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Youth Development<br>Program</div>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-orange-600 flex items-center justify-center mb-1 md:mb-2">
                <img src="assets/icons/community.png" alt="Community Projects" class="w-9 h-9 md:w-12 md:h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Community Projects<br>Program</div>
            </div>
          </div>
          
          <div class="flex justify-center">
            <button class="bg-orange-600 text-white font-barlow-condensed font-black text-xs md:text-sm tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-orange-700 transition-colors">Register Now</button>
          </div>
        </div>
        
        <!-- Right Side - Image -->
        <div class="rounded overflow-hidden h-48 md:h-full flex items-center justify-center">
          <img src="assets/images/community.png" alt="SSOP Team" class="w-full h-full object-cover rounded">
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bottom Row - CTA Cards -->
  <div class="px-4 md:px-8 lg:px-16 xl:px-24">
    <div class="bg-gradient-to-b from-black to-gray-950 border border-gray-800 rounded-lg p-4 md:p-6 grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-700">
      <!-- Report Incident -->
      <div class="px-4 md:px-8 py-6 md:py-0 flex flex-col items-center justify-center text-center">
        <div class="font-barlow-condensed text-base md:text-lg font-black uppercase text-white mb-4 md:mb-6 leading-tight tracking-wide">SSOP Can Only Assist<br>If We Know About It</div>
        <button class="bg-ssop-red text-white font-barlow-condensed font-black text-xs tracking-wider uppercase px-8 md:px-10 py-2 md:py-3 hover:bg-red-700 transition-colors mb-2 md:mb-3 w-full">Report an Incident</button>
        <button class="bg-transparent border border-gray-600 text-white font-barlow-condensed font-black text-xs tracking-wider uppercase px-8 md:px-10 py-2 md:py-3 hover:bg-gray-800 hover:border-white transition-colors w-full">Save Our Number</button>
      </div>
      
      <!-- Thank You -->
      <div class="px-4 md:px-8 py-6 md:py-0 flex flex-col items-center justify-center text-center">
        <div class="font-barlow-condensed text-base md:text-lg font-black uppercase text-white mb-3 md:mb-4 leading-tight tracking-wide">Thank You for Supporting<br>a Safer Roodepoort</div>
        <div class="flex items-center gap-2 md:gap-3 mt-2">
          <div class="text-2xl md:text-4xl italic text-white" style="font-family: 'Brush Script MT', cursive;">Let's do this, together.</div>
          <div class="text-2xl md:text-4xl">❤️</div>
        </div>
      </div>
      
      <!-- Make a Difference -->
      <div class="px-4 md:px-8 py-6 md:py-0 flex items-center justify-center gap-4 md:gap-5">
        <div class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-gradient-to-br from-amber-700 to-amber-900 flex items-center justify-center flex-shrink-0 shadow-lg">
          <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
          </svg>
        </div>
        <div class="flex-1">
          <div class="font-barlow-condensed text-base md:text-lg font-black uppercase text-white mb-1 md:mb-2 leading-tight tracking-wide">Make a Difference Today</div>
          <div class="text-xs text-gray-400 mb-3 md:mb-4 leading-relaxed">Your support helps build safer communities for everyone.</div>
          <a href="https://pay.yoco.com/ssop" target="_blank" rel="noopener noreferrer" class="bg-ssop-red text-white font-barlow-condensed font-black text-xs tracking-wider uppercase px-6 md:px-8 py-2 md:py-3 hover:bg-red-700 transition-colors w-full md:w-auto inline-block text-center">Make a Donation</a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require_once __DIR__ . '/includes/footer.php'; ?>
