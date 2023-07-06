<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companias extends Model
{
    protected $primaryKey = 'id_companias';

    protected $table = 'companias';

    public $timestamps = false;
}
