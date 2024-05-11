<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneLivraison extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function Bon_Livraison()
    {
        return $this->belongsTo(Bon_Livraison::class, 'id_bon__livraisons', 'id');
    }
}