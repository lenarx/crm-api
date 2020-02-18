<?php

namespace Crm\Bitrix24\Entities;

use Crm\Contracts\Entities\Deal as DealInterface;

class Deal extends Model implements DealInterface
{
    public function getId(): ?int
    {
        return $this->getField("id");
    }

    public function getTitle(): ?string
    {
        return $this->getField("title");
    }

    /**
     * @param null $value
     * @return DealInterface
     */
    public function setTitle($value = null): DealInterface
    {
        return $this->setField("title", $value);
    }
}