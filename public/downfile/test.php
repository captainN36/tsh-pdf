<?php

function getData($data) {
    $token = $data['token'];
    $url = $data['url'];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Bearer $token"
    ]);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL error: ' . curl_error($ch);
        curl_close($ch);
        return null;
    }

    curl_close($ch);

    $responseData = json_decode($response, true);

    $title = $responseData['data']['data'];
    $count = 1;

    foreach ($title as $key => $item) {
        if (isset($item['title'])) {
            $responseData['data']['data'][$key]['page'] = $count++;
        }
    }

    $dateOfBirth = $responseData['data']['dateOfBirth'];
    $formattedDateOfBirth = date('d/m/Y', strtotime($dateOfBirth));
    $responseData['data']['dateOfBirth'] = $formattedDateOfBirth;
    echo "<pre>";
    var_dump($responseData['data']);die();
    return $responseData['data'];
}

$params = [
    'url' => 'https://tsh.gemduck.tech/api/user/look-up-pdf-test/14b290bf-6262-4eee-ac36-49883a30a4e8',
    'token' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VySWQiOjEwNywicm9sZSI6IkFETUlOIiwiaWF0IjoxNzEzMjUzMjUzLCJleHAiOjE3MTU4NDUyNTN9.Yf9RaaLgfDy2AOhDo5triJSzTrnt6Td3tU9GSBCDOFs'
];
getData($params);