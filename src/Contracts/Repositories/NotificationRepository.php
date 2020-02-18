<?php


namespace Bitrix\Contracts\Repositories;


interface NotificationRepository
{
    public function to($to) : self;

    public function from() : self;

    public function send () : void;
}