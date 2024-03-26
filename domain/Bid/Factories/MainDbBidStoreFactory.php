<?php

namespace Domain\Bid\Factories;

use Domain\Bid\Contracts\BidStoreContract;
use Domain\Bid\Dto\BidStoreDto;
use Domain\Bid\Models\Bid;

/**
 * Фабрика сохранения заявки в основную базу приложения
 */
class MainDbBidStoreFactory implements BidStoreContract
{
    public function save(BidStoreDto $BidStoreDto): void
    {
        Bid::create((array) $BidStoreDto);
    }
}
