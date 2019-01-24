<?php
$access_token = 'bwau6hoKRQvjCR1u/LoPM1QPb17YMOemnhmCryH6GLWnleAe3quvbAk61WDKWneBBaDrFSRfbAfKP/5eK6Erq2bEtoqIgXV1ncTAzRFqN2bhUDOof2YjCIHREOn5qsnTZRIirR/04kVgas9VrVXUXwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
