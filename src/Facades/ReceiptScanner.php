<?php

namespace TheAi\ReceiptScanner\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TheAi\ReceiptScanner\ReceiptScanner
 */
class ReceiptScanner extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \TheAi\ReceiptScanner\ReceiptScanner::class;
    }
}
