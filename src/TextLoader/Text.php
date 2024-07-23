<?php

namespace TheAi\ReceiptScanner\TextLoader;

use TheAi\ReceiptScanner\Contracts\TextLoader;
use TheAi\ReceiptScanner\TextContent;

class Text implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent($data);
    }
}
