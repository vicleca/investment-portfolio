<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'countries';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['alpha_2', 'alpha_3'];

    /**
     * Get the markets for the country
     */
    public function markets()
    {
        return $this->hasMany('App\Models\Market');
    }
}
