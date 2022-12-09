<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasFactory;

    protected $table = "user_messages";

    protected $fillable = [
        'message_id',
        'receiver_id',
        'sender_id',
        'type',
        'seen_status',
        'delivery_status'
    ];
}
