<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $fillable = [
      'name', 'lastname', 'sex','birth'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
