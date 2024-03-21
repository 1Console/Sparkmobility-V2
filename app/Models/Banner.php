<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected  $fillable = [
        'title',
        'description',
        'location',
        'info_title',
        'info_link',
        'image_path',
        'notes',
        'radius',
    ];
}
