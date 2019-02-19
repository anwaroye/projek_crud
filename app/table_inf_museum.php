<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_inf_museum extends Model
{
    protected $table = "table_inf_museums";
    protected $fillable = [
      'title_inf',
      'img_inf',
      'desc_inf'
    ];
}
