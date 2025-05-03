<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'level',
        'context',
        'message',
        'user_id',
    ];

    protected $casts = [
        'context' => 'array',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
