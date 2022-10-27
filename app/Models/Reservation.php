<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'room_type',
        'number_of_guest',
        'cost',
    ];

    public function clients(){
        return $this->belongsTo(Client::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
