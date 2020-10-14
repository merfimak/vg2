<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  protected $fillable = [
        'portfolio_video_name', 'img_for_cover', 'portfolio_video'
    ];
}
