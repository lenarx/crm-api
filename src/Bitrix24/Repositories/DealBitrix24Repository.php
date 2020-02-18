<?php

namespace Bitrix\Bitrix24\Repositories;

use Crm\Contracts\Entities\Deal;
use Crm\Contracts\Repositories\DealRepository as DealRepositoryInterface;

class DealBitrix24Repository implements DealRepositoryInterface
{
    /**
     * @return array|Deal[]
     */
    public function findAll(): array
    {
        // TODO: Implement findAll() method.
    }

    public function findById($id): ?array
    {
        // TODO: Implement findById() method.
    }
}