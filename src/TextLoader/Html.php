<?php

namespace TheAi\ReceiptScanner\TextLoader;

use TheAi\ReceiptScanner\Contracts\TextLoader;
use TheAi\ReceiptScanner\TextContent;
use TheAi\ReceiptScanner\TextUtils;

class Html implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent(
            TextUtils::cleanHtml($data)
        );
    }
}
