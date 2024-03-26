<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\StoreNewBidRequest;
use Domain\Bid\Dto\BidStoreDto;
use Domain\Bid\Enums\BidStoreEnum;

/**
 * Контроллер сохранения новых заявок из API (Vue3 фронтенд)
 */
class StoreNewBid
{
    /**
     * Сохранение новой заявки
     */
    public function __invoke(StoreNewBidRequest $request)
    {
        $bidStore = BidStoreEnum::MAIN_DB;
        $bidFactory = $bidStore->getFactory();
        $validated = $request->validated();

        $bidFactory->save(new BidStoreDto(...$validated));

        return response()->json(['success' => true]);
    }
}
