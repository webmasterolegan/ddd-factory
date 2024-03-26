<?php

namespace Domain\Bid\Contracts;

use Domain\Bid\Dto\BidStoreDto;

/**
 * Сохранение заявки
 */
interface BidStoreContract
{
    /**
     * Сохранение заявки
     *
     * @param BidStoreDto $BidStoreDto
     *
     * @return void
     */
    public function save(BidStoreDto $BidStoreDto): void;
}
