<?php
declare(strict_types=1);

namespace MessengersTest\Constants;

class Messenger
{
    public const TELEGRAM = 0;

    public const WHATSAPP = 1;

    public const VIBER = 2;

    /**
     * @return array
     */
    public function getTextValues(): array
    {
        return [
            self::TELEGRAM => 'Telegram',
            self::WHATSAPP => 'WhatsApp',
            self::VIBER => 'Viber',
        ];
    }
}