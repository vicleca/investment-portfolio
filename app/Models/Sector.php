<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sectors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the stocks for the sector
     */
    public function stocks()
    {
        return $this->hasMany('App\Models\Stock');
    }

    /**
     * Get the adminUser that belongs the sector
     */
    public function adminUser()
    {
        return $this->belongsTo('App\Models\AdminUser');
    }
}
