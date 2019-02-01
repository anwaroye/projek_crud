<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class table_object extends Model
{

    protected $table ="table_objects";
    // protected $primaryKey ="id_object";
    protected $fillable =
    [
    'id_object',
    'object_name',
    'object_img',
    'type_object',
    'object_desc',
  ];
  public function TypeBenda(){
    return $this->belongsTo('App\TypeBenda');
  }


}
