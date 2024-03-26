<?php

namespace Domain\Bid\Dto;

/**
 * Структура экземпляра заявки для сохранения
 */
readonly class BidStoreDto
{
    public function __construct(
        public string $name,
        public string $telephone,
        public string $text,
    )
    {}
}
