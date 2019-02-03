<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class position_manager extends Model
{
    protected $table='position_managers';
    protected $fillable =[
      'position_manag'
    ];
    public function table_manager(){
      return $this->HasMany('App\table_manager');
    }
}
