<?php

use App\Http\Controllers\Api\StoreNewBid;
use Illuminate\Support\Facades\Route;

Route::post('/bid', StoreNewBid::class)->name('bid.create');
