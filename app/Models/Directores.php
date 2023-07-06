<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directores extends Model
{

    protected $primaryKey = 'id_director';

    protected $table = 'directores';

    public $timestamps = false;
}
