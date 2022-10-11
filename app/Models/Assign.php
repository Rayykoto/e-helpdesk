<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assign extends Model
{
    use HasFactory;

    protected $fillable = ['ticket_id', 'division_id'];

    public function division()
    {
        return $this->hasMany(Division::class);
    }
}
