<?php

namespace Crm\Bitrix24\Entities;

use Crm\Contracts\Entities\Department as DepartmentInterface;

class Department extends Model implements DepartmentInterface
{
    public function getId()
    {
        // TODO: Implement getId() method.
    }

    public function getName(): ?string
    {
        // TODO: Implement getName() method.
    }

    public function setName(?string $name = null): DepartmentInterface
    {
        // TODO: Implement setName() method.
    }
}