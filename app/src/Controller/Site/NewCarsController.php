<?php
declare(strict_types=1);

namespace App\Controller\Site;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Services\HttpClient\ClientServiceInterface;

class NewCarsController extends AbstractController
{
    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    /**
     * @var ClientServiceInterface
     */
    private $httpClient;

    /**
     * @param ParameterBagInterface $parameterBag
     * @param ClientServiceInterface $httpClient
     */
    public function __construct(
        ParameterBagInterface $parameterBag,
        ClientServiceInterface $httpClient
    ) {
        $this->parameterBag = $parameterBag;
        $this->httpClient = $httpClient;
    }


    #[Route('/new/cars', name: 'app_new_cars')]
    public function index(): Response
    {
        $urlNewsCar = $this->parameterBag->get('get_news_car');
        $httpApi = $this->parameterBag->get('httpApi');
        $url = $httpApi.$urlNewsCar['get'];
        $content = $this->httpClient->getClient($url);
        dd($content);
        return $this->render('Site/new_cars/new_cars.html.twig', [
            'data' => $content['content']
        ]);
    }
}
