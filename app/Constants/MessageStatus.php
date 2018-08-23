<?php
declare(strict_types=1);

namespace MessengersTest\Constants;

class MessageStatus
{
    public const CREATED = 0;

    public const SENDING_PROCESS = 1;

    public const SENT = 2;

    public const DELIVERED = 3;

    /**
     * @return array
     */
    public static function getTextValues(): array
    {
        return [
            self::CREATED => 'created',
            self::SENDING_PROCESS => 'sending being processed',
            self::SENT => 'sent',
            self::DELIVERED => 'delivered',
        ];
    }
}