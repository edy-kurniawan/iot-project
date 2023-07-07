<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'timestamp',
        'ldr_value',
        'mode',
        'relay_1',
        'relay_2',
    ];
}
