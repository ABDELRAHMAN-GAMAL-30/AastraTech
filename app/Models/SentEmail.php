<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentEmail extends Model
{

    protected $table = 'sent_emails';
    protected $fillable = ['recipient', 'subject', 'body', 'status', 'sent_at'];
}
