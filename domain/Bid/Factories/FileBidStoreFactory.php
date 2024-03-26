<?php

namespace Domain\Bid\Factories;

use Domain\Bid\Contracts\BidStoreContract;
use Domain\Bid\Dto\BidStoreDto;

/**
 * Фабрика сохранения заявки в файл
 */
class FileBidStoreFactory implements BidStoreContract
{
    public function save(BidStoreDto $BidStoreDto): void
    {
    }
}
