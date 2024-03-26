<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\StoreNewBid;

Route::post('/bid', StoreNewBid::class)->name('bid.create');
