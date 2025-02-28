<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentFactory> */
    use HasFactory;

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function developer(){
        return $this->BelongsToMany(Developer::class);
    }

    public function tickets(){
        return $this->belongsTo(Tickets::class);
    }
}
