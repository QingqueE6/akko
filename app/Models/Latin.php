<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latin extends Model
{
    use HasFactory;
    protected $table = 'latin';
    protected $fillable = [
        'latin',
        'additional',
        'german',
        'lesson',
    ];
}
