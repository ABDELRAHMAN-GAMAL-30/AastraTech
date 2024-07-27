<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{

    protected $fillable = ['emails', 'subject', 'body', 'sender', 'category_id'];
    public function category()
    {
        return $this->belongsTo(EmailCategory::class);
    }
}
