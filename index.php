<?php

use Bitrix\Bitrix24\Repositories\DealBitrix24Repository;
use Bitrix\Bitrix24\Repositories\NotificationBitrix24Repository;

require "vendor/autoload.php";

/**
 * Сделки
 */
$dealRepository = new DealBitrix24Repository();
$deals = $dealRepository->findAll();
foreach ($deals as $deal)
{
    echo $deal->getTitle();
}

/**
 * Уведомления
 */
$notificationRepository = new NotificationBitrix24Repository();

$notificationRepository
    ->to(1)
    ->from("me")
    ->send("asas");