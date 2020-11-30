<?php
use GuzzleHttp\Client;
$http_client = new GuzzleHttp\Client();
$res = $http_client->post('https://slazzer.com/api/v1/remove_image_background', [
    'multipart' => [
        [
            'name'     => 'source_image_file ',
            'contents' => fopen('/home/shan/Pictures/Screenshot from 2020-11-25 20-25-21.png', 'r')
        ]
    ],
    'headers' => [
        'API-KEY' => '4ec4a08d5f524009ba3a069ce10ec18d'
    ]
]);
echo $res



?>
