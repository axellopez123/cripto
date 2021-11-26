<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'shopping';

    protected $fillable= [
        'user_id',
        'nameMoney',
        'price',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
