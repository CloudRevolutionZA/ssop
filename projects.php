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

renderPageHeader(
    'Our Projects',
    'Community Safety Initiatives',
    'Beyond security patrols, we invest in projects that build stronger, safer communities for everyone in Roodepoort.'
);
?>

<!-- ACTIVE PROJECTS -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Active Projects</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white">Building Safer Communities</h2>
    </div>
    
    <div class="space-y-12">
      <!-- Project 1 -->
      <div class="bg-ssop-dark2 border border-gray-800 p-8">
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <span class="text-4xl">📹</span>
              <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white">CCTV Expansion Programme</h3>
            </div>
            <p class="text-base text-gray-300 leading-relaxed mb-4">Expanding our network of high-definition CCTV cameras across high-risk areas and main thoroughfares. Each camera is monitored 24/7 by our control room, with AI-powered analytics for improved detection.</p>
            <ul class="space-y-2 text-sm text-gray-400 mb-4">
              <li>✓ 50+ new cameras planned for 2026</li>
              <li>✓ AI-powered number plate recognition</li>
              <li>✓ Integration with existing security infrastructure</li>
              <li>✓ Real-time incident detection and alerts</li>
            </ul>
            <div class="flex gap-3">
              <span class="bg-ssop-red px-3 py-1 text-xs font-bold uppercase">Active</span>
              <span class="bg-ssop-dark px-3 py-1 text-xs">2026 Rollout</span>
            </div>
          </div>
          <div class="flex items-center justify-center">
            <?php renderStatCard('50+', 'New Cameras', 'Coming in 2026'); ?>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="bg-ssop-dark2 border border-gray-800 p-8">
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <span class="text-4xl">👥</span>
              <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white">Neighbourhood Watch Support</h3>
            </div>
            <p class="text-base text-gray-300 leading-relaxed mb-4">Empowering residents to take an active role in community safety through trained neighbourhood watch groups, coordinated with our control room and patrol teams.</p>
            <ul class="space-y-2 text-sm text-gray-400 mb-4">
              <li>✓ Free training for watch captains</li>
              <li>✓ Direct radio communication links</li>
              <li>✓ Monthly safety briefings</li>
              <li>✓ Incident reporting tools</li>
            </ul>
            <div class="flex gap-3">
              <span class="bg-ssop-green px-3 py-1 text-xs font-bold uppercase">Ongoing</span>
              <span class="bg-ssop-dark px-3 py-1 text-xs">15 Active Groups</span>
            </div>
          </div>
          <div class="flex items-center justify-center">
            <?php renderStatCard('15', 'Watch Groups', 'Across Roodepoort'); ?>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="bg-ssop-dark2 border border-gray-800 p-8">
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <span class="text-4xl">🎓</span>
              <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white">Youth Safety Education</h3>
            </div>
            <p class="text-base text-gray-300 leading-relaxed mb-4">Teaching young people personal safety, crime awareness, and emergency response through school visits and community workshops.</p>
            <ul class="space-y-2 text-sm text-gray-400 mb-4">
              <li>✓ School safety workshops</li>
              <li>✓ Stranger danger education</li>
              <li>✓ Emergency contact training</li>
              <li>✓ Online safety awareness</li>
            </ul>
            <div class="flex gap-3">
              <span class="bg-ssop-green px-3 py-1 text-xs font-bold uppercase">Ongoing</span>
              <span class="bg-ssop-dark px-3 py-1 text-xs">10+ Schools</span>
            </div>
          </div>
          <div class="flex items-center justify-center">
            <?php renderStatCard('2000+', 'Students Reached', 'In 2025'); ?>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="bg-ssop-dark2 border border-gray-800 p-8">
        <div class="grid grid-cols-3 gap-8">
          <div class="col-span-2">
            <div class="flex items-center gap-3 mb-4">
              <span class="text-4xl">🚦</span>
              <h3 class="font-barlow-condensed text-2xl font-black uppercase text-ssop-white">School Safety Initiative</h3>
            </div>
            <p class="text-base text-gray-300 leading-relaxed mb-4">Dedicated traffic management and patrol presence at local schools during peak drop-off and collection times to ensure child safety.</p>
            <ul class="space-y-2 text-sm text-gray-400 mb-4">
              <li>✓ Morning and afternoon patrols</li>
              <li>✓ Traffic flow management</li>
              <li>✓ Pedestrian crossing assistance</li>
              <li>✓ Direct emergency contact line</li>
            </ul>
            <div class="flex gap-3">
              <span class="bg-ssop-green px-3 py-1 text-xs font-bold uppercase">Ongoing</span>
              <span class="bg-ssop-dark px-3 py-1 text-xs">Daily Operations</span>
            </div>
          </div>
          <div class="flex items-center justify-center">
            <?php renderStatCard('8', 'Schools Protected', 'Every school day'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FUTURE PROJECTS -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Coming Soon</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white">Future Initiatives</h2>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6\">
      <?php
      $futureProjects = [
          ['icon' => '📱', 'title' => 'Mobile App Development', 'description' => 'Direct panic button, incident reporting, and real-time community alerts in your pocket'],
          ['icon' => '🏘️', 'title' => 'Smart Community Platform', 'description' => 'Digital hub for residents to connect, share information, and coordinate safety efforts'],
          ['icon' => '🚴', 'title' => 'Bike Patrol Units', 'description' => 'Eco-friendly patrols for parks, greenbelts, and pedestrian areas'],
          ['icon' => '🎯', 'title' => 'Crime Hotspot Analysis', 'description' => 'Data-driven deployment of resources to high-risk areas and times']
      ];
      
      foreach ($futureProjects as $project) {
          ?>
          <div class="bg-ssop-black border border-gray-700 p-6">
              <div class="text-3xl mb-3"><?php echo $project['icon']; ?></div>
              <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-2"><?php echo escape($project['title']); ?></h3>
              <p class="text-sm text-gray-400"><?php echo escape($project['description']); ?></p>
          </div>
          <?php
      }
      ?>
    </div>
  </div>
</section>

<!-- IMPACT -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="text-center mb-16">
    <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Our Impact</div>
    <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
    <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white\">Making a Measurable Difference</h2>
  </div>
  
  <?php
  $impactStats = [
      ['number' => '35%', 'label' => 'Crime Reduction', 'description' => 'In member areas since 2023'],
      ['number' => '10,000+', 'label' => 'Incidents Responded', 'description' => 'In the last year'],
      ['number' => '98%', 'label' => 'Member Satisfaction', 'description' => 'Would recommend SSOP'],
      ['number' => 'R2.5M', 'label' => 'Community Investment', 'description' => 'In safety projects 2025']
  ];
  renderStatsGrid($impactStats, 4);
  ?>
</section>

<!-- CTA -->
<?php
renderCTA(
    'Support Our Projects',
    'Your membership directly funds community safety initiatives that benefit everyone.',
    'Join SSOP Today',
    'get-involved.php'
);
?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
