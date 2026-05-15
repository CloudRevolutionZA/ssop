<?php
/**
 * About Page (about.php)
 * Information about SSOP organisation
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/components.php';

$pageTitle = 'About USP – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';

renderPageHeader(
    'About Our Organisation',
    'SSOP – Making Roodepoort Safer',
    'We are a registered NPC dedicated to community safety through visible presence, rapid response, and practical solutions.'
);
?>

<!-- MISSION SECTION -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-20">
  <div class="max-w-5xl mx-auto">

    <!-- Section Label + Heading -->
    <div class="mb-14">
      <span class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-3">Our Mission</span>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black uppercase text-ssop-white leading-tight mb-6">
        Enhancing Safety Through<br class="hidden md:block"> Proactive Response
      </h2>
      <div class="w-12 h-1 bg-ssop-red mb-8"></div>
      <p class="text-base text-gray-300 leading-relaxed max-w-3xl mb-4">
        SSOP is dedicated to enhancing the safety and security of the Roodepoort community through proactive response, strategic operations, and collaboration with law enforcement and emergency services. Our mission is to create a safer environment by maintaining a structured, disciplined, and community-driven approach to incident response and crime prevention.
      </p>
      <p class="text-base text-gray-300 leading-relaxed max-w-3xl">
        We strive to be a reliable support system for both residents and businesses, ensuring that when emergencies arise, there is a coordinated and effective response. Through vigilance, accountability, and teamwork, SSOP aims to foster a culture where every community member plays a role in building a safer future for Roodepoort.
      </p>
    </div>

    <!-- Three Pillars -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-20">
      <?php
      $pillars = [
          ['icon' => '🎯', 'title' => 'Visibility', 'description' => 'A visible, professional presence across our communities, deterring crime and building confidence.'],
          ['icon' => '⚡', 'title' => 'Response',   'description' => 'Average response time of ±3.5 minutes with 24/7 operations command centre coordination.'],
          ['icon' => '🤝', 'title' => 'Partnership','description' => 'Collaborative work with community members, businesses, and security partners.'],
      ];
      foreach ($pillars as $pillar):
      ?>
        <div class="bg-ssop-dark2 border border-ssop-red/20 hover:border-ssop-red/60 transition-colors duration-200 p-8 flex flex-col gap-3">
          <span class="text-3xl leading-none"><?= $pillar['icon'] ?></span>
          <h3 class="font-barlow-condensed text-xl font-black uppercase text-ssop-white"><?= $pillar['title'] ?></h3>
          <p class="text-sm text-gray-400 leading-relaxed"><?= $pillar['description'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Values -->
    <div>
      <span class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-3">Our Values</span>
      <h3 class="font-barlow-condensed text-3xl font-black uppercase text-ssop-white mb-8">What Guides Us</h3>
      <div class="w-12 h-1 bg-ssop-red mb-10"></div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <?php
        $values = [
            ['icon' => '🛡️', 'title' => 'Professionalism',   'desc' => 'We operate to the highest standards of training, conduct, and service delivery.'],
            ['icon' => '🤝', 'title' => 'Community First',   'desc' => 'We exist to serve our community. Every decision puts the safety and wellbeing of residents first.'],
            ['icon' => '⚡', 'title' => 'Rapid Response',    'desc' => 'When you need us, every second counts. We are committed to fast, effective response.'],
            ['icon' => '💡', 'title' => 'Innovation',        'desc' => 'We constantly improve our systems, technology, and methods to deliver better safety outcomes.'],
        ];
        foreach ($values as $v):
        ?>
          <div class="bg-ssop-dark2 border-l-4 border-ssop-red px-6 py-5 flex gap-4 items-start">
            <span class="text-2xl leading-none mt-0.5 shrink-0"><?= $v['icon'] ?></span>
            <div>
              <div class="font-barlow-condensed text-base font-black uppercase text-ssop-white mb-1"><?= $v['title'] ?></div>
              <p class="text-sm text-gray-400 leading-relaxed"><?= $v['desc'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- OUR GOALS SECTION -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-20">
  <div class="max-w-5xl mx-auto">

    <span class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-3">Our Goals</span>
    <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black uppercase text-ssop-white leading-tight mb-4">
      What We're Working Toward
    </h2>
    <div class="w-12 h-1 bg-ssop-red mb-8"></div>
    <p class="text-base text-gray-300 leading-relaxed max-w-3xl mb-12">
      SSOP is committed to enhancing safety, supporting law enforcement, and fostering a proactive community-driven approach to security in Roodepoort. Our goals focus on crime prevention, emergency response, and strategic collaboration.
    </p>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php
      $goals = [
          ['icon' => '🎯', 'title' => 'Strengthen Community Safety',    'desc' => 'Proactively deter crime, enhance situational awareness, and provide assistance where needed.'],
          ['icon' => '⚡', 'title' => 'Enhance Rapid Response',         'desc' => 'Ensure quick and effective reaction to incidents, emergencies, and security threats.'],
          ['icon' => '🤝', 'title' => 'Support Law Enforcement',        'desc' => 'Work alongside official agencies to improve coordinated efforts and response efficiency.'],
          ['icon' => '🛡️', 'title' => 'Promote Accountability',         'desc' => 'Uphold high standards of conduct, responsibility, and structured operations within SSOP.'],
          ['icon' => '💡', 'title' => 'Encourage Community Engagement', 'desc' => 'Build stronger partnerships with residents and businesses, encouraging participation in safety initiatives.'],
      ];
      foreach ($goals as $g):
      ?>
        <div class="bg-ssop-dark2 border border-ssop-red/20 hover:border-ssop-red/60 transition-colors duration-200 p-7 flex flex-col gap-3">
          <span class="text-3xl leading-none"><?= $g['icon'] ?></span>
          <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white leading-snug"><?= $g['title'] ?></h3>
          <p class="text-sm text-gray-400 leading-relaxed"><?= $g['desc'] ?></p>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- OUR OBJECTIVES SECTION -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-20">
  <div class="max-w-5xl mx-auto">

    <span class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-3">Our Objectives</span>
    <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black uppercase text-ssop-white leading-tight mb-4">
      Creating a Safer Roodepoort
    </h2>
    <div class="w-12 h-1 bg-ssop-red mb-8"></div>
    <p class="text-base text-gray-300 leading-relaxed max-w-3xl mb-10">
      SSOP is committed to creating a safer, more secure Roodepoort through structured operations, proactive response, and community engagement. Our key objectives include:
    </p>

    <div class="space-y-3 mb-10">
      <?php
      $objectives = [
          ['title' => 'Enhancing Public Safety',
           'desc'  => 'Conducting strategic patrols and rapid response initiatives to deter criminal activities and ensure community well-being.'],
          ['title' => 'Supporting Law Enforcement & Emergency Services',
           'desc'  => 'Assisting in incident response, situational awareness, and operational coordination while working within legal frameworks.'],
          ['title' => 'Improving Community Preparedness',
           'desc'  => 'Educating residents and businesses on crime prevention, emergency protocols, and safety best practices to foster a more resilient community.'],
          ['title' => 'Building a Strong & Disciplined Unit',
           'desc'  => 'Ensuring all SSOP members operate with accountability, structure, and professionalism to provide effective assistance when needed.'],
          ['title' => 'Encouraging Community Participation',
           'desc'  => 'Strengthening public involvement by providing real-time updates, safety alerts, and collaboration opportunities through our community groups.'],
      ];
      foreach ($objectives as $i => $obj):
      ?>
        <div class="bg-ssop-dark2 border-l-4 border-ssop-red px-6 py-5 flex gap-5 items-start">
          <span class="font-barlow-condensed text-ssop-red font-black text-sm shrink-0 mt-0.5 w-5 text-right">
            <?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?>
          </span>
          <div>
            <div class="font-barlow-condensed text-sm font-black uppercase text-ssop-white mb-1"><?= htmlspecialchars($obj['title']) ?></div>
            <p class="text-sm text-gray-400 leading-relaxed"><?= htmlspecialchars($obj['desc']) ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="text-base text-gray-300 leading-relaxed max-w-3xl border-t border-ssop-red/20 pt-8">
      By maintaining a proactive, structured, and community-driven approach, SSOP aims to reduce crime risks, enhance emergency response, and contribute to a safer future for all in Roodepoort.
    </p>

  </div>
</section>

<!-- LEADERSHIP SECTION -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-20">
  <div class="max-w-5xl mx-auto">

    <span class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-3">Leadership</span>
    <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black uppercase text-ssop-white leading-tight mb-4">
      SSOP Leadership Team
    </h2>
    <div class="w-12 h-1 bg-ssop-red mb-8"></div>
    <p class="text-base text-gray-300 leading-relaxed max-w-2xl mb-14">
      Our organisation is led by experienced security professionals and community leaders committed to making Roodepoort safer.
    </p>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-5">
      <?php
      $leadership = [
          ['image' => 'assets/images/leonm.png',   'title' => 'SSOP Chairperson',     'name' => 'Leon Marinus',        'email' => 'chairperson@ssop.co.za'],
          ['image' => 'assets/images/leonh.jpg',   'title' => 'Patrol Leader',         'name' => 'Leon Human',          'email' => 'vc1@ssop.co.za'],
          ['image' => 'assets/images/rynob.jpg',   'title' => 'SSOP Treasurer',        'name' => 'Ryno Brett',          'email' => 'treasurer@ssop.co.za'],
          ['image' => 'assets/images/charnec.jpeg','title' => 'Secretary & PRO',       'name' => 'Charne Cornelessen',  'email' => 'secretary@ssop.co.za'],
          ['image' => 'assets/images/rosaliem.jpeg','title' => 'Legal & Compliance',   'name' => 'Rosalie Manning',     'email' => 'legal@ssop.co.za'],
      ];
      foreach ($leadership as $leader):
      ?>
        <div class="bg-ssop-dark2 border border-ssop-red/20 hover:border-ssop-red/60 transition-colors duration-200 p-6 flex flex-col items-center text-center gap-3">
          <img
            src="<?= htmlspecialchars($leader['image']) ?>"
            alt="<?= htmlspecialchars($leader['name']) ?>"
            class="w-20 h-20 rounded-full object-cover border-2 border-ssop-red/40 shrink-0"
          >
          <div class="flex flex-col gap-1 flex-1">
            <h3 class="font-barlow-condensed text-base font-black text-ssop-white leading-snug">
              <?= htmlspecialchars($leader['name']) ?>
            </h3>
            <p class="text-ssop-red text-xs font-bold uppercase tracking-wide leading-snug">
              <?= htmlspecialchars($leader['title']) ?>
            </p>
          </div>
          <a
            href="mailto:<?= htmlspecialchars($leader['email']) ?>"
            class="text-gray-500 text-xs hover:text-ssop-red transition-colors duration-150 break-all mt-auto"
          >
            <?= htmlspecialchars($leader['email']) ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>