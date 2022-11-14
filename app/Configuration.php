<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShortLink;

class Configuration extends Model
{
    protected $guarded = ['id'];

    public static function getValue($name)
    {
        return self::where('name', $name)->pluck('value')->first();
    }
}
