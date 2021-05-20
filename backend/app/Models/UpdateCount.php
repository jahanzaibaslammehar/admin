<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateCount extends Model
{
    use HasFactory;

    protected $table = 'update_counts';

    protected $fillable = [
        'post_id',
        'count'
    ];
}
