<?php


Route::prefix('symtel')
    ->name('symtel')
    ->group(function(){
        Route::get('/', [\Davidagoua\Symtel\SymtelController::class, 'index']);
        Route::get('credits/', [\Davidagoua\Symtel\SymtelController::class, 'getCredits']);
    });
