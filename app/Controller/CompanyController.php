<?php

namespace App\Controller;

use App\Request\CompanyRequest;
use App\Services\CompanyService;
use Psr\Http\Message\ResponseInterface;

class CompanyController extends AbstractController
{
    public function create(CompanyRequest $request): ResponseInterface
    {
        $request->validated();

        return CompanyService::instantiate()->create(
            $request->getLegalName(),
            $request->getDocument(),
            $request->getFantasyName()
        )->toResponse();
    }
}
