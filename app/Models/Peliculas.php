<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{

    protected $primaryKey = 'id_peliculas';

    protected $table = 'peliculas';

    public $timestamps = false;
}
