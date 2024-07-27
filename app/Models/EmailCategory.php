<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailCategory extends Model
{

    protected $table = 'email_categories';
    protected $fillable = ['name', 'category_id'];
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    public function emailCatagory()
    {
        return $this->hasMany(EmailCategory::class);
    }
}

