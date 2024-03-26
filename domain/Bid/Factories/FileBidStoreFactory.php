<?php

namespace Domain\Bid\Factories;

use Domain\Bid\Dto\BidStoreDto;
use Domain\Bid\Contracts\BidStoreContract;

/**
 * Фабрика сохранения заявки в файл
 */
class FileBidStoreFactory implements BidStoreContract
{
    public function save(BidStoreDto $BidStoreDto): void
    {

    }
}
