<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    public $timestamps = false;

    protected $fillable = ['url', 'shortened'];

    /**
     * Get unique short URL
     *
     * @return string
     */
    public static function get_unique_short_url()
    {
        $shortened = str_random(5);
        if (self::where('shortened', $shortened)->get()->first()) {
            return self::get_unique_short_url();
        }
        return $shortened;
    }

}
