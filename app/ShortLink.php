<?php

namespace App;
use App\Analytic;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    
    protected $guarded = ['id'];
    
    public    $table   = "short_link_excel";
  
    public function analytics()
    {
      return $this->hasMany(Analytic::class, 'short_link_excel_id');
    }
}