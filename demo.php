<?php
require_once __DIR__.'/vendor/autoload.php';

use ApiAi\Client;

try {
    $client = new Client('74f41bbcb47b43d98c4c2acfd5991950');

    $query = $client->get('query', [
        'query' => 'Hello',
    ]);

    $response = json_decode((string) $query->getBody(), true);
} catch (\Exception $error) {
    echo $error->getMessage();
}


// require_once __DIR__.'/vendor/autoload.php';

// use ApiAi\Client;
// use ApiAi\Model\Query;
// use ApiAi\Method\QueryApi;

// try {
//     $client = new Client('74f41bbcb47b43d98c4c2acfd5991950');
//     $queryApi = new QueryApi($client);

//     $meaning = $queryApi->extractMeaning('Hello', [
//         'sessionId' => '1234567890',
//         'lang' => 'en',
//     ]);
//     $response = new Query($meaning);
// } catch (\Exception $error) {
//     echo $error->getMessage();
// }