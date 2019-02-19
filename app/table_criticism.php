<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_criticism extends Model
{
    protected $table = "table_criticisms";
    protected $fillable = [
      'name_cs',
      'email_cs',
      'criticism',
      'sugestion'
    ];
}
