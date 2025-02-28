<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tickets extends Model
{
    /** @use HasFactory<\Database\Factories\TicketsFactory> */
    use HasFactory;

    public function client(){
        return $this->belongsTo(client::class);
    }

    public function assignment(){
        return $this->hasOne(assignment::class);
    }

    public function software(){
        return $this->belongsTo(software::class);
    }
}
