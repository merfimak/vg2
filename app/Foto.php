<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
      protected $fillable = [
        'portfolio_img_name', 'portfolio_img_info', 'portfolio_img',
    ];
}
