<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;



    protected $guarded = ['id'];

    // protected $primaryKey = 'user';
    // public $incrementing = false;
}
