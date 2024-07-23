<?php

namespace TheAi\ReceiptScanner\Contracts;

use TheAi\ReceiptScanner\TextContent;

interface TextLoader
{
    public function load(mixed $data): ?TextContent;
}
