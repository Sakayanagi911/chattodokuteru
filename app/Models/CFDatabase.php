<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CFDatabase extends Model
{
    use HasFactory;

    protected $table = 'cf_database';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'country_code',
        'phone',
        'age',
        'dob',
    ];
}
