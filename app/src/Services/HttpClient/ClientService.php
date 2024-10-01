<?php
declare(strict_types=1);

namespace App\Services\HttpClient;

use App\Services\ParameterBagInterface;
use App\Services\HttpClient\Exception\DataEmptyException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ClientService implements ClientServiceInterface
{
    public const OPTIONS_DEFAULTS = ClientServiceInterface::DEFAULT_VALUE;

    /**
     * @var HttpClientInterface
     */
    private $client;

    /**
     * @param ParameterBagInterface $parameterBag
     * @param HttpClientInterface $client
     */
    public function __construct(
        HttpClientInterface $client
    ) {
        $this->client = $client;
    }

    /**
     * @param String $url
     * @return array
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getClient(String $url): ?array
    {
        try{
            $response = $this->client->request(
                'GET',
                $url
            );
            if ($response->getStatusCode() !== 200
                && true === empty($response->getContent())
            ) {
                throw new DataEmptyException('Empty response');
            }
            $responce['statusCode'] = $response->getStatusCode();// $statusCode = 200
            $responce['contentType'] = $response->getHeaders()['content-type'][0];// $contentType = 'application/json'
            $responce['bodyJson'] = $response->getContent();// $content = '{"id":521583, "name":"symfony-docs", ...}'
            $responce['content'] = $response->toArray();// $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
            $responce['headers'] = $response->getHeaders();
        } catch (\Exception $exception) {
            $responce['statusCode'] = self::DEFAULT_VALUE['catch_status'];
        }
        return $responce;
    }
}