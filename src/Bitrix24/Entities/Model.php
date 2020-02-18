<?php

namespace Crm\Bitrix24\Entities;

abstract class Model
{
    protected array $attributes = [];

    public function __construct(array $attributes = [])
    {
        $this->attributes = $attributes;
    }

    protected function getField($field)
    {
        return $this->attributes[$field];
    }

    protected function setField($field, $value) : self
    {
        $this->attributes[$field] = $value;

        return $this;
    }
}