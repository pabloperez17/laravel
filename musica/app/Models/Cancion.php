<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    use HasFactory;

    protected $table = 'canciones';

    public function artista_cancion()
    {
        return $this->belongsTo(Artista::class, 'artista_id');
    }

}
