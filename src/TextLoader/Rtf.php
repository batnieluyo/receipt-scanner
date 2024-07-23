<?php

namespace TheAi\ReceiptScanner\TextLoader;

use TheAi\ReceiptScanner\Contracts\TextLoader;
use TheAi\ReceiptScanner\TextContent;
use Jstewmc\Rtf\Document;

class Rtf implements TextLoader
{
    public function load(mixed $data): ?TextContent
    {
        $document = new Document($data);
        $text = $document->getRoot()->toText();

        return new TextContent($text);
    }
}
