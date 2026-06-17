<?php
/**
 * About Page (about.php)
 * Information about SSOP organisation
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'About Us – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section id="main-content" class="bg-ssop-black py-12 md:py-20 px-4 md:px-8 lg:px-16 xl:px-24 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="max-w-6xl mx-auto">
    <h1 class="font-barlow-condensed text-4xl md:text-6xl font-black uppercase text-white mb-6">ABOUT US</h1>
    <p class="text-base md:text-lg text-gray-300 leading-relaxed max-w-2xl">
      SSOP NPC is a registered non-profit organization dedicated to building safer, stronger communities through collaboration, innovation, and a shared responsibility to protect and uplift every individual.
    </p>
  </div>
</section>

<!-- MISSION, VISION, VALUES & TEAM IMAGE -->
<section class="bg-ssop-black py-12 md:py-16 px-4 md:px-8 lg:px-16 xl:px-24">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:divide-x md:divide-gray-800">
      
      <!-- Left Side: Mission, Vision, and Image -->
      <div class="md:col-span-2 md:pr-8 space-y-8">
        
        <!-- Mission and Vision Row -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:divide-x md:divide-gray-800">
          
          <!-- Mission Box -->
          <div class="md:pr-8">
            <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-white mb-3">
              OUR <span class="text-ssop-red">MISSION</span>
            </h2>
            <div class="w-16 h-1 bg-ssop-red mb-4"></div>
            <div class="w-14 h-14 mb-4 flex items-center justify-center">
              <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              To empower communities by providing the resources, awareness, and support needed to create safer environments for all.
            </p>
          </div>

          <!-- Vision Box -->
          <div class="md:pl-8">
            <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-white mb-3">
              OUR <span class="text-ssop-red">VISION</span>
            </h2>
            <div class="w-16 h-1 bg-ssop-red mb-4"></div>
            <div class="w-14 h-14 mb-4 flex items-center justify-center">
              <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
              </svg>
            </div>
            <p class="text-sm md:text-base text-gray-300 leading-relaxed">
              To be a leading force in community safety, where every neighbourhood is connected, informed, and protected.
            </p>
          </div>

        </div>

        <!-- Team Image -->
        <div>
          <img src="assets/images/community.png" alt="SSOP Team" class="w-full h-64 md:h-96 object-cover rounded-lg" width="800" height="600" loading="lazy">
        </div>

      </div>

      <!-- Right Side: Values Box -->
      <div class="md:pl-8">
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-white mb-6">
          OUR <span class="text-ssop-red">VALUES</span>
        </h2>
        
        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <svg class="w-8 h-8 text-ssop-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </svg>
            <div>
              <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-1">Integrity</h3>
              <p class="text-sm md:text-base text-gray-300">We act with honesty and transparency in all we do.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <svg class="w-8 h-8 text-ssop-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
            </svg>
            <div>
              <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-1">Community</h3>
              <p class="text-sm md:text-base text-gray-300">We believe in the power of unity and working together.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <svg class="w-8 h-8 text-ssop-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
            </svg>
            <div>
              <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-1">Accountability</h3>
              <p class="text-sm md:text-base text-gray-300">We take full responsibility for our actions and our impact.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <svg class="w-8 h-8 text-ssop-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"/>
            </svg>
            <div>
              <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-1">Respect</h3>
              <p class="text-sm md:text-base text-gray-300">We value every individual and promote inclusiveness and dignity.</p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <svg class="w-8 h-8 text-ssop-red flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z"/>
            </svg>
            <div>
              <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-1">Excellence</h3>
              <p class="text-sm md:text-base text-gray-300">We are committed to continuous improvement and excellence in service.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- OUR JOURNEY -->
<section class="bg-ssop-black py-12 md:py-16 px-4 md:px-8 lg:px-16 xl:px-24">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white mb-12">
      OUR <span class="text-ssop-red">JOURNEY</span>
    </h2>

    <!-- Timeline -->
    <div class="relative">
      <!-- Horizontal line connecting circles (desktop only) - stops before last item -->
      <div class="hidden lg:block absolute top-12 h-px bg-gray-700" style="left: 0; right: calc(100% / 6); transform: translateY(-50%);"></div>
      
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 lg:gap-4">
        
        <!-- Jan 2025 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">JAN 2025</div>
          <p class="text-sm text-gray-300">Our journey began as a small handful of volunteers wanting to make a difference.</p>
        </div>

        <!-- Jun 2025 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">JUN 2025</div>
          <p class="text-sm text-gray-300">We registered SSOP NPC as a non-profit organization.</p>
        </div>

        <!-- Aug 2025 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">AUG 2025</div>
          <p class="text-sm text-gray-300">We officially opened the SSOP NPC Office in Roodepoort.</p>
        </div>

        <!-- Sep 2025 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">SEP 2025</div>
          <p class="text-sm text-gray-300">We started the SSOP NPC Community CCTV Project.</p>
        </div>

        <!-- Dec 2025 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">DEC 2025</div>
          <p class="text-sm text-gray-300">We hosted our first Community Day.</p>
        </div>

        <!-- Apr 2026 -->
        <div class="text-left relative">
          <div class="w-20 h-20 mb-4 rounded-full border-2 border-gray-700 bg-ssop-black flex items-center justify-center relative z-10">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.581-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>
            </svg>
          </div>
          <div class="font-barlow-condensed text-base md:text-lg font-black text-ssop-red mb-2">APR 2026</div>
          <p class="text-sm text-gray-300">We launched 3 new community safety projects.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="bg-ssop-black border-t border-b border-gray-800 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 divide-y sm:divide-y-0 sm:divide-x divide-gray-800">
  
  <!-- Volunteers -->
  <div class="flex items-center gap-3 p-4 md:p-6">
    <svg class="w-8 h-8 md:w-10 md:h-10 opacity-70 flex-shrink-0 text-ssop-red" fill="currentColor" viewBox="0 0 20 20">
      <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
    </svg>
    <div>
      <div class="font-barlow-condensed text-xl md:text-3xl font-black text-ssop-white">28+</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Dedicated<br>Volunteers</div>
    </div>
  </div>

  <!-- Support Line -->
  <div class="flex items-center gap-3 p-4 md:p-6">
    <svg class="w-8 h-8 md:w-10 md:h-10 opacity-70 flex-shrink-0 text-ssop-red" fill="currentColor" viewBox="0 0 20 20">
      <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
    </svg>
    <div>
      <div class="font-barlow-condensed text-xl md:text-3xl font-black text-ssop-white">24/7</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Community<br>Support Line</div>
    </div>
  </div>

  <!-- Registered NPC -->
  <div class="flex items-center gap-3 p-4 md:p-6">
    <svg class="w-8 h-8 md:w-10 md:h-10 opacity-70 flex-shrink-0 text-ssop-red" fill="currentColor" viewBox="0 0 20 20">
      <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
    </svg>
    <div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-white leading-tight">Registered NPC</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">2017/019873/08</div>
    </div>
  </div>

  <!-- Residents -->
  <div class="flex items-center gap-3 p-4 md:p-6">
    <svg class="w-8 h-8 md:w-10 md:h-10 opacity-70 flex-shrink-0 text-ssop-red" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
    </svg>
    <div>
      <div class="font-barlow-condensed text-xl md:text-3xl font-black text-ssop-white">6,000+</div>
      <div class="font-barlow-condensed text-xs md:text-sm font-black tracking-wider uppercase text-ssop-grey">Safer Residents<br>and Businesses</div>
    </div>
  </div>

</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
