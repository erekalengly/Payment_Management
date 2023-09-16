<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monthly extends Model
{
    use HasFactory;

    protected $table = "monthly";

    protected $fillable = [
        'name',
        'total_hour',
        'salary_id'
    ];
}
