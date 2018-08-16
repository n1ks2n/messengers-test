<?php
declare(strict_types=1);

namespace MessengersTest\Entities;

use Carbon\Carbon;
use Eloquent;

/**
 * @property int $id
 * @property string $text
 * @property int $messenger
 * @property string $user_identifier
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Message extends Eloquent
{
    public $table = 'messages';
}