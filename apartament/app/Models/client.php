<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $primaryKey = 'tid';
    protected $fillable = [
        'Dni_client', 'Nom_i_cognoms', 'Edat', 'Telèfon', 'Adreça', 'Ciutat',
        'País', 'Email', 'Tipus_de_targeta', 'Número_de_la_targeta'
    ];
}
