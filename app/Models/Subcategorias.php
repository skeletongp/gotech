<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    use HasFactory;
    protected $table="subcategorias";

    public function subcategorias($id)
    {
        return Subcategorias::find($id);
    }
}
