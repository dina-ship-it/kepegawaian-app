<?php
require __DIR__ . '/vendor/autoload.php';

$client = new Google\Client();
$client->setAuthConfig('storage/app/google/credentials.json');
$client->addScope(Google\Service\Drive::DRIVE);
$client->setRedirectUri('http://localhost:8000/oauth2callback');
$client->setAccessType('offline');
$client->setPrompt('consent');

echo "Buka URL ini di browser untuk login Google:\n\n";
echo $client->createAuthUrl() . "\n";
