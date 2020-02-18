<?php

namespace Crm\Bitrix\Query;

class QueryBuilder
{
    protected int $id;
    protected string $path;
    protected array $fields = [];
    protected array $filter = [];

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public static function make(string $path) : self
    {
        return new static($path);
    }

    public function fields(array $fields) : self
    {
        $this->fields = $fields;

        return $this;
    }

    public function filter($field, $operator, $value = null) : self
    {
        $this->filter[] = [$field, $operator, $value];

        return $this;
    }

    public function id($id) : self
    {
        $this->id = $id;

        return $this;
    }

    public function get() : array
    {
        return [];
    }

    protected function handleQuery() : array
    {
        return [];
    }
}