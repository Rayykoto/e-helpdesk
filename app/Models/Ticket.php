<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ticket_number', 'customer_id', 'level_id', 'assign_id', 'subject', 'description', 'attachment'];

    public function ticket_detail() 
    {
        return $this->belongsTo(Ticket_detail::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assign()
    {
        return $this->belongsTo(Assign::class);
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/tickets/' . $value),
        );
    }
}
