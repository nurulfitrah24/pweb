<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');


$route['tentangsaya'] = 'about/saya';
$route['tentangkharisma'] = 'about/kharisma';
$route['desainweb'] = 'about/desainweb';
$route['pweb'] = 'welcome/pweb';

$route['resep'] = 'resep';
$route['resep/batagor'] = 'resep/batagor';
$route['resep/buburmanado'] = 'resep/buburmanado';
$route['resep/keraktelur'] = 'resep/keraktelur';
$route['resep/laksa'] = 'resep/laksa';
$route['resep/pallubasa'] = 'resep/palbas';
$route['resep/rawon'] = 'resep/rawon';
$route['resep/rendang'] = 'resep/rendang';
$route['resep/sopkonro'] = 'resep/sopkonro';
$route['resep/sotobanjar'] = 'resep/sotobanjar';
$route['resep/sotopadang'] = 'resep/sotopadang';
$route['resep/tahutek'] = 'resep/tahutek';

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
?>
