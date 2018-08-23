<?php

namespace MessengersTest\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use MessengersTest\Constants\MessageStatus;
use MessengersTest\Constants\Messenger;
use OpenApi\Annotations as OA;

/**
 * @OA\Schema(title="Message", description="Message json format")
 * @property int $id
 * @property string $text
 * @property string $messenger
 * @property string $user_identifier
 * @property string $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Message extends JsonResource
{
    /**
     * @OA\Property(
     *     format="int64",
     *     title="ID",
     *     default=1,
     *     description="ID",
     * )
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'text' => $this->text,
            'user_identifier' => $this->user_identifier,
            'messenger' => Messenger::getTextValues()[$this->messenger],
            'status' => MessageStatus::getTextValues()[$this->status],
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
