<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
  protected $fillable = [
      'user_id',
      'name',
      'tel',
      'adress',
      'email',
      'website',
    ];
}
