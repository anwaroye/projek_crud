<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jeniskelamin extends Model
{
    protected $table = 'jeniskelamins';
    public function table_object(){
      return $this->HasMany('App\table_object');
    }
}
