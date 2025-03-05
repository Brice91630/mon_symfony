<?php

namespace App\Services;

use DateTimeImmutable;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class MongoDBService {

    private HttpClientInterface $httpClient;
 
    public function __construct(HttpClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function insertVisit(string $pageName) {
        $this->httpClient->request('POST', 'https://us-east-2.aws.neurelo.com/rest/visits/__one', [
            'headers' => [
                'X-Api-Key' => '-eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6ImFybjphd3M6a21zOnVzLWVhc3QtMjowMzczODQxMTc5ODQ6YWxpYXMvYjJjYWNlYWItQXV0aC1LZXkifQ.eyJlbnZpcm9ubWVudF9pZCI6IjVjOTg3OTVhLWI5NDUtNDg0Zi1iNWE3LWY2NzU2ZWE4MDQwMSIsImdhdGV3YXlfaWQiOiJnd19iMmNhY2VhYi0yYTRlLTQ3YzYtOTlkZS1iNDM3M2I4NWE2MjIiLCJwb2xpY2llcyI6WyJSRUFEIiwiV1JJVEUiLCJVUERBVEUiLCJERUxFVEUiLCJDVVNUT00iXSwiaWF0IjoiMjAyNS0wMy0wNVQxMzoyODo1NC44MzU0OTg2MDNaIiwianRpIjoiYjNkODhjOTAtZWQ3NS00ODkzLTg5YmEtNGM4MGQ2ODlmMzBiIn0.HQpDiSdT6mJsOmH0iOgvIvHLIQcIAyCIok7LiptaHHpR23JjjHyMd-SHwSdoXnAV9HStkTOVvoke0lHlQTNQ-1KiF8HHh9UaLQ7D_RmzJ4Yo2oXRSk7zKPk_Lc7ymZ2j_Ac-Dk1PfXjTdunjijSpxHZZ9dAL51NGQi0iNLEaEN0hqsuBIcAeCB1zdeuDu4S1ypdxi5LwPgPcSTUKzuaPeCqX_ULbIJWJ31m7C-Ew_ZYSqu83AjXv6BNwDakSOpzgEm6Pp9KYfLzqx-uVXnTSQld3zsB5TbdSfBwCoI5OZ4tV4C5iunGBPJD2rnil85i23X3FUz1Y9NZf86zKaNQPOg',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'pageName' => $pageName,
                'visitedAt' => (new DateTimeImmutable())->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}