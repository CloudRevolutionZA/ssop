<?php
/**
 * POPIA Compliance Page
 * SSOP NPC POPIA Compliance Information
 */

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/includes/functions.php';

$pageTitle = 'POPIA Compliance – ' . SITE_NAME;
require_once __DIR__ . '/includes/header.php';
?>

<!-- PAGE HEADER -->
<section id="main-content" class="bg-ssop-black py-12 md:py-16 px-4 md:px-8 lg:px-16 xl:px-24">
  <div class="max-w-4xl mx-auto">
    <h1 class="font-barlow-condensed text-3xl md:text-5xl font-black uppercase text-white mb-4">POPIA Compliance</h1>
    <p class="text-gray-400 text-sm">Protection of Personal Information Act Compliance Statement</p>
  </div>
</section>

<!-- CONTENT -->
<section class="bg-ssop-black py-6 md:py-12 px-4 md:px-8 lg:px-16 xl:px-24">
  <div class="max-w-4xl mx-auto">
    
    <div class="space-y-6">
      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Our Commitment to POPIA</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
          SSOP NPC is committed to complying with the Protection of Personal Information Act (POPIA), Act 4 of 2013. We recognize the importance of protecting personal information and upholding the privacy rights of all individuals whose information we process.
        </p>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">What is POPIA?</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
          The Protection of Personal Information Act (POPIA) is South African legislation that regulates how organizations collect, process, store, and share personal information. It aims to protect individuals' privacy while balancing the need for organizations to process information for legitimate purposes.
        </p>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">The 8 Conditions of POPIA</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-4">SSOP NPC adheres to all eight conditions for lawful processing of personal information:</p>
        
        <div class="space-y-4">
          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">1. Accountability</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We have appointed an Information Officer responsible for ensuring POPIA compliance and handling information requests.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">2. Processing Limitation</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We process personal information lawfully, fairly, and only for specific, explicitly defined, and legitimate purposes. We obtain consent where required and process information transparently.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">3. Purpose Specification</h3>
            <p class="text-gray-400 text-sm md:text-base">
              Personal information is collected for specific, explicitly defined, and legitimate purposes related to community safety, including incident response, CCTV monitoring, member management, and coordination with law enforcement.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">4. Further Processing Limitation</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We do not process personal information for purposes beyond those for which it was originally collected, unless we have your consent or are legally required to do so.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">5. Information Quality</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We take reasonable steps to ensure that personal information is complete, accurate, not misleading, and updated where necessary. You have the right to request correction of your information.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">6. Openness</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We maintain clear documentation of our information processing activities and make this information available to data subjects. Our Privacy Policy provides transparent information about our practices.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">7. Security Safeguards</h3>
            <p class="text-gray-400 text-sm md:text-base">
              We implement appropriate technical and organizational measures to secure personal information against loss, damage, unauthorized access, or disclosure. This includes secure storage, access controls, and encryption where appropriate.
            </p>
          </div>

          <div class="bg-ssop-dark border-l-4 border-ssop-red p-4">
            <h3 class="font-barlow-condensed text-base md:text-lg font-bold text-white mb-2">8. Data Subject Participation</h3>
            <p class="text-gray-400 text-sm md:text-base">
              You have the right to access your personal information, request corrections, and object to processing. We respond to such requests in accordance with POPIA requirements.
            </p>
          </div>
        </div>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Your Rights Under POPIA</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-3">As a data subject, you have the following rights:</p>
        <ul class="list-disc list-inside text-gray-400 text-sm md:text-base space-y-2 ml-4">
          <li><strong class="text-white">Right to Access:</strong> Request confirmation of whether we hold your personal information and access to that information</li>
          <li><strong class="text-white">Right to Correction:</strong> Request correction or deletion of inaccurate, irrelevant, excessive, or outdated information</li>
          <li><strong class="text-white">Right to Objection:</strong> Object to the processing of your personal information on reasonable grounds</li>
          <li><strong class="text-white">Right to Deletion:</strong> Request deletion of your information (subject to legal retention requirements)</li>
          <li><strong class="text-white">Right to Complaint:</strong> Lodge a complaint with the Information Regulator if you believe your rights have been infringed</li>
        </ul>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Special Categories of Information</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-3">
          CCTV footage and incident reports may include special personal information. We process such information only when:
        </p>
        <ul class="list-disc list-inside text-gray-400 text-sm md:text-base space-y-2 ml-4">
          <li>Necessary for security and crime prevention purposes</li>
          <li>Required for law enforcement cooperation</li>
          <li>Authorized by law</li>
          <li>We have obtained your explicit consent where required</li>
        </ul>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Third-Party Processing</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
          When we share information with third parties (such as SAPS, emergency services, or partner organizations), we ensure that:
        </p>
        <ul class="list-disc list-inside text-gray-400 text-sm md:text-base space-y-2 ml-4 mt-3">
          <li>The sharing is necessary for community safety purposes</li>
          <li>Recipients are bound by confidentiality obligations</li>
          <li>Information is processed securely</li>
          <li>We maintain records of information shared</li>
        </ul>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Data Retention</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-3">
          We retain personal information only for as long as necessary:
        </p>
        <ul class="list-disc list-inside text-gray-400 text-sm md:text-base space-y-2 ml-4">
          <li>Incident reports: Retained for investigation and record-keeping purposes</li>
          <li>CCTV footage: Typically 30 days, unless required for ongoing investigations</li>
          <li>Member information: For the duration of membership and as required by law</li>
          <li>Financial records: As required by applicable financial regulations</li>
        </ul>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Breach Notification</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
          In the event of a data breach that poses a risk of harm, we will:
        </p>
        <ul class="list-disc list-inside text-gray-400 text-sm md:text-base space-y-2 ml-4 mt-3">
          <li>Notify the Information Regulator as soon as reasonably possible</li>
          <li>Notify affected data subjects where feasible</li>
          <li>Take steps to mitigate potential harm</li>
          <li>Investigate the cause and implement preventive measures</li>
        </ul>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Exercising Your Rights</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-3">
          To exercise any of your rights under POPIA or for any questions about our compliance:
        </p>
        <div class="bg-ssop-dark border border-gray-700 rounded p-4 space-y-2">
          <p class="text-white font-barlow-condensed font-bold">SSOP NPC Information Officer</p>
          <p class="text-gray-400 text-sm">Email: <a href="mailto:occ@ssop.co.za" class="text-ssop-red hover:underline">occ@ssop.co.za</a></p>
          <p class="text-gray-400 text-sm">Phone: <a href="tel:0100210178" class="text-ssop-red hover:underline">010 021 0178</a></p>
          <p class="text-gray-400 text-sm">Address: Wilrogate Centre, Wilropark, Roodepoort, JHB 1724</p>
        </div>
        <p class="text-gray-400 text-sm mt-4">
          We will respond to your request within a reasonable timeframe as prescribed by POPIA (generally within 30 days).
        </p>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Information Regulator</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-3">
          If you believe we have not handled your personal information in accordance with POPIA, you have the right to lodge a complaint with:
        </p>
        <div class="bg-ssop-dark border border-gray-700 rounded p-4 space-y-2">
          <p class="text-white font-barlow-condensed font-bold">Information Regulator (South Africa)</p>
          <p class="text-gray-400 text-sm">Website: <a href="https://www.justice.gov.za/inforeg/" target="_blank" class="text-ssop-red hover:underline">www.justice.gov.za/inforeg</a></p>
          <p class="text-gray-400 text-sm">Email: inforeg@justice.gov.za</p>
          <p class="text-gray-400 text-sm">Complaints: complaints.IR@justice.gov.za</p>
        </div>
      </div>

      <div>
        <h2 class="font-barlow-condensed text-xl md:text-2xl font-black uppercase text-ssop-red mb-3">Updates to This Statement</h2>
        <p class="text-gray-300 text-sm md:text-base leading-relaxed">
          This POPIA Compliance statement is reviewed regularly and updated as necessary to reflect changes in our practices or legal requirements. The current version is always available on our website.
        </p>
      </div>
    </div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
