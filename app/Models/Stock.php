<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stock extends Model
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
    protected $fillable = ['name', 'ticker'];

    /**
     * Get the market that belongs the stock
     */
    public function market()
    {
        return $this->belongsTo('App\Models\Market');
    }

    /**
     * Get the currency that belongs the stock
     */
    public function currency()
    {
        return $this->belongsTo('App\Models\Currency');
    }

    /**
     * Get the sector that belongs the stock
     */
    public function sector()
    {
        return $this->belongsTo('App\Models\Sector');
    }

    /**
     * Get the industry that belongs the stock
     */
    public function industry()
    {
        return $this->belongsTo('App\Models\Industry');
    }

    /**
     * Get the adminUser that belongs the stock
     */
    public function adminUser()
    {
        return $this->belongsTo('App\Models\AdminUser');
    }
}
