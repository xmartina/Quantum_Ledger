<?php
$site_name = 'Quantum Ledger Financial System';
$site_short_title = 'Secured Investment Platform';
function site_dec(){
    include_once (__DIR__.'/site_dec.php');
}
$site_url = 'https://quantumledger.online/';
$site_link = 'quantumledger.online';
$site_email = 'contact@quantumledger.online';
$login_url = 'https://account.' . $site_link . '?a=login';
$register_url = 'https://account.' . $site_link . '?a=signup';

function support(){
    include_once (__DIR__ . '/support.php');
}


