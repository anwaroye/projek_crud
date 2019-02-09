<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_manager extends Model
{
    protected $table ='table_managers';
    protected $fillable =['
    id_manager',
  'position_manager',
  'name_manager',
  'gender',
  'place_of_birth',
  'birth_manager',
  'religion',
  'img_manager',
  'address',
  'desc_manager'
];
public function position_manager(){
  return $this->belongsTo('App\position_manager');
}
public function religion(){
  return $this->belongsTo('App\religion');
}
public function jeniskelamin(){
  return $this->belongsTo('App\jeniskelamin');
}
}
