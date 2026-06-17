<?php
/**
 * Header Template
 * Contains the HTML head section and navigation
 */
require_once __DIR__ . '/../config/config.php';

$pageTitle = isset($pageTitle) ? $pageTitle : SITE_NAME . SITE_TITLE_SUFFIX;
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- SEO Meta Tags -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="SSOP NPC - Community safety organisation in Roodepoort. Visible patrols, rapid response, and practical solutions for safer communities.">
  <meta name="keywords" content="community safety, Roodepoort, SSOP, NPC, patrol, security, emergency response, community engagement">
  <meta name="author" content="SSOP NPC">
  <meta name="theme-color" content="#e31e24">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="SSOP NPC - Building safer communities through visibility, rapid response, and collaboration.">
  <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/assets/images/logo.png">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <meta property="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="twitter:description" content="SSOP NPC - Building safer communities through visibility, rapid response, and collaboration.">
  <meta property="twitter:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST']; ?>/assets/images/logo.png">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;600;700;800;900&family=Barlow:wght@300;400;500;600&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'ssop-red': '#e31e24',
            'ssop-red-dark': '#b51519',
            'ssop-black': '#0a0a0a',
            'ssop-dark': '#111111',
            'ssop-dark2': '#1a1a1a',
            'ssop-grey': '#888888',
            'ssop-light-grey': '#cccccc',
            'ssop-white': '#ffffff',
            'ssop-gold': '#f5a623',
            'ssop-green': '#28a745',
          },
          fontFamily: {
            'barlow': ['Barlow', 'sans-serif'],
            'barlow-condensed': ['Barlow Condensed', 'sans-serif'],
          },
        },
      },
    }
  </script>
  
  <style>
    /* Focus styles for accessibility */
    *:focus {
      outline: 2px solid #e31e24;
      outline-offset: 2px;
    }
    
    /* Smooth scrolling */
    html {
      scroll-behavior: smooth;
    }
    
    /* Prevent horizontal overflow */
    body {
      overflow-x: hidden;
    }
    
    /* Better touch target sizes */
    button, a {
      min-height: 44px;
      min-width: 44px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    
    /* Skip to main content link */
    .skip-link {
      position: absolute;
      top: -40px;
      left: 0;
      background: #e31e24;
      color: white;
      padding: 8px 16px;
      text-decoration: none;
      z-index: 100;
      font-weight: bold;
    }
    
    .skip-link:focus {
      top: 0;
    }
  </style>
</head>
<body class="font-barlow bg-ssop-black text-ssop-white overflow-x-hidden">

<!-- Skip to main content for accessibility -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<?php include __DIR__ . '/navigation.php'; ?>
