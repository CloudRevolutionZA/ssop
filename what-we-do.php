<?php
/**
 * What We Do Page (what-we-do.php)
 * Detailed services and operations information
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'What We Do – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- HERO SECTION -->
<section class="bg-ssop-black py-12 md:py-20 px-4 md:px-8 lg:px-16 xl:px-24 relative overflow-hidden" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/header2.png') center/cover no-repeat;">
  <div class="max-w-6xl mx-auto">
    <h1 class="font-barlow-condensed text-4xl md:text-6xl font-black uppercase text-white mb-6">WHAT WE DO</h1>
    <p class="text-base md:text-lg text-gray-300 leading-relaxed max-w-2xl">
      At SSOP NPC, we take a proactive and collaborative approach to community safety. Our work is driven by prevention, rapid response, and strong partnerships that create safer environments for everyone.
    </p>
  </div>
</section>

<!-- OUR FOCUS SECTION -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-16">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white text-center mb-12">
      OUR <span class="text-ssop-red">FOCUS</span>
    </h2>
    
    <div class="grid grid-cols-1 md:grid-cols-5 divide-y md:divide-y-0 md:divide-x divide-gray-800">
      <!-- Prevent -->
      <div class="p-6 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-xl font-bold uppercase text-white mb-3">PREVENT</h3>
        <p class="text-sm text-gray-400">
          We prevent risks and take proactive steps to identify crime and promote safety in our communities.
        </p>
      </div>
      
      <!-- Respond -->
      <div class="p-6 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-xl font-bold uppercase text-white mb-3">RESPOND</h3>
        <p class="text-sm text-gray-400">
          Our trained first responders are ready to respond quickly to incidents and emergencies.
        </p>
      </div>
      
      <!-- Collaborate -->
      <div class="p-6 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-xl font-bold uppercase text-white mb-3">COLLABORATE</h3>
        <p class="text-sm text-gray-400">
          We collaborate with Law Enforcement, Security Partners, EMS & various other stakeholders.
        </p>
      </div>
      
      <!-- Empower -->
      <div class="p-6 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-xl font-bold uppercase text-white mb-3">EMPOWER</h3>
        <p class="text-sm text-gray-400">
          We empower communities through awareness, education, and active involvement.
        </p>
      </div>
      
      <!-- Improve -->
      <div class="p-6 text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
          </svg>
        </div>
        <h3 class="font-barlow-condensed text-xl font-bold uppercase text-white mb-3">IMPROVE</h3>
        <p class="text-sm text-gray-400">
          We continuously evaluate our efforts to improve safety and create lasting positive change.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- WHAT WE DO IN ACTION SECTION -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-16">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white text-center mb-12">
      WHAT WE DO <span class="text-ssop-red">IN ACTION</span>
    </h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- 24/7 Operational Coordination Centre -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/operations.jpg" alt="Operations Centre" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">24/7 OPERATIONAL COORDINATION CENTRE</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            Our Operations Control Centre (OCC) coordinates all first responder deployments and field operations—24 hours, 7 days a week—to ensure quick and efficient incident management.
          </p>
        </div>
      </div>
      
      <!-- Rapid Response & Patrols -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/patrol.jpg" alt="Patrols" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">RAPID RESPONSE & PATROLS</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            Our first responders conduct tactical foot & vehicle patrols and respond to incidents to deter crime and bring order to communities.
          </p>
        </div>
      </div>
      
      <!-- Community Engagement -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/community.jpg" alt="Community Engagement" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">COMMUNITY ENGAGEMENT</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            We build strong relationships with residents, schools, businesses, schools, and local stakeholders to create safer neighborhoods.
          </p>
        </div>
      </div>
      
      <!-- Emergency Assistance -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/emergency.jpg" alt="Emergency Assistance" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">EMERGENCY ASSISTANCE</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            We provide on-scene assistance during emergencies, including medical incidents, fires, road accidents, and other critical situations.
          </p>
        </div>
      </div>
      
      <!-- Communication & Coordination -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/communication.jpg" alt="Communication" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">COMMUNICATION & COORDINATION</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            We facilitate communication with law enforcement, security providers, EMS and other partners for a coordinated response.
          </p>
        </div>
      </div>
      
      <!-- Awareness & Education -->
      <div class="bg-ssop-black rounded-lg overflow-hidden flex flex-col md:flex-row">
        <img src="/assets/images/education.jpg" alt="Education" class="w-full md:w-1/3 h-48 md:h-auto object-cover">
        <div class="p-6 flex-1 flex flex-col justify-center">
          <div class="flex justify-center md:justify-start mb-4">
            <svg class="w-12 h-12 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
            </svg>
          </div>
          <h3 class="font-barlow-condensed text-lg md:text-xl font-bold uppercase text-white mb-3 text-center md:text-left">AWARENESS & EDUCATION</h3>
          <p class="text-sm text-gray-400 text-center md:text-left">
            We host safety initiatives through community meetings, crime prevention tips, and initiatives that promote a culture of safety.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAKING A REAL IMPACT SECTION -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-16">
  <div class="max-w-7xl mx-auto">
    <h2 class="font-barlow-condensed text-3xl md:text-4xl font-black uppercase text-white mb-4">
      MAKING A REAL <span class="text-ssop-red">IMPACT</span>
    </h2>
    <p class="text-gray-400 text-lg mb-12 max-w-3xl">
      Every patrol, every response, every partnership, and every conversation matters. Together, we're helping build a stronger communities where people can live, work and thrive.
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <!-- Safer Residents -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        </div>
        <p class="font-barlow-condensed text-4xl md:text-5xl font-black text-white mb-2">6,000+</p>
        <p class="text-gray-400 uppercase font-semibold">Safer Residents<br>and Counting</p>
      </div>
      
      <!-- 24/7 Operations -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </div>
        <p class="font-barlow-condensed text-4xl md:text-5xl font-black text-white mb-2">24/7</p>
        <p class="text-gray-400 uppercase font-semibold">Operational<br>Coordination Centre</p>
      </div>
      
      <!-- Dedicated First Responders -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
        </div>
        <p class="font-barlow-condensed text-4xl md:text-5xl font-black text-white mb-2">28+</p>
        <p class="text-gray-400 uppercase font-semibold">Dedicated<br>First Responders</p>
      </div>
      
      <!-- Stronger Together -->
      <div class="text-center">
        <div class="flex justify-center mb-4">
          <svg class="w-16 h-16 text-ssop-red" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M7 11.5V14m0-2.5v-6a1.5 1.5 0 113 0m-3 6a1.5 1.5 0 00-3 0v2a7.5 7.5 0 0015 0v-5a1.5 1.5 0 00-3 0m-6-3V11m0-5.5v-1a1.5 1.5 0 013 0v1m0 0V11m0-5.5a1.5 1.5 0 013 0v3m0 0V11" />
          </svg>
        </div>
        <p class="font-barlow-condensed text-4xl md:text-5xl font-black text-white mb-2">STRONGER</p>
        <p class="text-gray-400 uppercase font-semibold">Together<br>Building Safer Communities</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
