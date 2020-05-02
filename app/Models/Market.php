<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Market extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'markets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'country_id'];

    /**
     * Get the country that belongs the market
     */
    public function country()
    {
        return $this->belongsTo('App\Models\Country');
    }

    /**
     * Get the stocks for the market
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock');
    }
}
