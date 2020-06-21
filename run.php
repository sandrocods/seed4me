<?php

function request($url, $data = null, $headers = null) {

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    if ($data !== null)
    {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    if ($headers !== null)
    {
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    }
    curl_setopt($curl, CURLOPT_HEADER, true);
    $output = curl_exec($curl);
    $info = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    return array(
        $output,
        $info
    );
}

echo 'seed4me VPN Account 1 year Generator  | Code by Sandro.putraa';
$result = request('https://ghostbin.co/paste/shwmm/raw', null, null);
preg_match_all('/Email : (.*?) \| Password : (.*?) \|/', $result[0], $match);

if (preg_match('/sandro123A/', $result[0])) {
    echo echo '[+] Email : ' . $match[1][rand(1, 2674)] . ' | Password : sandro123A';
}
else
{
    echo 'Standard input is empty';
    die();
}
