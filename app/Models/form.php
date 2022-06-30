<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Email',
        'Phone',
        'exp',
        'Region',
        'Address',
        'skill',
        'ind',
        'salary',
        'remarks',
        'file_path',
    ];
}
