<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class religion extends Model
{
    protected $table ="religions";

    protected $fillable=
  [
    'option_religion'
  ];
  public function table_manager(){
    return $this->HasMany('App\table_manager');
  }
}
