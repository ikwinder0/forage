<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShortLink;

class Analytic extends Model
{
    protected $guarded = ['id'];

    public function shortLink()
    {
        return $this->belongsTo(shortLink::class,'short_link_excel_id');
    }
}
