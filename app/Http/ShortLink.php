<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class ShortLink extends Model
{
    
    protected $guarded = ['id'];
    public    $table   = "short_link_excel";



 
}