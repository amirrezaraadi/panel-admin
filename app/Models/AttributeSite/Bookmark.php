<?php

namespace App\Models\AttributeSite;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'bookmarkable_type', 'bookmarkable_id',
    ];
}
