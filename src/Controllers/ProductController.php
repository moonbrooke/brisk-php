<?php

declare(strict_types=1);

namespace App\Controllers;

use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ProductController
{
    public function index(): ResponseInterface
    {
        $stream = Utils::streamFor("List of Products");

        $response = new Response;

        $response = $response->withBody($stream);

        return $response;
    }

    public function show(ServerRequestInterface $request, array $args): ResponseInterface
    {

        $id = $args["id"];

        $stream = Utils::streamFor("Show Product with ID $id");

        $response = new Response;

        $response = $response->withBody($stream);

        return $response;
    }
}
