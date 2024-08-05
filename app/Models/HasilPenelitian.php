<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilPenelitian extends Model
{
    use HasFactory;
    protected $table = 'hasil_penelitian';
    protected $guarded = [];
}
