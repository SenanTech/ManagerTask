<?php

namespace App\Models;
use App\Models\Statut;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    
    public function status()
    {
        return $this->belongsTo(Statut::class);
    }
}