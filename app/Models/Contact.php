<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $filleable = ['email', 'title', 'category', 'sub_category', 'description'];
}
