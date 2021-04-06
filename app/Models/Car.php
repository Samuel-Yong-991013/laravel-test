<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primaryKey = 'id';
    protected $fillable = ['name', 'founded', 'description'];
    // protected $primaryKey = false; (for if you don't want a primary key)
    // protected $primaryKey = 'name' (to set primary key)

    // protected $timestamps = false; (turns off timestamps: updated at, created at, etc.)

    // protected $dateFormat = 'h:m:s'; (modify date format)
}
