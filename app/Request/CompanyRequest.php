<?php

declare(strict_types=1);

namespace App\Request;

use Hyperf\Validation\Request\FormRequest;

class CompanyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'document' => ['max:14', 'min:14', 'required', 'unique:companies', 'string'],
            'legal_name' => ['string', 'required', 'max:120', 'unique:companies'],
            'fantasy_name' => ['nullable', 'string', 'max:120']
        ];
    }

    public function getDocument(): string
    {
        return $this->input("document");
    }

    public function getLegalName(): string
    {
        return $this->input("legal_name");
    }

    public function getFantasyName(): ?string
    {
        return $this->input("fantasy_name");
    }
}
