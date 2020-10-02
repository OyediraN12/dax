<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRequest extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'request_type', 'requests'
    ];
    
    protected $appends = [
        'encoded_Id'
    ];

    /**
     * Getters
     */
    public function getEncodedIdAttribute()
    {
        return encodeId($this->id);
    }

    public function getRequestssAttribute($request)
    {
        return json_decode($request);
    }

    /**
    * Affliate belongs to  User
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
