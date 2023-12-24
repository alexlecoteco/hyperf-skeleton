<?php

namespace App\Services;

use App\Model\Company;
use Hyperf\Resource\Json\JsonResource;
use function Hyperf\Support\make;

class CompanyService
{
    public static function instantiate()
    {
        return make(CompanyService::class);
    }

    public function create(string $legalName, string $document, ?string $fantasyName = null): JsonResource
    {
        return JsonResource::make(Company::createEntity($legalName, $document, $fantasyName));
    }
}
