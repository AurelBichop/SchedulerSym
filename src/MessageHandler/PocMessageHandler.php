<?php

namespace App\MessageHandler;

use App\Message\PocMessage;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
final class PocMessageHandler{
    public function __invoke(PocMessage $message): void
    {
        echo date('Y-m-d H:i:s') . PHP_EOL;
    }
}
