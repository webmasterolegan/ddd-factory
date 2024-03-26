<?php

namespace Domain\Bid\Enums;

use Domain\Bid\Contracts\BidStoreFactoryContract;
use Domain\Bid\Factories\FileBidStoreFactory;
use Domain\Bid\Factories\MainDbBidStoreFactory;

/**
 * Возможные места сохранения заявок
 */
enum BidStoreEnum implements BidStoreFactoryContract
{
    /**
     * Основная база данных
     */
    case MAIN_DB;

    /**
     * Файл
     */
    case FILE;

    /**
     * Создание фабрики
     */
    public function getFactory()
    {
        return match ($this) {
            self::MAIN_DB => new MainDbBidStoreFactory(),
            self::FILE => new FileBidStoreFactory(),

            default => throw new \Exception(message: __('bid.undefined_store', ['store' => $this->name]))
        };
    }
}
