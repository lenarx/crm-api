<?php


namespace Crm\Contracts\Entities;


interface Department
{
    public function getId ();
    public function getName () : ? string;
    public function setName (?string $name = null) : self;
}