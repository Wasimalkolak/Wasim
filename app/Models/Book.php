<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, int $int)
 * @method static create(array $all)
 */
class Book extends Model
{
    //
    protected $fillable = [
        'title',
        'author',
        'year_published',
        'status',
    ];
}
