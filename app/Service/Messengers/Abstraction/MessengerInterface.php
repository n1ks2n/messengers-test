<?php
declare(strict_types=1);

namespace MessengersTest\Service\Messengers\Abstraction;

use MessengersTest\Entities\Message;

interface MessengerInterface
{
    /**
     * @param Message $message
     */
    public function send(Message $message): void;
}