<?php
/**
 * Contact Page (contact.php)
 * Contact form and information
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'Contact Us – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section id="main-content" class="bg-ssop-black py-16 md:py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
    <div>
      <h1 class="font-barlow-condensed text-5xl md:text-7xl font-black uppercase text-white leading-none mb-4">CONTACT US</h1>
      <p class="font-barlow-condensed text-2xl md:text-3xl text-ssop-red uppercase mb-6">We're Here to Help.</p>
      <p class="text-base md:text-lg text-gray-300 leading-relaxed mb-4">
        Have a question, want to get involved, or need more information about our services or projects? Get in touch with us – we'd love to hear from you.
      </p>
      <p class="text-base md:text-lg text-gray-300 leading-relaxed">
        Together, we can build safer communities.
      </p>
    </div>
    <div class="relative h-80 lg:h-96 bg-gray-900 rounded-lg overflow-hidden">
      <!-- SSOP Placeholder -->
      <div class="w-full h-full bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
        <div class="text-center opacity-40">
          <div class="font-barlow-condensed font-black text-5xl md:text-6xl text-white mb-2">SSOP</div>
          <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GET IN TOUCH HEADING -->
<div class="bg-ssop-dark border-t border-b border-gray-800 py-12 px-8">
  <div class="max-w-7xl mx-auto text-center relative">
    <div class="flex items-center justify-center gap-8">
      <div class="flex-1 h-px bg-gray-800 max-w-sm"></div>
      <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white whitespace-nowrap">
        GET <span class="text-ssop-red">IN TOUCH</span>
      </h2>
      <div class="flex-1 h-px bg-gray-800 max-w-sm"></div>
    </div>
  </div>
</div>

<!-- CONTACT CARDS -->
<section class="bg-ssop-dark py-12 px-6 md:px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
      
      <!-- Landline -->
      <div class="bg-ssop-black border border-gray-800 p-6 md:p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase tracking-wider text-white mb-4">LANDLINE</h3>
        <a href="tel:0100210178" class="font-barlow-condensed text-xl font-bold text-white hover:text-ssop-red transition-colors block mb-3 no-underline">010 021 0178</a>
        <p class="text-xs text-gray-400 leading-relaxed">Available 24/7 for emergencies and operational support.</p>
      </div>

      <!-- WhatsApp -->
      <div class="bg-ssop-black border border-gray-800 p-6 md:p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase tracking-wider text-white mb-4">WHATSAPP</h3>
        <a href="https://wa.me/27790194931" class="font-barlow-condensed text-xl font-bold text-white hover:text-ssop-red transition-colors block mb-3 no-underline">079 019 4931</a>
        <p class="text-xs text-gray-400 leading-relaxed">Chat with us on WhatsApp for quick assistance and updates.</p>
      </div>

      <!-- Email -->
      <div class="bg-ssop-black border border-gray-800 p-6 md:p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
            <polyline points="22,6 12,13 2,6"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase tracking-wider text-white mb-4">EMAIL</h3>
        <a href="mailto:occ@ssop.co.za" class="font-barlow-condensed text-lg font-bold text-white hover:text-ssop-red transition-colors block mb-3 break-all no-underline">occ@ssop.co.za</a>
        <p class="text-xs text-gray-400 leading-relaxed">We aim to respond to all emails within 24–48 hours.</p>
      </div>

      <!-- Address -->
      <div class="bg-ssop-black border border-gray-800 p-6 md:p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase tracking-wider text-white mb-4">ADDRESS</h3>
        <div class="font-barlow-condensed text-sm font-bold text-white leading-relaxed mb-3">
          SSOP NPC OCC,<br>Wilrogate Centre,<br>Wilropark, Roodepoort,<br>JHB 1724
        </div>
        <p class="text-xs text-gray-400 leading-relaxed">Our Operation Co-Ordination Center (OCC) location.</p>
      </div>

      <!-- OCC 24/7 -->
      <div class="bg-ssop-black border border-gray-800 p-8 text-center hover:border-ssop-red transition-colors">
        <div class="flex justify-center mb-6">
          <svg class="w-16 h-16 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <circle cx="12" cy="12" r="10"/>
            <polyline points="12 6 12 12 16 14"/>
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-base font-black uppercase tracking-wider text-white mb-4">OPERATION<br>CO-ORDINATION CENTER</h3>
        <div class="font-barlow-condensed text-4xl font-black text-ssop-red mb-3">24/7</div>
        <p class="text-xs text-gray-400 leading-relaxed">Our OCC operates 24/7 to coordinate resources and respond effectively.</p>
      </div>

    </div>
  </div>
</section>

<!-- FORM + SERVICE AREA -->
<section class="bg-ssop-black py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
      
      <!-- LEFT: CONTACT FORM -->
      <div>
        <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white leading-tight mb-2">
          SEND US <span class="text-ssop-red">A MESSAGE</span>
        </h2>
        <div class="w-16 h-1 bg-ssop-red mb-8"></div>
        <p class="text-sm text-gray-400 mb-8 leading-relaxed">Fill out the form below and we'll get back to you within 24 hours.</p>

        <form action="process-contact.php" method="POST" class="space-y-5" aria-label="Contact form">
          <div>
            <label for="name" class="sr-only">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name *" required 
              class="w-full bg-transparent border-2 border-gray-800 text-white px-5 py-4 text-base focus:border-ssop-red focus:outline-none placeholder-gray-600 transition-colors rounded">
          </div>
          <div>
            <label for="email" class="sr-only">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email *" required 
              class="w-full bg-transparent border-2 border-gray-800 text-white px-5 py-4 text-base focus:border-ssop-red focus:outline-none placeholder-gray-600 transition-colors rounded">
          </div>
          <div>
            <label for="phone" class="sr-only">Your Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Your Phone Number" 
              class="w-full bg-transparent border-2 border-gray-800 text-white px-5 py-4 text-base focus:border-ssop-red focus:outline-none placeholder-gray-600 transition-colors rounded">
          </div>
          <div>
            <label for="subject" class="sr-only">Subject</label>
            <select id="subject" name="subject" class="w-full bg-ssop-black border-2 border-gray-800 text-gray-400 px-5 py-4 text-base focus:border-ssop-red focus:outline-none transition-colors appearance-none rounded" style="background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%206l5%205%205-5%202%201-7%207-7-7%202-1z%22%20fill%3D%22%23888888%22%2F%3E%3C%2Fsvg%3E'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1rem;">
              <option value="" disabled selected>Subject *</option>
              <option>General Inquiry</option>
              <option>Emergency Assistance</option>
              <option>Membership</option>
              <option>Partnership</option>
              <option>CCTV / Monitoring</option>
              <option>Other</option>
            </select>
          </div>
          <div>
            <label for="message" class="sr-only">Your Message</label>
            <textarea id="message" name="message" placeholder="Your Message *" rows="6" required
              class="w-full bg-transparent border-2 border-gray-800 text-white px-5 py-4 text-base focus:border-ssop-red focus:outline-none placeholder-gray-600 resize-vertical transition-colors rounded"></textarea>
          </div>
          
          <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 pt-2">
            <button type="submit" class="bg-ssop-red hover:bg-ssop-red-dark text-white font-barlow-condensed font-black text-base uppercase tracking-wider px-8 py-4 flex items-center gap-3 transition-colors rounded no-underline">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
              </svg>
              SEND MESSAGE
            </button>
            <p class="text-sm text-gray-600 leading-relaxed">We will get back to you as soon as possible.</p>
          </div>
        </form>
      </div>

      <!-- RIGHT: SERVICE AREA -->
      <div>
        <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white leading-tight mb-2">
          OUR <span class="text-ssop-red">SERVICE AREA</span>
        </h2>
        <div class="w-16 h-1 bg-ssop-red mb-8"></div>

        <h3 class="font-barlow-condensed text-2xl font-black uppercase text-white mb-6">
          OUR <span class="text-ssop-red">SERVICE AREA</span>
        </h3>

        <!-- Map with Coverage Area Overlay -->
        <div class="relative border border-gray-800 h-96 mb-6 overflow-hidden bg-black">
          <!-- Google Maps Embed (Dark Mode, centered on Roodepoort) -->
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115194.35323577708!2d27.8238!3d-26.1624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e959d5e8245e2c3%3A0x424d97b05a3d9f2!2sRoodepoort%2C+South+Africa!5e0!3m2!1sen!2s!4v1234567890123"
            class="absolute inset-0 w-full h-full opacity-60"
            style="border:0;filter:grayscale(100%) brightness(0.6) contrast(1.2);"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="SSOP Service Coverage Map">
          </iframe>
          
          <!-- Dark overlay for better contrast -->
          <div class="absolute inset-0 bg-black/50 pointer-events-none"></div>
          
          <!-- Coverage Area SVG Overlay - Positioned to match map -->
          <svg class="absolute inset-0 w-full h-full pointer-events-none" viewBox="0 0 600 450" preserveAspectRatio="none">
            <!-- Roodepoort approximate boundary - shaped to match actual geographic area -->
            <path d="M 200,140 
                     L 240,115 
                     L 285,105 
                     L 340,110 
                     L 380,130 
                     L 405,155 
                     L 415,190 
                     L 420,230 
                     L 410,270 
                     L 385,300 
                     L 350,320 
                     L 300,330 
                     L 250,330 
                     L 210,315 
                     L 180,285 
                     L 160,240 
                     L 155,195 
                     L 165,165 
                     Z" 
                  fill="rgba(227,30,36,0.25)" 
                  stroke="#e31e24" 
                  stroke-width="4"
                  stroke-linejoin="round"/>
            
            <!-- City Labels with better positioning -->
            <text x="90" y="200" fill="#999999" font-size="14" font-family="Barlow Condensed, sans-serif" font-weight="600" opacity="0.9">KRUGERSDORP</text>
            <text x="440" y="150" fill="#999999" font-size="14" font-family="Barlow Condensed, sans-serif" font-weight="600" opacity="0.9">RANDBURG</text>
            <text x="140" y="360" fill="#999999" font-size="14" font-family="Barlow Condensed, sans-serif" font-weight="600" opacity="0.9">SOWETO</text>
            <text x="450" y="280" fill="#999999" font-size="14" font-family="Barlow Condensed, sans-serif" font-weight="600" opacity="0.9">JOHANNESBURG</text>
            
            <!-- Central Label - Roodepoort -->
            <text x="300" y="225" fill="#ffffff" font-size="56" font-family="Barlow Condensed, sans-serif" font-weight="900" text-anchor="middle" letter-spacing="4">ROODEPOORT</text>
          </svg>
        </div>

        <!-- Emergency Box -->
        <div class="bg-ssop-black border border-gray-800 p-6 flex items-center gap-6">
          <div class="w-16 h-16 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0">
            <svg class="w-8 h-8 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
            </svg>
          </div>
          <div class="flex-1">
            <h4 class="font-barlow-condensed text-base font-black uppercase text-white mb-2 tracking-wide">EMERGENCY?</h4>
            <p class="text-xs text-gray-400 leading-relaxed">If this is an emergency, please call our Operation Co-Ordination Center immediately.</p>
          </div>
          <div class="text-right flex-shrink-0">
            <div class="font-barlow-condensed text-4xl font-black text-ssop-red leading-none mb-1">24/7</div>
            <a href="tel:0100210178" class="font-barlow-condensed text-base font-bold text-white hover:text-ssop-red transition-colors block">010 021 0178</a>
            <a href="tel:0790194931" class="font-barlow-condensed text-base font-bold text-white hover:text-ssop-red transition-colors block">079 019 4931</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- LET'S WORK TOGETHER -->
<section class="bg-ssop-dark border-t border-gray-800 py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <div class="flex items-center gap-8">
        <div class="w-24 h-24 rounded-full border-2 border-ssop-red flex items-center justify-center flex-shrink-0">
          <svg class="w-12 h-12 text-ssop-red" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>
          </svg>
        </div>
        <div>
          <h2 class="font-barlow-condensed text-4xl font-black uppercase text-white leading-tight mb-4">
            LET'S WORK <span class="text-ssop-red">TOGETHER</span>
          </h2>
          <p class="text-sm text-gray-300 leading-relaxed">
            Partnerships and collaboration make our communities stronger. Whether you're a resident, business, organisation or stakeholder, we welcome the opportunity to connect and make a difference.
          </p>
        </div>
      </div>
      <div class="h-64 lg:h-80 bg-gradient-to-br from-gray-800 to-gray-900 border border-gray-800 rounded-lg overflow-hidden flex items-center justify-center">
        <!-- SSOP Placeholder -->
        <div class="text-center opacity-40">
          <div class="font-barlow-condensed font-black text-5xl md:text-6xl text-white mb-2">SSOP</div>
          <div class="font-barlow-condensed font-bold text-xs tracking-widest uppercase text-ssop-red">Community Volunteer First Responder</div>
        </div>
        <div class="text-center opacity-30">
          <div class="font-barlow-condensed font-black text-5xl text-white mb-2">SSOP</div>
          <div class="font-barlow-condensed font-bold text-sm tracking-widest uppercase text-ssop-red">Community Team</div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
