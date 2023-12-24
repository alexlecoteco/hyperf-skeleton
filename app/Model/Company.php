<?php

declare(strict_types=1);

namespace App\Model;

use Hyperf\DbConnection\Model\Model;

/**
 */
class Company extends Model
{
    /**
     * The table associated with the model.
     */
    protected ?string $table = 'companies';

    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'fantasy_name',
        'legal_name',
        'document'
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected array $casts = [
        'id' => 'string',
        'fantasy_name' => 'string',
        'legal_name' => 'string',
        'document' => 'integer'
    ];

    public static function createEntity(
        string $legalName,
        string $document,
        ?string $fantasyName = null
    ): \Hyperf\Database\Model\Model|Company
    {
        return Company::create(
            [
                'legal_name' => "$legalName",
                'document' => "$document",
                'fantasy_name' => "$fantasyName",
            ]
        );
    }
}
