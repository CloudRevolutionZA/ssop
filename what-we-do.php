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

renderPageHeader(
    'Our Services',
    'Comprehensive Community Safety Solutions',
    'We provide integrated security services combining technology, trained personnel, and community engagement for maximum protection.'
);
?>

<!-- CORE SERVICES -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Core Services</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white">How We Protect Your Community</h2>
    </div>
    
    <div class="space-y-12">
      <!-- Service 1 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <div class="text-5xl mb-4">🚔</div>
          <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white mb-4">24/7 Armed Response & Patrols</h3>
          <p class="text-base text-gray-300 leading-relaxed mb-4">Our visible patrol presence acts as a powerful deterrent to criminal activity. We conduct regular patrols through all member areas, with dedicated vehicles and trained officers working around the clock.</p>
          <ul class="space-y-2 text-sm text-gray-400">
            <li>✓ High-visibility branded vehicles</li>
            <li>✓ Random patrol patterns to maximise coverage</li>
            <li>✓ Direct radio link to control room</li>
            <li>✓ Average response time: ±3.5 minutes</li>
          </ul>
        </div>
        <div class="bg-ssop-dark2 border border-gray-800 p-8 text-center">
          <?php renderStatCard('±3.5 min', 'Response Time', 'Industry-leading speed'); ?>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="bg-ssop-dark2 border border-gray-800 p-8 text-center">
          <?php renderStatCard('24/7', 'Monitoring', 'Never off duty'); ?>
        </div>
        <div>
          <div class="text-5xl mb-4">📹</div>
          <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white mb-4">CCTV Monitoring & Control Room</h3>
          <p class="text-base text-gray-300 leading-relaxed mb-4">Our state-of-the-art control room operates 24/7, monitoring CCTV cameras, coordinating patrols, and dispatching rapid response units when needed.</p>
          <ul class="space-y-2 text-sm text-gray-400">
            <li>✓ Real-time CCTV camera monitoring</li>
            <li>✓ Integration with alarm systems</li>
            <li>✓ Professional control room operators</li>
            <li>✓ Incident logging and reporting</li>
          </ul>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
          <div class="text-5xl mb-4">🚨</div>
          <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white mb-4">Emergency Response</h3>
          <p class="text-base text-gray-300 leading-relaxed mb-4">When you call, we respond immediately. Our armed response officers are trained to handle emergencies professionally and effectively.</p>
          <ul class="space-y-2 text-sm text-gray-400">
            <li>✓ Panic button response</li>
            <li>✓ Alarm activation response</li>
            <li>✓ Medical emergency coordination</li>
            <li>✓ Liaison with SAPS when needed</li>
          </ul>
        </div>
        <div class="bg-ssop-dark2 border border-gray-800 p-8 text-center">
          <?php renderStatCard('1000+', 'Monthly Responses', 'Always ready'); ?>
        </div>
      </div>

      <!-- Service 4 -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div class="bg-ssop-dark2 border border-gray-800 p-8 text-center">
          <?php renderStatCard('5000+', 'Properties', 'Under protection'); ?>
        </div>
        <div>
          <div class="text-5xl mb-4">🏠</div>
          <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white mb-4">Property & Vacant Home Checks</h3>
          <p class="text-base text-gray-300 leading-relaxed mb-4">Going away? We'll keep an eye on your property. Our officers conduct regular checks on vacant homes and businesses.</p>
          <ul class="space-y-2 text-sm text-gray-400">
            <li>✓ Regular property inspections</li>
            <li>✓ Perimeter security checks</li>
            <li>✓ Mail collection available</li>
            <li>✓ Immediate notification of issues</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADDITIONAL SERVICES -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Additional Services</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white">Going Beyond Security</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <?php
      $additionalServices = [
          ['icon' => '🚦', 'title' => 'Traffic Management', 'description' => 'School peak hour traffic control and community event management'],
          ['icon' => '👥', 'title' => 'Community Engagement', 'description' => 'Safety workshops, neighbourhood watch support, and crime prevention education'],
          ['icon' => '📊', 'title' => 'Crime Intelligence', 'description' => 'Tracking patterns, coordinating with SAPS, and proactive prevention'],
          ['icon' => '🛡️', 'title' => 'Special Events', 'description' => 'Security for community events, festivals, and gatherings']
      ];
      
      foreach ($additionalServices as $service) {
          renderValueCard($service['icon'], $service['title'], $service['description']);
      }
      ?>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">How It Works</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6">Getting Protected is Easy</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="text-center">
        <div class="bg-ssop-red w-16 h-16 rounded-full flex items-center justify-center text-2xl font-black mx-auto mb-4">1</div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-2">Contact Us</h3>
        <p class="text-sm text-gray-400">Reach out via phone, email, or our contact form</p>
      </div>
      
      <div class="text-center">
        <div class="bg-ssop-red w-16 h-16 rounded-full flex items-center justify-center text-2xl font-black mx-auto mb-4">2</div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-2">Get Setup</h3>
        <p class="text-sm text-gray-400">We'll assess your needs and setup your membership</p>
      </div>
      
      <div class="text-center">
        <div class="bg-ssop-red w-16 h-16 rounded-full flex items-center justify-center text-2xl font-black mx-auto mb-4">3</div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-2">Stay Safe</h3>
        <p class="text-sm text-gray-400">Enjoy peace of mind with 24/7 protection</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<?php
renderCTA(
    'Ready for Premium Protection?',
    'Join SSOP today and experience the difference professional community safety makes.',
    'Get Started',
    'get-involved.php'
);
?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
