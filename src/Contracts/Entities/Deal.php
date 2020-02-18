<?php

namespace Crm\Contracts\Entities;

interface Deal
{
    public function getId () : ? int;
    public function getTitle () : ? string;
    public function setTitle ($value = null) : self;
}