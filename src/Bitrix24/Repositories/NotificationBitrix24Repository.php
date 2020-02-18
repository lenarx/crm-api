<?php

namespace Bitrix\Bitrix24\Repositories;

use Bitrix\Contracts\Repositories\NotificationRepository as NotificationRepositoryInterface;

class NotificationBitrix24Repository implements NotificationRepositoryInterface
{
    public function to($to): NotificationRepositoryInterface
    {
        return $this;
    }

    public function from(): NotificationRepositoryInterface
    {
        return $this;
    }

    public function send(): void
    {
        // TODO: Implement send() method.
    }

}