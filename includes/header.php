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
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
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
</head>
<body class="font-barlow bg-ssop-black text-ssop-white overflow-x-hidden">

<?php include __DIR__ . '/navigation.php'; ?>

<div class="bg-gradient-to-r from-ssop-black via-transparent to-ssop-dark text-right px-10 py-2 text-xs text-gray-500 font-barlow tracking-wide">
  We can only assist if we know about it.
</div>
