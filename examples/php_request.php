<?php
### Uses php to echo bookings as JSON ###

$SECRET_URL='';
$ACCESS_TOKEN='';
$CALENDAR_ID='';

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.bookingflix.com/connect/'.$SECRET_URL,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS =>'{
    "ID": '.$CALENDAR_ID.',
    "range": {
        "from": "2023-01-01",
        "to": "2023-12-31"
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer '.$ACCESS_TOKEN
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
