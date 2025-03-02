<?php

require __DIR__ . '/vendor/autoload.php';


$archivo = 'email/17129-factura.html'; // Ruta del archivo HTML
$html = file_get_contents($archivo);


$resend = Resend::client('re_UsygUmVi_GheKN2ftXywfTZzgZD3yW7W9');

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


$resend = Resend::client('re_UfWX4xyM_NQ1GTNqaQdV65f6Qf36izBst');

$resend->emails->send([
  'from' => 'Prueba newsletter <onboarding@resend.dev>',
  'to' => ['manueldelavega@zohomail.com'],
  'subject' => 'Layout 1',
  'html' => $html,
]);