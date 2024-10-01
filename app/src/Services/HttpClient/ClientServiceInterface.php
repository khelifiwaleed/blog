<?php
declare(strict_types=1);

namespace App\Services\HttpClient;


interface ClientServiceInterface
{
    public const DEFAULT_VALUE = [
        'success_statue' => [
            'status' => 200,
            'message' => 'OK'
        ],
        'failed_statue' => null,
        'not_found_statue' => [
            404,
            'message' => 'Not Found',
        ],
        'catch_status' => [
            'status' => 500,
            'message' => 'Internal Server Error',
        ],
    ];

    public function getClient(String $url): ?array;
}