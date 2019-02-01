<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBenda extends Model
{
    protected $table ='type_bendas';

    protected $fillable= [
      
      'kat_benda'
    ];
    public function table_object(){
      return $this->HasMany('App\table_object');
    }
}
