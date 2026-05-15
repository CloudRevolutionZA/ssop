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

renderPageHeader(
    'Get Involved',
    'Join Us in Making Roodepoort Safer',
    'Become part of a community-driven safety initiative that is making a real difference every single day.'
);
?>

<!-- MEMBERSHIP CRITERIA -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-6xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Images on Left -->
      <div class="space-y-6">
        <div class="rounded-lg overflow-hidden border-2 border-ssop-red/30 hover:border-ssop-red/60 transition">
          <img src="assets/images/team1.jpg" alt="SSOP Team Members" class="w-full h-auto object-cover">
        </div>
        <div class="rounded-lg overflow-hidden border-2 border-ssop-red/30 hover:border-ssop-red/60 transition">
          <img src="assets/images/team2.jpg" alt="SSOP Team Members" class="w-full h-auto object-cover">
        </div>
      </div>

      <!-- Content on Right -->
      <div>
        <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6">SSOP Membership Criteria</h2>
        
        <p class="text-base text-gray-300 leading-relaxed mb-8">Joining Sectors Special Operations Patrollers (SSOP) requires commitment, accountability, and adherence to strict operational protocols. As a specialised community safety unit, we maintain a high standard of discipline and integrity, ensuring that all members contribute effectively to our mission. To qualify as an SSOP Patroller, applicants must meet the following criteria:</p>
        
        <div class="space-y-3">
          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Minimum Age Requirement</strong> – Applicants must be at least 18 years old.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Clean Criminal Record</strong> – A criminal background check will be conducted; no prior convictions are permitted.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Valid Driver's License (if applicable)</strong> – Required for those who intend to conduct vehicle-based patrols.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Own Reliable Transport</strong> – Patrollers must have their own vehicle for response and operational purposes.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Proof of Residence</strong> – Applicants must reside in Roodepoort or surrounding operational areas.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Physically & Mentally Fit</strong> – Patrolling requires a level of physical and mental readiness to handle high-pressure situations.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Commitment to Training</strong> – New members must undergo mandatory probationary training, including operational protocols, legal guidelines, and safety procedures.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Availability for Patrols</strong> – Members must commit to active participation in patrols, callouts, and operations as needed.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Willingness to Follow Command Structure</strong> – SSOP operates under a clear leadership hierarchy, and all members must adhere to instructions from the Patrol Chairperson and Patrol Leader.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Confidentiality & Integrity</strong> – All SSOP operations require discretion and professionalism, ensuring that information is handled responsibly.</p>
            </div>
          </div>

          <div class="flex gap-3 items-start">
            <span class="text-ssop-red text-xl font-bold shrink-0">✓</span>
            <div>
              <p class="text-gray-300 leading-relaxed"><strong>Experienced</strong> – Must have been part of your local Neighbourhood watch or CPF for at least 3 months or have relevant experience.</p>
            </div>
          </div>
        </div>

        <div class="mt-10 pt-8 border-t border-gray-700">
          <h3 class="font-barlow-condensed text-xl font-black uppercase text-ssop-white mb-4">Strict Vetting & Probationary Process</h3>
          <p class="text-sm text-gray-400 leading-relaxed">All applicants undergo a thorough vetting process, including interviews, qualification verification, and criminal record checks. Once approved, new members enter a minimum one-month probationary period, where they must attend training and participate in patrols under the guidance of senior SSOP members before operating independently.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VETTING & PROBATIONARY PROCESS -->
<section class="bg-ssop-dark px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-16">
      <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Our Process</div>
      <div class="w-12 h-1 bg-ssop-red mx-auto mb-6"></div>
      <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6">Vetting & Probationary Process</h2>
      <p class="text-lg text-gray-300 leading-relaxed max-w-3xl mx-auto">All applicants undergo a thorough vetting process to ensure we maintain the highest standards of integrity and professionalism.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="bg-ssop-dark2 border border-ssop-red/20 p-8 text-center">
        <div class="w-16 h-16 bg-ssop-red/10 rounded-full flex items-center justify-center mx-auto mb-6">
          <span class="text-4xl">📋</span>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-4">Interview & Verification</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Formal interviews with leadership, qualification verification, and reference checks from your Neighbourhood Watch or CPF.</p>
      </div>

      <div class="bg-ssop-dark2 border border-ssop-red/20 p-8 text-center">
        <div class="w-16 h-16 bg-ssop-red/10 rounded-full flex items-center justify-center mx-auto mb-6">
          <span class="text-4xl">🔍</span>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-4">Background Check</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Comprehensive criminal record checks and vetting to ensure all SSOP members meet our strict standards.</p>
      </div>

      <div class="bg-ssop-dark2 border border-ssop-red/20 p-8 text-center">
        <div class="w-16 h-16 bg-ssop-red/10 rounded-full flex items-center justify-center mx-auto mb-6">
          <span class="text-4xl">📅</span>
        </div>
        <h3 class="font-barlow-condensed text-lg font-black uppercase text-ssop-white mb-4">Probationary Period</h3>
        <p class="text-gray-300 text-sm leading-relaxed">Minimum one-month probation with mandatory training, mentorship from senior members, and supervised patrols.</p>
      </div>
    </div>

    <div class="mt-12 bg-ssop-black border border-ssop-red/20 p-8">
      <p class="text-gray-300 leading-relaxed text-center">
        <span class="text-ssop-red font-bold">If you meet the above criteria</span> and are committed to proactive community safety, we encourage you to <a href="contact.php" class="text-ssop-red hover:text-ssop-white transition">apply and become part of SSOP's specialised operations team</a>.
      </p>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
