<?php declare(strict_types = 1);

namespace App\Controller;

use App\Services\GetMarketService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptocurrencyPortfolioController
{
    protected $getMarketService;

    public function __construct(GetMarketService $getMarketService)
    {
        $this->getMarketService = $getMarketService;
    }

    /**
     * @Route("/itwork")
     */
    public function itWork()
    {
        var_dump('coucou');
        $this->getMarketService->makeRequest();
        return new Response(
            Response::HTTP_OK
            );
    }
}