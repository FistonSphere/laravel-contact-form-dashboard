<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailMessage extends Model
{
    public $fillable=[
        'name',
        'email',
        'subject',
        'message',
    ];

    
}
