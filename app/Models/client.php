<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    /** @use HasFactory<\Database\Factories\ClientsFactory> */
    use HasFactory;

    // protected $fillable = ['user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tickets(){
        return $this->hesMany(tickets::class);
    }
}
