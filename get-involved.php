<?php
/**
 * Get Involved Page (get-involved.php)
 * Membership and support information
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'Get Involved – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section id="main-content" class="bg-ssop-black py-12 md:py-20 px-4 md:px-8 lg:px-16 xl:px-24 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="max-w-6xl mx-auto">
    <h1 class="font-barlow-condensed text-4xl md:text-6xl font-black uppercase text-white mb-6">GET INVOLVED</h1>
    <p class="text-base md:text-lg text-gray-300 leading-relaxed max-w-2xl">
      Our communities are stronger when we work together. Whether you have time, skills, resources or simply a passion for making a change – there is a place for you at SSOP NPC.
    </p>
  </div>
</section>

<!-- HOW YOU CAN GET INVOLVED -->
<section class="bg-ssop-dark border-t border-b border-gray-800 py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-center text-white mb-12">
      HOW YOU CAN <span class="text-ssop-red">GET INVOLVED</span>
    </h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- Volunteer -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">VOLUNTEER</h3>
        <p class="text-sm text-gray-400 leading-relaxed">Join our team of dedicated volunteers and be the difference in someone's life.</p>
      </div>

      <!-- Donate -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">DONATE</h3>
        <p class="text-sm text-gray-400 leading-relaxed mb-6">Your donations help us fund projects, equipment, training and community initiatives.</p>
        <a href="https://pay.yoco.com/ssop" target="_blank" rel="noopener noreferrer" class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-red-700 transition-colors inline-block">Donate Now</a>
      </div>

      <!-- Partner With Us -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M12.5 7a4 4 0 11-8 0 4 4 0 018 0zM20 8v6M23 11h-6"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">PARTNER WITH US</h3>
        <p class="text-sm text-gray-400 leading-relaxed">Collaborate with us as a business, organisation or other stakeholder to create safer communities.</p>
      </div>

      <!-- Spread The Word -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">SPREAD THE WORD</h3>
        <p class="text-sm text-gray-400 leading-relaxed">Help raise awareness by sharing our mission and encouraging others to get involved.</p>
      </div>

      <!-- Skills & Training -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M22 10v6M2 10l10-5 10 5-10 5z"/>
            <path d="M6 12v5c3 3 9 3 12 0v-5"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">SKILLS & TRAINING</h3>
        <p class="text-sm text-gray-400 leading-relaxed">Share your skills or expertise to help build capacity within our team and communities.</p>
      </div>

      <!-- In-Kind Support -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-20 h-20 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-white mb-4 tracking-wider">IN-KIND SUPPORT</h3>
        <p class="text-sm text-gray-400 leading-relaxed">Support us with goods, services or equipment that can help us achieve our mission.</p>
      </div>

    </div>
  </div>
</section>

<!-- WHO CAN GET INVOLVED -->
<section class="bg-ssop-black py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      
      <!-- Left: Content -->
      <div>
        <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black uppercase text-white mb-8">
          WHO CAN <span class="text-ssop-red">GET INVOLVED</span>?
        </h2>
        
        <ul class="space-y-4">
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Anyone with a passion for safer communities</span>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Individuals who want to volunteer their time</span>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Businesses and organisations</span>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Students and youth</span>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Retired professionals</span>
          </li>
          <li class="flex items-start gap-4">
            <div class="w-8 h-8 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0 mt-1">
              <svg class="w-4 h-4 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
            </div>
            <span class="text-gray-300 text-base leading-relaxed">Everyone who believes in making a positive impact</span>
          </li>
        </ul>
      </div>

      <!-- Right: Team Photo -->
      <div class="h-96 rounded-lg overflow-hidden border-2 border-gray-800">
        <div class="w-full h-full bg-cover bg-center" style="background-image: url('assets/images/team1.jpg');"></div>
      </div>

    </div>
  </div>
</section>

<!-- MAKE AN IMPACT TODAY CTA -->
<section class="bg-ssop-dark border-t border-b border-gray-800 py-16 px-8">
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
            MAKE AN IMPACT <span class="text-ssop-red">TODAY</span>
          </h2>
          <p class="text-sm text-gray-300 leading-relaxed max-w-xl">
            Every action, no matter how small, contributes to building safer, stronger and more united communities. Get involved and be part of the change.
          </p>
        </div>
      </div>

      <div class="text-center lg:text-right">
        <a href="contact.php" class="inline-flex items-center gap-3 bg-ssop-red hover:bg-ssop-red-dark text-white font-barlow-condensed font-black text-base uppercase tracking-wider px-10 py-5 transition-colors mb-3">
          JOIN US TODAY
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none"/>
          </svg>
        </a>
        <p class="text-sm text-gray-500">Together, we are stronger.</p>
      </div>

    </div>
  </div>
</section>

<!-- GET IN TOUCH -->
<section class="bg-ssop-black py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-center text-white mb-12">
      GET <span class="text-ssop-red">IN TOUCH</span>
    </h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
      
      <!-- Call Us -->
      <div class="text-center">
        <div class="flex justify-center mb-6">
          <div class="w-20 h-20 rounded-full border-2 border-ssop-red flex items-center justify-center">
            <svg class="w-10 h-10 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
            </svg>
          </div>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase text-white mb-4 tracking-wider">CALL US</h3>
        <a href="tel:0110242078" class="text-base text-gray-300 hover:text-ssop-red transition-colors block">011 024 2078</a>
        <a href="tel:0796194453" class="text-base text-gray-300 hover:text-ssop-red transition-colors block">079 619 4453</a>
      </div>

      <!-- Email Us -->
      <div class="text-center">
        <div class="flex justify-center mb-6">
          <div class="w-20 h-20 rounded-full border-2 border-ssop-red flex items-center justify-center">
            <svg class="w-10 h-10 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
              <polyline points="22,6 12,13 2,6"/>
            </svg>
          </div>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase text-white mb-4 tracking-wider">EMAIL US</h3>
        <a href="mailto:info@ssop.org.za" class="text-base text-gray-300 hover:text-ssop-red transition-colors break-all">info@ssop.org.za</a>
      </div>

      <!-- Visit Us -->
      <div class="text-center">
        <div class="flex justify-center mb-6">
          <div class="w-20 h-20 rounded-full border-2 border-ssop-red flex items-center justify-center">
            <svg class="w-10 h-10 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
              <circle cx="12" cy="10" r="3"/>
            </svg>
          </div>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase text-white mb-4 tracking-wider">VISIT US</h3>
        <p class="text-base text-gray-300">Johannesburg,<br>South Africa</p>
      </div>

      <!-- Follow Us -->
      <div class="text-center">
        <div class="flex justify-center mb-6">
          <div class="w-20 h-20 rounded-full border-2 border-ssop-red flex items-center justify-center">
            <svg class="w-10 h-10 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"/>
            </svg>
          </div>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase text-white mb-4 tracking-wider">FOLLOW US</h3>
        <div class="flex justify-center gap-3">
          <a href="#" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-ssop-red hover:border-ssop-red transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-ssop-red hover:border-ssop-red transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="#" class="w-10 h-10 rounded-full border border-gray-700 flex items-center justify-center text-gray-400 hover:text-ssop-red hover:border-ssop-red transition-colors">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
