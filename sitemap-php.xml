<?php
header('Content-Type: application/xml; charset=utf-8');
header('X-Robots-Tag: noindex');
$path = __DIR__ . '/sitemap.txt';
if (!is_readable($path)) {
  http_response_code(404);
  echo '<?xml version="1.0" encoding="UTF-8"?><error>missing sitemap.txt</error>';
  exit;
}
readfile($path);
