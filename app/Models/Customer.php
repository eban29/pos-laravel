<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
   public const UPDATED_AT = null;   // table has no updated_at column

    protected $fillable = ['full_name', 'email', 'phone'];
}
