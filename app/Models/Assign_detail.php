<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign_detail extends Model
{
    use HasFactory;
    
    protected $fillable = ['assign_id', 'user_id'];
}
