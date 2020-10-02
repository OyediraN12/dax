<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['from','to', 'subject', 'message'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
