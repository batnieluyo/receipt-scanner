<?php

namespace TheAi\ReceiptScanner\TextLoader;

use TheAi\ReceiptScanner\Contracts\TextLoader;
use TheAi\ReceiptScanner\TextContent;
use TheAi\ReceiptScanner\TextUtils;
use Illuminate\Support\Facades\Http;

class Web implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        return new TextContent(
            content: TextUtils::cleanHtml(Http::get($data)->throw()->body()),
        );
    }
}
