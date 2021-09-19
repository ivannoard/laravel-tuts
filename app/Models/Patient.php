<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function room()
    {
        return $this->hasOne(Room::class);
    }
}
