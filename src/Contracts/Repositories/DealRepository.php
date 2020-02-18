<?php

namespace Crm\Contracts\Repositories;

use Crm\Contracts\Entities\Deal;

interface DealRepository
{
    /**
     * @return array|Deal[]
     */
    public function findAll () : array;

    /**
     * @param $id
     * @return array|Deal|null
     */
    public function findById ($id) : ? array;
}