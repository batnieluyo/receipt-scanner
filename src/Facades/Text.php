<?php

namespace TheAi\ReceiptScanner\Facades;

use TheAi\ReceiptScanner\TextLoaderFactory;
use Illuminate\Support\Facades\Facade;

/**
 * @see TextLoaderFactory
 */
class Text extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TextLoaderFactory::class;
    }
}
