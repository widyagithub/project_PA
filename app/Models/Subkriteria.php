<?php

namespace App\Models;

use App\Models\Kriteria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subkriteria extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function kriteria(){
        return $this->belongsTo(Kriteria::class, 'id_kriteria', 'id');
    }
}
