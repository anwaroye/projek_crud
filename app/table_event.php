<?php

namespace App;
// namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class table_event extends Model
{
  protected $table ="table_events";
  // protected $primaryKey ="id_event";
  protected $fillable =
  [
  'id_event',
  'title_event',
  'status_event',
  'desc_event',
  'img_event',
  'time_event',
  'end_event',
  'location_event'
];
}
