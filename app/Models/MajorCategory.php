<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MajorCategory extends Model
{
    use HasFactory;
    protected $table = "major_categories";
    protected $fillable = [
        'main_category_name',
        'description',
        'picture',
    ];
}
