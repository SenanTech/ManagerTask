<?php

namespace App\Models;
use App\Models\Tache;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function taches()
{
    return $this->hasMany(Tache::class, 'projet_id');
}

}                                           