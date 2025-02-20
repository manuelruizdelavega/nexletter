<?php

require __DIR__ . '/vendor/autoload.php';

$resend = Resend::client('re_UsygUmVi_GheKN2ftXywfTZzgZD3yW7W9');

$archivo = 'layout/layout-1.html'; // Ruta del archivo HTML
$html = file_get_contents($archivo);

$resend->emails->send([
  'from' => 'Prueba newsletter <onboarding@resend.dev>',
  'to' => ['manuelruizdelavega@gmail.com'],
  'subject' => 'Layout 1',
  'html' => $html,
]);




$resend = Resend::client('re_j2dFbUDt_749pkq311teSq2ioUCY212Q7');



$resend->emails->send([
  'from' => 'Prueba newsletter <onboarding@resend.dev>',
  'to' => ['manuel@agrinewsgroup.com'],
  'subject' => 'Layout 1',
  'html' => $html,
]);