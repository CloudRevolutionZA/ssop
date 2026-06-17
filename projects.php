<?php
/**
 * Projects Page (projects.php)
 * SSOP community projects and initiatives
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'Our Projects – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section id="main-content" class="bg-ssop-black py-12 md:py-20 px-4 md:px-8 lg:px-16 xl:px-24 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="max-w-6xl mx-auto">
    <h1 class="font-barlow-condensed text-4xl md:text-6xl font-black uppercase text-white mb-6">OUR PROJECTS</h1>
    <p class="text-base md:text-lg text-gray-300 leading-relaxed max-w-2xl">
      Our projects are designed to prevent crime, respond quickly, engage communities and create safer environments for everyone.
    </p>
  </div>
</section>

<!-- OUR PROJECTS HEADING -->
<section class="bg-ssop-black border-t border-b border-ssop-red py-12 px-8">
  <div class="max-w-7xl mx-auto text-center">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white">
      OUR <span class="text-ssop-red">PROJECTS</span>
    </h2>
  </div>
</section>

<!-- PROJECTS GRID -->
<section class="bg-ssop-black py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">

      <!-- Project 1: Community CCTV -->
      <div class="bg-ssop-dark border border-gray-800 overflow-hidden hover:border-ssop-red transition-colors group">
        <div class="relative h-48 bg-gray-900 overflow-hidden">
          <!-- SSOP Placeholder -->
          <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
            <div class="text-center opacity-30">
              <div class="font-barlow-condensed font-black text-4xl text-white mb-1">SSOP</div>
              <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
            </div>
          </div>
          <!-- Red circular icon -->
          <div class="absolute bottom-4 left-4 w-16 h-16 rounded-full bg-ssop-red flex items-center justify-center z-10">
            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
              <rect x="2" y="7" width="14" height="10" rx="1"/>
              <path d="M16 9l6-3v12l-6-3z"/>
              <circle cx="7" cy="12" r="1.5"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-3 tracking-wide">1. COMMUNITY CCTV PROJECT</h3>
          <p class="text-xs text-gray-400 leading-relaxed mb-4">We install and maintain CCTV cameras in strategic areas and work with the community to monitor and support safer neighbourhoods.</p>
          <ul class="space-y-2">
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Deters crime</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Enhances public safety</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Supports law enforcement</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Creates safer spaces</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Project 2: Elderly Support -->
      <div class="bg-ssop-dark border border-gray-800 overflow-hidden hover:border-ssop-red transition-colors group">
        <div class="relative h-48 bg-gray-900 overflow-hidden">
          <!-- SSOP Placeholder -->
          <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
            <div class="text-center opacity-30">
              <div class="font-barlow-condensed font-black text-4xl text-white mb-1">SSOP</div>
              <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
            </div>
          </div>
          <div class="absolute bottom-4 left-4 w-16 h-16 rounded-full bg-ssop-red flex items-center justify-center z-10">
            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm8 7h-3v14h-2v-6h-6v6H7V9H4V7h16v2z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-3 tracking-wide">2. ELDERLY SUPPORT PROGRAM</h3>
          <p class="text-xs text-gray-400 leading-relaxed mb-4">We provide support, check-ins and assistance to our elderly residents to ensure they feel safe, cared for and supported.</p>
          <ul class="space-y-2">
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Regular check-ins</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Assistance with daily needs</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Companionship & support</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Emergency assistance</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Project 3: Youth Development -->
      <div class="bg-ssop-dark border border-gray-800 overflow-hidden hover:border-ssop-red transition-colors group">
        <div class="relative h-48 bg-gray-900 overflow-hidden">
          <!-- SSOP Placeholder -->
          <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
            <div class="text-center opacity-30">
              <div class="font-barlow-condensed font-black text-4xl text-white mb-1">SSOP</div>
              <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
            </div>
          </div>
          <div class="absolute bottom-4 left-4 w-16 h-16 rounded-full bg-ssop-red flex items-center justify-center z-10">
            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-3 tracking-wide">3. YOUTH DEVELOPMENT PROGRAM</h3>
          <p class="text-xs text-gray-400 leading-relaxed mb-4">We invest in our youth through mentorship, life skills training and positive activities to build stronger leaders of tomorrow.</p>
          <ul class="space-y-2">
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Mentorship & guidance</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Life skills training</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Sport & recreational activities</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Leadership development</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Project 4: Community Projects -->
      <div class="bg-ssop-dark border border-gray-800 overflow-hidden hover:border-ssop-red transition-colors group">
        <div class="relative h-48 bg-gray-900 overflow-hidden">
          <!-- SSOP Placeholder -->
          <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
            <div class="text-center opacity-30">
              <div class="font-barlow-condensed font-black text-4xl text-white mb-1">SSOP</div>
              <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
            </div>
          </div>
          <div class="absolute bottom-4 left-4 w-16 h-16 rounded-full bg-ssop-red flex items-center justify-center z-10">
            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-3 tracking-wide">4. COMMUNITY PROJECTS PROGRAM</h3>
          <p class="text-xs text-gray-400 leading-relaxed mb-4">We run and support community initiatives that bring people together and create cleaner, safer and stronger communities.</p>
          <ul class="space-y-2">
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Community clean-ups</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Safety awareness campaigns</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Public events & initiatives</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Neighbourhood upliftment</span>
            </li>
          </ul>
        </div>
      </div>

      <!-- Project 5: Municipality Support -->
      <div class="bg-ssop-dark border border-gray-800 overflow-hidden hover:border-ssop-red transition-colors group">
        <div class="relative h-48 bg-gray-900 overflow-hidden">
          <!-- SSOP Placeholder -->
          <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
            <div class="text-center opacity-30">
              <div class="font-barlow-condensed font-black text-4xl text-white mb-1">SSOP</div>
              <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
            </div>
          </div>
          <div class="absolute bottom-4 left-4 w-16 h-16 rounded-full bg-ssop-red flex items-center justify-center z-10">
            <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"/>
            </svg>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-3 tracking-wide">5. MUNICIPALITY SUPPORT PROGRAM</h3>
          <p class="text-xs text-gray-400 leading-relaxed mb-4">We work closely with municipalities to support safety initiatives and improve service delivery in our communities.</p>
          <ul class="space-y-2">
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Safety collaboration</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Information sharing</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Joint initiatives</span>
            </li>
            <li class="flex items-start gap-2 text-xs text-gray-400">
              <span class="text-ssop-red mt-0.5">●</span>
              <span>Service delivery support</span>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- THE IMPACT WE CREATE -->
<section class="bg-ssop-black border-t border-b border-ssop-red py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-center text-white mb-12">
      THE IMPACT WE CREATE
    </h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
      
      <!-- Impact 1 -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div class="font-barlow-condensed text-3xl font-black text-white mb-2">6,000+</div>
        <div class="text-xs text-gray-400 uppercase tracking-wider leading-relaxed">SAFER RESIDENTS<br>AND BUSINESSES</div>
      </div>

      <!-- Impact 2 -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
        </div>
        <div class="font-barlow-condensed text-3xl font-black text-white mb-2">24/7</div>
        <div class="text-xs text-gray-400 uppercase tracking-wider leading-relaxed">OPERATION<br>CO-ORDINATION CENTER</div>
      </div>

      <!-- Impact 3 -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
          </svg>
        </div>
        <div class="font-barlow-condensed text-3xl font-black text-white mb-2">28</div>
        <div class="text-xs text-gray-400 uppercase tracking-wider leading-relaxed">DEDICATED<br>FIRST RESPONDERS</div>
      </div>

      <!-- Impact 4 -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0110 0v4"/>
            <circle cx="12" cy="16" r="1"/>
          </svg>
        </div>
        <div class="font-barlow-condensed text-base font-black text-white leading-tight mb-2">RAPID RESPONSE</div>
        <div class="text-xs text-gray-400 uppercase tracking-wider leading-relaxed">& VISIBLE PATROLS<br>DAILY</div>
      </div>

      <!-- Impact 5 -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
            <path d="M13 11l3 3"/>
          </svg>
        </div>
        <div class="font-barlow-condensed text-base font-black text-white leading-tight mb-2">STRONGER<br>TOGETHER</div>
        <div class="text-xs text-gray-400 uppercase tracking-wider leading-relaxed">BUILDING SAFER<br>COMMUNITIES</div>
      </div>

    </div>
  </div>
</section>

<!-- TOGETHER WE CAN DO MORE CTA -->
<section class="bg-ssop-dark py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
      
      <div class="flex items-center gap-8">
        <div class="w-28 h-28 rounded-full border-4 border-ssop-red flex items-center justify-center flex-shrink-0">
          <svg class="w-14 h-14 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div>
          <h2 class="font-barlow-condensed text-4xl font-black uppercase text-white leading-tight mb-4">
            TOGETHER, WE CAN <span class="text-ssop-red">DO MORE</span>
          </h2>
          <p class="text-sm text-gray-300 leading-relaxed max-w-xl">
            Every project we run, every patrol we do and every partnership we build is for one reason – a safer community for all.
          </p>
        </div>
      </div>

      <div class="text-center lg:text-right">
        <a href="get-involved.php" class="inline-flex items-center gap-3 bg-ssop-red hover:bg-ssop-red-dark text-white font-barlow-condensed font-black text-base uppercase tracking-wider px-10 py-5 transition-colors mb-3">
          GET INVOLVED TODAY
          <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none"/>
          </svg>
        </a>
        <p class="text-sm text-gray-500">Be part of the change.</p>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
