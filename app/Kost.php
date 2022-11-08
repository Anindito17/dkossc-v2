<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    protected $fillable=['id','foto','nama','kecamatan','jenis','mandi','listrik','wifi','harga','real_harga'];

    public function candidate(){
        return $this->hasMany(Candidate::class);
     }
}
