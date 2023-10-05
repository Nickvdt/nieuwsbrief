<?php

$apiKey = ''; // hier komt de sendermail api


$emailData = [
    'from' => [
        'email' => 'njm.vandertol@gmail.com',
        'name' => 'Nick'
    ],
    'to' => [
        [
            'email' => $_POST['email'],
            'name' => $_POST['name'],
        ]
    ],
    'subject' => 'Bedankt voor het abonneren',
    'text' => 'tekstinhoud van de mail.',
    'html' => '<p>Inhoud van de mail.</p>'
];


$headers = [
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json',
];

$emailDataJson = json_encode($emailData);

$ch = curl_init('https://api.mailersend.com/v1/email');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $emailDataJson);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);