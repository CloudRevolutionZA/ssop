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
<section class="bg-ssop-black min-h-screen flex items-center px-16 lg:px-24 py-20 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="absolute inset-0 pointer-events-none"></div>
  
  <div class="relative z-10">
    <h1 class="font-barlow-condensed text-5xl md:text-6xl font-black leading-tight uppercase text-ssop-white mb-2">Safer<br>Communities.<span class="text-ssop-red">Stronger<br>Together.</span></h1>
    <p class="text-base font-light text-gray-300 max-w-lg my-8 leading-relaxed">We are a registered NPC and community safety organisation focused on visibility, rapid response and practical solutions that make Roodepoort a safer place to live, work and raise a family.</p>
    
    <!-- Hero Badges -->
    <div class="flex flex-col gap-6 mb-8">
      <div>
        <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-grey mb-1">👁 Visible</div>
        <div class="font-barlow-condensed text-sm font-black text-ssop-white">We are out there where it matters</div>
      </div>
      <div>
        <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-grey mb-1">⚡ Rapid Response</div>
        <div class="font-barlow-condensed text-sm font-black text-ssop-white">We respond quickly when you need us</div>
      </div>
      <div>
        <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-grey mb-1">🤝 Community Driven</div>
        <div class="font-barlow-condensed text-sm font-black text-ssop-white">Stronger together, safer together</div>
      </div>
      <div>
        <div class="font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-grey mb-1">👥 People First</div>
        <div class="font-barlow-condensed text-sm font-black text-ssop-white">Building safer communities together</div>
      </div>
    </div>
    
    <div class="flex gap-4">
      <a href="tel:<?php echo PHONE_NUMBER; ?>" class="bg-ssop-red text-ssop-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 hover:bg-ssop-red-dark transition-colors flex items-center gap-2"><img src="assets/icons/phone_white.png" alt="Phone" class="w-5 h-5"> Report an Incident</a>
      <a href="get-involved.php" class="border-2 border-ssop-white text-ssop-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 hover:bg-ssop-white hover:text-ssop-black transition-colors">👥 Join as SSOP Member</a>
    </div>
  </div>
</section>

<!-- STATS BAR -->
<div class="bg-ssop-dark2 border-t border-b border-gray-700 grid grid-cols-5 divide-x divide-gray-700">
  <div class="flex items-center gap-3 p-6">
    <img src="assets/icons/responsetime.png" alt="Response Time" class="w-10 h-10 opacity-70">
    <div>
      <div class="font-barlow-condensed text-3xl font-black text-ssop-white">±3.5 MINUTES</div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-grey">Average Response Time</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-6">
    <img src="assets/icons/activeoperationalmembers.png" alt="Operational Members" class="w-10 h-10 opacity-70">
    <div>
      <div class="font-barlow-condensed text-3xl font-black text-ssop-white">28+</div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-grey">Active Operational<br>Members</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-6">
    <img src="assets/icons/headphones_white.png" alt="Operations" class="w-10 h-10 opacity-70">
    <div>
      <div class="font-barlow-condensed text-3xl font-black text-ssop-white">24/7</div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-grey">Operations<br>Command Centre</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-6">
    <img src="assets/icons/registrednpc_white.png" alt="Registered NPC" class="w-10 h-10 opacity-70">
    <div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white leading-tight">Registered NPC</div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-grey">2017/219863/08</div>
    </div>
  </div>
  <div class="flex items-center gap-3 p-6">
    <img src="assets/icons/goal_white.png" alt="Goal" class="w-10 h-10 opacity-70">
    <div>
      <div class="font-barlow-condensed text-3xl font-black text-ssop-white">1 Goal</div>
      <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-grey">Safer Communities<br>Stronger Together</div>
    </div>
  </div>
</div>

<!-- WHAT WE DO -->
<section class="bg-ssop-dark w-full py-20">
  <div class="mb-12 flex items-center gap-8 px-0">
    <div class="flex-1 h-1 bg-ssop-red"></div>
    <div class="text-center px-8 flex-shrink-0">
      <div class="font-barlow-condensed text-lg font-black tracking-widest uppercase text-ssop-grey mb-2">What We Do</div>
    </div>
    <div class="flex-1 h-1 bg-ssop-red"></div>
  </div>
  
  <div class="grid grid-cols-5 divide-x divide-gray-700 border border-gray-700">
    <div class="bg-ssop-black p-10 flex flex-col items-start gap-3 hover:bg-gray-950 transition-colors">
      <img src="assets/images/patrol.png" alt="Active Patrol Operations" style="width: 100%; height: 250px; object-fit: cover;">
      <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white">Active Patrol Operations</div>
      <div class="text-base text-ssop-grey leading-relaxed">High-visibility patrols across our communities to deter crime and respond quickly to incidents.</div>
    </div>
    <div class="bg-ssop-black p-10 flex flex-col items-start gap-3 hover:bg-gray-950 transition-colors">
      <img src="assets/images/controlroom.png" alt="Operations Command Centre" style="width: 100%; height: 250px; object-fit: cover;">
      <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white">Operations Command Centre (OCC)</div>
      <div class="text-base text-ssop-grey leading-relaxed">Our 24/7 OCC receives incidents, monitors our CCTV network and dispatches resources efficiently.</div>
    </div>
    <div class="bg-ssop-black p-10 flex flex-col items-start gap-3 hover:bg-gray-950 transition-colors">
      <img src="assets/images/camera.png" alt="Community CCTV Network" style="width: 100%; height: 250px; object-fit: cover;">
      <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white">Community CCTV Network</div>
      <div class="text-base text-ssop-grey leading-relaxed">Expanding CCTV coverage across Roodepoort through community participation and support.</div>
    </div>
    <div class="bg-ssop-black p-10 flex flex-col items-start gap-3 hover:bg-gray-950 transition-colors">
      <img src="assets/images/emergency.png" alt="Emergency First Response" style="width: 100%; height: 250px; object-fit: cover;">
      <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white">Emergency First Response</div>
      <div class="text-base text-ssop-grey leading-relaxed">Trained first aiders on scene to stabilise and support until EMS arrives.</div>
    </div>
    <div class="bg-ssop-black p-10 flex flex-col items-start gap-3 hover:bg-gray-950 transition-colors">
      <img src="assets/images/community.png" alt="Community Engagement" style="width: 100%; height: 250px; object-fit: cover;">
      <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white">Community Engagement</div>
      <div class="text-base text-ssop-grey leading-relaxed">Building safer communities through communication, awareness and partnerships.</div>
    </div>
  </div>
</section>

<!-- OUR COMMUNITY PROJECTS -->
<section class="bg-ssop-black w-full py-20">
  <div class="mb-12 flex items-center gap-8 px-0">
    <div class="flex-1 h-1 bg-ssop-red"></div>
    <div class="text-center px-8 flex-shrink-0">
      <div class="font-barlow-condensed text-lg font-black tracking-widest uppercase text-ssop-grey mb-2">Our Community Projects</div>
    </div>
    <div class="flex-1 h-1 bg-ssop-red"></div>
  </div>
  
  <div class="grid grid-cols-3 gap-8 px-16 lg:px-24">
    <div class="bg-white rounded-lg overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
      <img src="assets/images/elderlysupport.png" alt="Elderly Support Program" style="width: 100%; height: 200px; object-fit: cover;">
      <div class="p-8 flex flex-col gap-4">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-2xl">❤</div>
          <div class="font-barlow-condensed text-lg font-black uppercase text-green-600">Elderly Support Program</div>
        </div>
        <div class="text-base text-gray-700 leading-relaxed">Supporting our elderly residents through visits, assistance and connection.</div>
        <a href="get-involved.php" class="text-base font-barlow-condensed font-black uppercase tracking-wider text-green-600 hover:opacity-70 transition-opacity mt-auto">Register / Get Assistance →</a>
      </div>
    </div>
    
    <div class="bg-white rounded-lg overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
      <img src="assets/images/youthempowerment.png" alt="Youth Development Program" style="width: 100%; height: 200px; object-fit: cover;">
      <div class="p-8 flex flex-col gap-4">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center text-2xl">⭐</div>
          <div class="font-barlow-condensed text-lg font-black uppercase text-blue-600">Youth Development Program</div>
        </div>
        <div class="text-base text-gray-700 leading-relaxed">Empowering our youth through mentorship, skills development and positive activities.</div>
        <a href="get-involved.php" class="text-base font-barlow-condensed font-black uppercase tracking-wider text-blue-600 hover:opacity-70 transition-opacity mt-auto">Register / Get Involved →</a>
      </div>
    </div>
    
    <div class="bg-white rounded-lg overflow-hidden flex flex-col hover:shadow-lg transition-shadow">
      <img src="assets/images/community.png" alt="Community Projects Program" style="width: 100%; height: 200px; object-fit: cover;">
      <div class="p-8 flex flex-col gap-4">
        <div class="flex items-center gap-3">
          <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center text-2xl">🌱</div>
          <div class="font-barlow-condensed text-lg font-black uppercase text-orange-600">Community Projects Program</div>
        </div>
        <div class="text-base text-gray-700 leading-relaxed">Initiatives that uplift our neighbourhoods and create lasting change.</div>
        <a href="projects.php" class="text-base font-barlow-condensed font-black uppercase tracking-wider text-orange-600 hover:opacity-70 transition-opacity mt-auto">Register / Get Involved →</a>
      </div>
    </div>
  </div>
</section>

<!-- IN COLLABORATION WITH -->
<section class="bg-ssop-dark w-full py-20 border-t border-gray-700">
  <div class="mb-12 flex items-center gap-8 px-0">
    <div class="flex-1 h-1 bg-ssop-red"></div>
    <div class="text-center px-8 flex-shrink-0">
      <div class="font-barlow-condensed text-lg font-black tracking-widest uppercase text-ssop-grey mb-2">In Collaboration With</div>
    </div>
    <div class="flex-1 h-1 bg-ssop-red"></div>
  </div>
  
  <div class="px-16 lg:px-24">
    <div class="flex gap-8 justify-center items-center">
      <?php
      // Display all 8 collaborator logos
      for ($i = 1; $i <= 8; $i++) {
        echo '<div class="flex-shrink-0">';
        echo '<img src="assets/images/collaborator' . $i . '.png" alt="Collaborator ' . $i . '" class="h-32 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity">';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- HOW IT WORKS + OCC -->
<div class="grid grid-cols-2">
  <!-- HOW IT WORKS - Light Side -->
  <div class="bg-gray-100 px-16 py-14 border-r border-gray-300">
    <div class="font-barlow-condensed text-2xl font-black uppercase text-ssop-red mb-8">How It Works</div>
    
    <!-- Steps with Icons -->
    <div class="flex justify-between items-start mb-8">
      <!-- Step 1 -->
      <div class="flex flex-col items-center text-center" style="width: 22%;">
        <div class="w-16 h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-3 p-3">
          <img src="assets/icons/phone.png" alt="Phone" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-sm font-black uppercase text-gray-900 mb-2">Incident<br>Reported</div>
        <div class="text-sm text-gray-600 leading-tight">Call or WhatsApp the OCC with information.</div>
      </div>
      
      <!-- Dotted line -->
      <div class="flex items-start pt-8" style="width: 6%;">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 2 -->
      <div class="flex flex-col items-center text-center" style="width: 22%;">
        <div class="w-16 h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-3 p-3">
          <img src="assets/icons/headphones.png" alt="Headphones" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-sm font-black uppercase text-gray-900 mb-2">OCC Verifies &<br>Dispatches</div>
        <div class="text-sm text-gray-600 leading-tight">Information is verified and the closest unit is dispatched.</div>
      </div>
      
      <!-- Dotted line -->
      <div class="flex items-start pt-8" style="width: 6%;">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 3 -->
      <div class="flex flex-col items-center text-center" style="width: 22%;">
        <div class="w-16 h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-3 p-3">
          <img src="assets/icons/car.png" alt="Car" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-sm font-black uppercase text-gray-900 mb-2">SSOP Unit<br>Responds</div>
        <div class="text-sm text-gray-600 leading-tight">Our team responds rapidly and assesses the situation.</div>
      </div>
      
      <!-- Dotted line -->
      <div class="flex items-start pt-8" style="width: 6%;">
        <div class="border-t-2 border-dotted border-gray-400 w-full"></div>
      </div>
      
      <!-- Step 4 -->
      <div class="flex flex-col items-center text-center" style="width: 22%;">
        <div class="w-16 h-16 rounded-full bg-white border-2 border-ssop-red flex items-center justify-center mb-3 p-3">
          <img src="assets/icons/registerednpc.png" alt="Registered NPC" class="w-full h-full object-contain">
        </div>
        <div class="font-barlow-condensed text-sm font-black uppercase text-gray-900 mb-2">Coordination<br>with Authorities</div>
        <div class="text-sm text-gray-600 leading-tight">We work with state players as needed.</div>
      </div>
    </div>
  </div>
  
  <!-- OPERATIONS COMMAND CENTRE - Dark Side with Image -->
  <div class="bg-ssop-dark grid grid-cols-2 gap-0">
    <div class="px-16 py-14">
      <div class="font-barlow-condensed text-2xl font-black uppercase text-ssop-red mb-2">Operations Command Centre (OCC)</div>
      <div class="font-barlow-condensed text-base font-bold uppercase text-gray-400 mb-6">The Nerve Centre of Our Operations</div>
      
      <div class="text-sm text-gray-300 leading-relaxed mb-8">Our dedicated team of volunteer controllers monitor incidents, our CCTV network and coordinate responses with professionalism and care.</div>
      
      <!-- Contact Buttons -->
      <div class="flex items-center">
        <a href="tel:<?php echo PHONE_NUMBER; ?>" class="flex items-center gap-3 py-4 hover:opacity-80 transition-opacity flex-1">
          <img src="assets/icons/phone_white.png" alt="Phone" class="w-8 h-8">
          <div>
            <div class="text-xs text-gray-400 uppercase tracking-wider font-barlow-condensed font-black">Call</div>
            <div class="font-barlow-condensed font-black text-ssop-white text-lg"><?php echo PHONE_NUMBER; ?></div>
          </div>
        </a>
        
        <div class="h-16 w-px bg-gray-600 mx-6"></div>
        
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?>" class="flex items-center gap-3 py-4 hover:opacity-80 transition-opacity flex-1">
          <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-8 h-8">
          <div>
            <div class="text-xs text-gray-400 uppercase tracking-wider font-barlow-condensed font-black">WhatsApp</div>
            <div class="font-barlow-condensed font-black text-ssop-white text-lg"><?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?></div>
          </div>
        </a>
      </div>
    </div>
    
    <!-- Control Room Image - Full Size -->
    <div class="relative overflow-hidden">
      <img src="assets/images/controlroom.png" alt="Operations Command Centre" class="w-full h-full object-cover">
    </div>
  </div>
</div>

<!-- 3 CALL TO ACTION -->
<div class="bg-ssop-black py-20 px-16 lg:px-24">
  <div class="grid grid-cols-3 gap-8">
    <!-- JOIN AS SSOP MEMBER -->
    <div class="relative overflow-hidden bg-black rounded-lg border border-gray-800 min-h-[400px]">
      <div class="p-8 pr-4 flex flex-col justify-center h-full relative z-10">
        <div class="font-barlow-condensed text-xl font-black uppercase text-ssop-red mb-4">Join as SSOP Member</div>
        <div class="text-sm text-gray-300 mb-6 leading-relaxed max-w-[60%]">Be part of our trained team and help keep your community safe.</div>
        
        <ul class="text-sm text-gray-300 space-y-2 mb-8 max-w-[60%]">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Vetting process</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Training provided</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Structured deployment</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Make a real difference</li>
        </ul>
        
        <a href="#" class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Apply to Join</a>
      </div>
      
      <!-- Guard Image Overlay Right -->
      <div class="absolute right-0 bottom-0 h-full flex items-end justify-end pointer-events-none">
        <img src="assets/images/guard.png" alt="SSOP Guard" class="h-full w-auto object-contain">
      </div>
    </div>
    
    <!-- SUPPORT OUR MISSION -->
    <div class="relative overflow-hidden bg-black rounded-lg border border-gray-800 min-h-[400px]">
      <div class="p-8 pr-4 flex flex-col justify-center h-full relative z-10">
        <div class="font-barlow-condensed text-xl font-black uppercase text-ssop-red mb-4">Support Our Mission</div>
        <div class="text-sm text-gray-300 mb-6 leading-relaxed max-w-[60%]">Your donation helps us continue our operations and projects.</div>
        
        <ul class="text-sm text-gray-300 space-y-2 mb-8 max-w-[60%]">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Operational costs</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Training & equipment</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Community projects</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Emergency support</li>
        </ul>
        
        <a href="#" class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Make a Donation</a>
      </div>
      
      <!-- Heart Image Overlay Right -->
      <div class="absolute right-0 bottom-0 h-full flex items-end justify-end pointer-events-none">
        <img src="assets/images/heart.png" alt="Support" class="h-full w-auto object-contain">
      </div>
    </div>
    
    <!-- DONATE TOWARDS CCTV PROJECT -->
    <div class="relative overflow-hidden bg-black rounded-lg border border-gray-800 min-h-[400px] flex">
      <div class="p-8 pr-4 flex-1 flex flex-col justify-center">
        <div class="font-barlow-condensed text-xl font-black uppercase text-ssop-red mb-4">Donate Towards CCTV Project</div>
        <div class="text-sm text-gray-300 mb-6 leading-relaxed">Help us expand CCTV coverage and secure more streets.</div>
        
        <ul class="text-sm text-gray-300 space-y-2 mb-8">
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> R2,850 per 5MP camera (installation at cost)</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> Cameras donated become the property of SSOP</li>
          <li class="flex items-start gap-2"><span class="text-ssop-red mt-1">✓</span> POPIA compliant</li>
        </ul>
        
        <a href="#" class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-red-700 transition-colors inline-block text-center w-fit">Donate Now</a>
      </div>
      
      <!-- Camera Image on Right Side -->
      <div class="flex items-center justify-end flex-shrink-0 pr-4">
        <img src="assets/images/camera-nobg.png" alt="CCTV Camera" class="h-64 w-auto object-contain">
      </div>
    </div>
  </div>
</div>

<!-- COMMUNITY IMPACT -->
<section class="bg-black py-20">
  <!-- Single Box Container -->
  <div class="px-16 lg:px-24 mb-8">
    <div class="bg-ssop-dark border border-gray-800 rounded p-8">
      <!-- Title -->
      <div class="text-center mb-8">
        <div class="font-barlow-condensed text-3xl font-black tracking-wider uppercase text-white">Community Impact</div>
      </div>
      
      <!-- Stats Grid -->
      <div class="grid grid-cols-5 divide-x divide-gray-800">
        <!-- 150+ CCTV Cameras -->
        <div class="px-8 py-4 flex items-center gap-6">
          <img src="assets/icons/cctv_white.png" alt="CCTV" class="w-16 h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-4xl font-black text-white mb-2">150+</div>
            <div class="text-sm text-gray-400 uppercase font-barlow-condensed font-black">CCTV Cameras<br>and Growing</div>
          </div>
        </div>
        
        <!-- 1000+ Incidents -->
        <div class="px-8 py-4 flex items-center gap-6">
          <img src="assets/icons/responsetime.png" alt="Response Time" class="w-16 h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-4xl font-black text-white mb-2">1000+</div>
            <div class="text-sm text-gray-400 uppercase font-barlow-condensed font-black">Incidents<br>Responded to</div>
          </div>
        </div>
        
        <!-- 8+ Years -->
        <div class="px-8 py-4 flex items-center gap-6">
          <img src="assets/icons/community.png" alt="Community" class="w-16 h-16 flex-shrink-0">
          <div>
            <div class="font-barlow-condensed text-4xl font-black text-white mb-2">8+</div>
            <div class="text-sm text-gray-400 uppercase font-barlow-condensed font-black">Years of Active<br>Service</div>
          </div>
        </div>
        
        <!-- Strong Partnerships -->
        <div class="px-8 py-4 flex items-center gap-6">
          <img src="assets/icons/handshake.png" alt="Partnerships" class="w-16 h-16 flex-shrink-0">
          <div>
            <div class="text-sm text-gray-300 uppercase font-barlow-condensed font-black leading-tight">Strong Partnerships<br>with Other Security<br>Companies & Role<br>Players</div>
          </div>
        </div>
        
        <!-- Testimonial Quote -->
        <div class="px-8 py-4 flex items-center justify-center">
          <div>
            <div class="text-ssop-red text-7xl leading-none mb-3">"</div>
            <div class="text-base text-gray-300 italic leading-relaxed mb-4">SSOP's response time and visibility make a real difference. You can see the change in our area.</div>
            <div class="text-sm text-gray-500">— Constantia Kloof Resident</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Middle Row -->
  <div class="px-16 lg:px-24 mb-8">
    <div class="grid grid-cols-3 gap-8">
      <!-- Stay Connected -->
      <div class="bg-ssop-dark border border-gray-800 rounded p-6">
        <div class="font-barlow-condensed text-2xl font-black uppercase text-ssop-red mb-3">Stay Connected</div>
        <div class="text-sm text-gray-300 mb-4 leading-relaxed">Join our WhatsApp community for updates, alerts and important info.</div>
        
        <div class="flex justify-center mb-4">
          <div class="relative">
            <div class="text-7xl">📱</div>
            <div class="absolute bottom-0 right-0 bg-green-600 rounded-full p-2">
              <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-6 h-6">
            </div>
          </div>
        </div>
        
        <a href="https://wa.me/<?php echo str_replace([' ', '+', '-'], '', PHONE_NUMBER); ?>" class="bg-green-600 text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-green-700 transition-colors flex items-center justify-center gap-2 w-full">
          <img src="assets/icons/whatsapp_white.png" alt="WhatsApp" class="w-5 h-5"> Join WhatsApp Group
        </a>
      </div>
      
      <!-- Register for Community Projects -->
      <div class="col-span-2 bg-ssop-dark border border-gray-800 rounded p-6 grid grid-cols-2 gap-6">
        <!-- Left Side - Content -->
        <div>
          <div class="font-barlow-condensed text-2xl font-black uppercase text-ssop-red mb-3">Register for Our Community Projects</div>
          <div class="text-sm text-gray-300 mb-4 leading-relaxed">Be part of positive change in our community.</div>
          
          <div class="flex justify-around mb-4">
            <div class="flex flex-col items-center text-center">
              <div class="w-20 h-20 rounded-full bg-green-600 flex items-center justify-center mb-2">
                <img src="assets/icons/care.png" alt="Elderly Support" class="w-12 h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Elderly Support<br>Program</div>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="w-20 h-20 rounded-full bg-blue-600 flex items-center justify-center mb-2">
                <img src="assets/icons/community.png" alt="Youth Development" class="w-12 h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Youth Development<br>Program</div>
            </div>
            <div class="flex flex-col items-center text-center">
              <div class="w-20 h-20 rounded-full bg-orange-600 flex items-center justify-center mb-2">
                <img src="assets/icons/community.png" alt="Community Projects" class="w-12 h-12">
              </div>
              <div class="text-xs text-white font-barlow-condensed font-black uppercase">Community Projects<br>Program</div>
            </div>
          </div>
          
          <div class="flex justify-center">
            <button class="bg-orange-600 text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-orange-700 transition-colors">Register Now</button>
          </div>
        </div>
        
        <!-- Right Side - Image -->
        <div class="rounded overflow-hidden h-full flex items-center justify-center">
          <img src="assets/images/community.png" alt="SSOP Team" class="w-11/12 h-5/6 object-cover rounded">
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bottom Row - CTA Cards -->
  <div class="px-16 lg:px-24">
    <div class="bg-ssop-dark border border-gray-800 rounded p-10 grid grid-cols-3 divide-x divide-gray-800">
      <!-- Report Incident -->
      <div class="px-8 flex flex-col justify-center">
        <div class="font-barlow-condensed text-2xl font-black uppercase text-white text-center mb-8 leading-tight">SSOP Can Only Assist<br>If We Know About It</div>
        <button class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 hover:bg-red-700 transition-colors w-full mb-4">Report an Incident</button>
        <button class="bg-transparent border-2 border-white text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-4 hover:bg-white hover:text-black transition-colors w-full">Save Our Number</button>
      </div>
      
      <!-- Thank You -->
      <div class="px-8 flex flex-col items-center justify-center text-center">
        <div class="font-barlow-condensed text-2xl font-black uppercase text-white mb-6">Thank You for Supporting<br>a Safer Roodepoort</div>
        <div class="text-5xl mb-6">❤️</div>
        <div class="text-3xl text-white italic" style="font-family: 'Brush Script MT', cursive;">Let's do this, together.</div>
      </div>
      
      <!-- Make a Difference -->
      <div class="px-8 flex items-center gap-6">
        <div class="w-20 h-20 rounded-full bg-amber-900 flex items-center justify-center flex-shrink-0">
          <img src="assets/icons/care.png" alt="Care" class="w-14 h-14">
        </div>
        <div class="flex-1">
          <div class="font-barlow-condensed text-2xl font-black uppercase text-white mb-3">Make a Difference Today</div>
          <div class="text-sm text-gray-300 mb-4 leading-relaxed">Your support helps build a safer community for everyone</div>
          <button class="bg-ssop-red text-white font-barlow-condensed font-black text-sm tracking-wider uppercase px-8 py-3 hover:bg-red-700 transition-colors">Make a Donation</button>
        </div>
      </div>
    </div>
  </div>
</section>


<?php require_once __DIR__ . '/includes/footer.php'; ?>
