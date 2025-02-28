<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class developer extends Model
{
    /** @use HasFactory<\Database\Factories\DevelopersFactory> */
    use HasFactory;

    // protected $fillable = ['user_id'];

    public function developer(){
        return $this->belongsTo(User::class);
    }

    public function assignments(){
        return $this->belongsToMany(Assignment::class);
    }
}
