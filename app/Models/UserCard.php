<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCard extends Model
{
    use HasFactory;

    /**
     *  Свзяь карты с User
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $fillable = [
        'first_name',
        'second_name',
        'user_id',
        'number',
        'date_to',
        'cvv'
    ];

    public function user()
    {
         return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
