<?php
header('Content-Type: application/xml; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('Cache-Control: public, max-age=300');
header('X-Robots-Tag: noindex');
$path = __DIR__ . '/sitemap.txt';
if (!is_readable($path)) {
  http_response_code(404);
  echo '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';
  exit;
}
readfile($path);
