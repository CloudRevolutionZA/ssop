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

renderPageHeader(
    'Contact Us',
    'Get In Touch With SSOP',
    'Whether you need emergency assistance, have questions about membership, or want to learn more about our services, we are here to help.'
);
?>

<!-- EMERGENCY NOTICE -->
<section class="bg-ssop-red px-6 md:px-16 lg:px-24 py-8">
  <div class="max-w-5xl mx-auto text-center">
    <h2 class="font-barlow-condensed text-2xl font-black uppercase text-white mb-3">🚨 EMERGENCY? CALL NOW</h2>
    <a href="tel:<?php echo PHONE_NUMBER; ?>" class="font-barlow-condensed text-4xl font-black text-white hover:text-ssop-gold transition-colors">
      <?php echo PHONE_DISPLAY; ?>
    </a>
    <p class="text-sm text-white mt-3">For all emergencies, suspicious activity, or immediate assistance</p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="bg-ssop-black px-6 md:px-16 lg:px-24 py-18">
  <div class="max-w-5xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Contact Form -->
      <div>
        <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Send Us a Message</div>
        <div class="w-12 h-1 bg-ssop-red mb-6"></div>
        <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6">Contact Form</h2>
        <p class="text-base text-gray-300 mb-8 leading-relaxed max-w-2xl">Fill out the form below and we'll get back to you within 24 hours.</p>
        
        <?php renderContactForm(); ?>
      </div>

      <!-- Contact Information -->
      <div>
        <div class="inline-block font-barlow-condensed text-xs font-black tracking-widest uppercase text-ssop-red mb-4">Contact Details</div>
        <div class="w-12 h-1 bg-ssop-red mb-6"></div>
        <h2 class="font-barlow-condensed text-4xl md:text-5xl font-black leading-tight uppercase text-ssop-white mb-6">Get In Touch</h2>
        
        <div class="space-y-6 mb-12">
          <div class="bg-ssop-dark2 border-l-4 border-ssop-red p-6">
            <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white mb-2">📞 Emergency Line</div>
            <a href="tel:<?php echo PHONE_NUMBER; ?>" class="text-lg text-ssop-red font-bold hover:text-ssop-red-dark"><?php echo PHONE_DISPLAY; ?></a>
            <p class="text-xs text-gray-500 mt-1">Available 24/7 for all emergencies</p>
          </div>
          
          <div class="bg-ssop-dark2 border-l-4 border-ssop-red p-6">
            <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white mb-2">📧 General Enquiries</div>
            <a href="mailto:info@ssop.co.za" class="text-lg text-ssop-light-grey hover:text-ssop-red">info@ssop.co.za</a>
            <p class="text-xs text-gray-500 mt-1">Response within 24 hours</p>
          </div>
          
          <div class="bg-ssop-dark2 border-l-4 border-ssop-red p-6">
            <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white mb-2">💼 Membership Enquiries</div>
            <a href="mailto:membership@ssop.co.za" class="text-lg text-ssop-light-grey hover:text-ssop-red">membership@ssop.co.za</a>
            <p class="text-xs text-gray-500 mt-1">Join or upgrade your membership</p>
          </div>
          
          <div class="bg-ssop-dark2 border-l-4 border-ssop-red p-6">
            <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white mb-2">📍 Office Location</div>
            <p class="text-base text-ssop-light-grey">Roodepoort, Gauteng</p>
            <p class="text-xs text-gray-500 mt-1">By appointment only</p>
          </div>
        </div>

        <!-- Operating Hours -->
        <div class="bg-gradient-to-br from-ssop-dark to-ssop-dark2 border border-gray-700 p-6">
          <div class="font-barlow-condensed text-sm font-black tracking-wider uppercase text-ssop-white mb-4">⏰ Operating Hours</div>
          <div class="space-y-2 text-sm">
            <div class="flex justify-between text-gray-300">
              <span>Emergency Response:</span>
              <span class="text-ssop-red font-bold">24/7</span>
            </div>
            <div class="flex justify-between text-gray-300">
              <span>Control Room:</span>
              <span class="text-ssop-red font-bold">24/7</span>
            </div>
            <div class="flex justify-between text-gray-300">
              <span>Office Hours:</span>
              <span class="text-ssop-light-grey">Mon-Fri 8am-5pm</span>
            </div>
            <div class="flex justify-between text-gray-300">
              <span>Weekend Office:</span>
              <span class="text-ssop-light-grey">Sat 9am-1pm</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="bg-ssop-dark px-20 py-18">
  <div class="max-w-4xl mx-auto">
    <div class="text-center mb-12">
      <div class="font-barlow-condensed text-xs font-black tracking-wider uppercase text-ssop-red mb-3">Common Questions</div>
      <h2 class="font-barlow-condensed text-3xl font-black uppercase text-ssop-white">Frequently Asked Questions</h2>
    </div>
    
    <div class="space-y-4">
      <div class="bg-ssop-black border border-gray-800 p-6">
        <h3 class="font-barlow-condensed text-lg font-bold text-ssop-white mb-2">What areas do you cover?</h3>
        <p class="text-sm text-gray-400">We cover the greater Roodepoort area including Florida, Constantia Kloof, Willowbrook, Little Falls, Radiokop, and surrounding suburbs.</p>
      </div>
      
      <div class="bg-ssop-black border border-gray-800 p-6">
        <h3 class="font-barlow-condensed text-lg font-bold text-ssop-white mb-2">How quickly do you respond to emergencies?</h3>
        <p class="text-sm text-gray-400">Our average response time is approximately 3.5 minutes. We have multiple patrol vehicles strategically positioned across our coverage area.</p>
      </div>
      
      <div class="bg-ssop-black border border-gray-800 p-6">
        <h3 class="font-barlow-condensed text-lg font-bold text-ssop-white mb-2">Do I need to install specific equipment?</h3>
        <p class="text-sm text-gray-400">No special equipment is required for basic membership. For CCTV integration and alarm monitoring, we can assist with setup and connection to our control room.</p>
      </div>
      
      <div class="bg-ssop-black border border-gray-800 p-6">
        <h3 class="font-barlow-condensed text-lg font-bold text-ssop-white mb-2">Can I cancel my membership?</h3>
        <p class="text-sm text-gray-400">Yes, membership can be cancelled with 30 days written notice. We have no long-term lock-in contracts.</p>
      </div>
      
      <div class="bg-ssop-black border border-gray-800 p-6">
        <h3 class="font-barlow-condensed text-lg font-bold text-ssop-white mb-2">How do I report a non-emergency incident?</h3>
        <p class="text-sm text-gray-400">You can call our office line, send an email, or use the contact form on this page. For anything suspicious or urgent, always call our emergency line.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<?php
renderCTA(
    'Still Have Questions?',
    'Our team is ready to assist you with any queries about our services.',
    'Call Us Now',
    'tel:' . PHONE_NUMBER
);
?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
